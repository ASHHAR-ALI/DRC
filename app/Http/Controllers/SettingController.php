<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contactmailsetting;
use App\Models\Theme;
use App\Models\DisputeTypeSetting;



class SettingController extends Controller
{
    public function index()
    {
        return view('Admin.setting');
    }


    public function contactsetting()
    {
        $contactusemails = Contactmailsetting::first();
        return view('Admin.settingpages.contactsetting', ['contactusemails' => $contactusemails]);
    }

    public function themesetting()
    {
        $themes = Theme::all();
        return view('Admin.settingpages.themesetting', ['themes' => $themes]);
    }

    public function viewDisputeTypeSetting()
    {
        $disputetypesettings = DisputeTypeSetting::all();
        return view('Admin.settingpages.disputetypesettings', ['disputetypesettings' => $disputetypesettings]);
    }



    public function addDisputeType(Request $request)
    {
        $disputeTypeNames = $request->dispute_type_name;

        // Check if any dispute type names were submitted
        if (!empty($disputeTypeNames)) {
            foreach ($disputeTypeNames as $typeName) {
                // Skip empty values
                if (empty($typeName)) {
                    continue;
                }

                // Check if the name already exists in the database
                $existingType = DisputeTypeSetting::where('dispute_type_name', $typeName)->first();
                if ($existingType) {
                    // If the name already exists, return with a fail message
                    return back()->with('fail_message', 'The dispute type "' . $typeName . '" already exists.');
                }

                // If the name doesn't exist, create a new DisputeTypeSetting instance and save it
                $data = new DisputeTypeSetting();
                $data->dispute_type_name = $typeName;
                $data->save();
            }

            return redirect('/viewDisputeTypeSetting')->with('flash_message', 'Dispute Types registered successfully');
        } else {
            return back()->with('fail_message', 'Please provide at least one Dispute Type.');
        }
    }




    public function deleteDisputeType($id)
    {
        $data = DB::table('dispute_type_settings')->where('id', $id)->first();
        $data = DB::table('dispute_type_settings')->where('id', $id)->delete();
        return redirect('/viewDisputeTypeSetting')->with('flash_message', 'Dispute Type Delete Successfully .');
    }

    public function contactmainsetting(Request $request)
    {
        // dd($request->all());

        $ContactMailReciever = new Contactmailsetting();
        $ContactMailReciever->contact_reciever_email = $request->contact_reciever_email;
        $ContactMailReciever->save();

        if ($ContactMailReciever) {
            return redirect('/contactsetting')->with('flash_message', 'Receiveing Email Set Successfully');
        }
    }

    public function deletecontactusemail($id)
    {
        $data = DB::table('contactmailsettings')->where('id', $id)->first();
        $data = DB::table('contactmailsettings')->where('id', $id)->delete();
        return redirect('/contactsetting')->with('flash_message', 'Contact-Us Receiving Email Delete Successfully .');
    }
}
