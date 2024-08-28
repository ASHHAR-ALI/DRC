<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Member;
use App\Models\Disputer;
use App\Models\Dispute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{


    // Display the First Landing Page OR index page
    public function index()
    {
        return view('index');
    }

    // Display Admin-Dashboard Page when Admin LoggedIN

    public function admindashboard()
    {
        $admins = Auth::guard('admin')->user(); // Get the Authenticated Admin

        $allmembers = Member::count();
        $alldisputers = Disputer::count();
        $alldisputes = Dispute::count();

        // Updated queries to handle many-to-many relationship

        // Pending disputes: Disputes with no members assigned and status = 0
        $pendingdisputes = Dispute::whereDoesntHave('members') // Check if no members are associated
            ->where('dispute_status', 0)
            ->whereNull('assigned_date')
            ->count();

        // Assigned disputes: Disputes with members assigned, status = 1, and no assigned date
        $assigneddisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 1)
            ->where('assigned_date', null)
            ->count();

        // Date assigned disputes: Disputes with members assigned, status = 2, and a non-null assigned date
        $dateassigneddisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 2)
            ->whereNotNull('assigned_date')
            ->count();

        // In-progress disputes: Disputes with members assigned, status = 3, and a non-null assigned date
        $inprogressdisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 3)
            ->whereNotNull('assigned_date')
            ->count();

        // Completed disputes: Disputes with members assigned, status = 4, and a specific assigned date (or another relevant condition)
        $completeddisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 4)
            ->whereNotNull('assigned_date')
            ->count();

        return view('Admin.admin-dashboard', compact('admins', 'allmembers', 'alldisputers', 'alldisputes', 'pendingdisputes', 'assigneddisputes', 'dateassigneddisputes', 'inprogressdisputes', 'completeddisputes'));
    }






    // View the Details of Admin Profile
    public function adminprofileview()
    {
        $admins = Admin::first();
        return view('Admin.adminprofile', ['admins' => $admins]);
    }

    // View the Form for Edit Admin Profile
    public function editadminprofile($id)
    {
        $admins = Admin::find($id);
        return view('Admin.editadminprofile', ['admins' => $admins]);
    }

    // Function of Update Admin Profile
    public function updateadminprofile(Request $request, admin $admin, $id)
    {
        $admins = Admin::find($id);
        $admins->name                             = $request->name;
        $admins->email                            = $request->email;
        $admins->password                         = bcrypt($request->password);
        $admins->phone                            = $request->phone;
        $admins->address                          = $request->address;

        // Handle image upload
        if ($request->hasFile('adminimage')) {
            // Delete previous image if it exists
            $previousImage = $admins->adminimage;
            if ($previousImage) {
                $imagePath = public_path('allassets/images/ActorsDetails/admins/' . $previousImage);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the previous image file
                }
            }
            $image = $request->file('adminimage');
            $img_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('allassets/images/ActorsDetails/admins'), $img_name);
            $admins->adminimage = $img_name;
        }

        $admins->save();

        if ($admins) {
            return redirect('/adminprofile')->with('flash_message', 'Profile Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
    }

    // The Logout Function for the Admin
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/')->with('flash_message', 'Successfully Logout✌');
    }

    // Functions for Manage DRC Member By Admin ---------------------------------------//
    public function registermember(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:admins,email|unique:members,email|unique:disputers',
            'password' => 'required|min:3|max:20',
        ]);
        if (!$validate) {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
        $data = new member(); {
            $data->name                             = $request->name;
            $data->fathername                       = $request->fathername;
            $data->email                            = $request->email;
            $data->cnic                             = $request->cnic;
            $data->password                         = bcrypt($request->password); // Hash the password
            $data->contactnumber                    = $request->contactnumber;
            $data->address                          = $request->address;


            // Handle image upload
            if ($request->hasFile('memberimage')) {
                $image = $request->file('memberimage');
                $img_name = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('allassets/images/ActorsDetails/members'), $img_name);
                $data->memberimage = $img_name;
            }


            $data->save();

            if ($data) {
                return redirect('/memberdetailview')->with('flash_message', 'Member registered Successfully');
            } else {
                return back()->with('fail_message', 'Something Went Wrong!!');
            }
        }
    }

    public function showmember()
    {
        $members = Member::all();
        return view('Admin.allmembers', compact("members"));
    }

    public function editmember($id)
    {
        $members = Member::find($id);
        return view('Admin.editmember', compact('members'))->with('Srno', 1);
    }

    public function updatemember(Request $request, member $member, $id)
    {
        $members = Member::find($id);
        $members->name                             = $request->name;
        $members->fathername                       = $request->fathername;
        $members->email                            = $request->email;
        $members->cnic                             = $request->cnic;
        // $members->password                         = bcrypt($request->password); // Hash the password
        $members->contactnumber                    = $request->contactnumber;
        $members->address                          = $request->address;

        // Handle image upload
        if ($request->hasFile('memberimage')) {
            // Delete previous image if it exists
            $previousImage = $members->memberimage;
            if ($previousImage) {
                $imagePath = public_path('allassets/images/ActorsDetails/members/' . $previousImage);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the previous image file
                }
            }
            $image = $request->file('memberimage');
            $img_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('allassets/images/ActorsDetails/members'), $img_name);
            $members->memberimage = $img_name;
        }

        $members->save();

        if ($members) {
            return redirect('/memberdetailview')->with('flash_message', 'Member Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Went Wrong!!');
        }
    }

    public function destroymember($id)
    {
        // Retrieve the member data
        $member = DB::table('members')->where('id', $id)->first();
        if ($member) {
            // Delete the associated image file if it exists
            if ($member->memberimage) {
                $image_path = public_path('allassets/images/ActorsDetails/members/') . $member->memberimage;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            // Delete the member record from the database
            DB::table('members')->where('id', $id)->delete();

            return redirect('/memberdetailview')->with('flash_message', 'Member Deleted successfully.');
        } else {
            return redirect('/memberdetailview')->with('fail_message', 'Member not found.');
        }

        // $data = DB::table('members')->where('id', $id)->first();
        // $data = DB::table('members')->where('id', $id)->delete();
        // return redirect('/memberdetailview')->with('flash_message', 'Member Deleted successfully.');
    }




    // Functions for View Member Details By Admin in Popup  ---------------------------------------//
    public function viewdetailsofmember($id)
    {
        $member = Member::with('dispute')->find($id);

        return response()->json($member);
    }

    // Functions for View Disputer Details By Admin in Popup  ---------------------------------------//
    public function viewdetailsofdisputer($id)
    {
        $disputer = Disputer::with('disputes')->find($id);

        return response()->json($disputer); // Return disputer details as JSON
    }



    

    public function insertdisputer(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email|unique:admins,email|unique:members,email|unique:disputers',
            'password' => 'required|min:3|max:20',
        ]);

        if (!$validate) {
            return back()->with('fail_message', 'Something went wrong 😥');
        }

        // Insert data into the disputer table
        $disputer = new Disputer();
        $disputer->name = $request->name;
        $disputer->fathername = $request->fathername;
        $disputer->email = $request->email;
        $disputer->cnic = $request->cnic;
        $disputer->password = bcrypt($request->password); // Hash the password
        $disputer->contact = $request->contact;
        $disputer->address = $request->address;

        // Handle image upload
        if ($request->hasFile('disputerimage')) {
            $image = $request->file('disputerimage');
            $img_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('allassets/images/ActorsDetails/disputers'), $img_name);
            $disputer->disputerimage = $img_name;
        }

        $disputer->save();

        // Check if dispute details are provided in the form
        if ($request->filled(['dispute_person_name', 'dispute_person_father_name', 'dispute_person_contact_number', 'dispute_person_address', 'dispute_type'])) {
            // Call the method to insert data into the disputes table
            $this->insertDispute($request, $disputer->id);
        }

        if ($disputer) {
            return redirect('/disputerdetailview')->with('flash_message', 'Disputer registered successfully');
        } else {
            return back()->with('fail_message', 'Something went wrong 😥');
        }
    }
    // Method to insert data into the disputes table
    public function insertDispute(Request $request, $disputerId)
    {
        $dispute = new Dispute();
        $dispute->disputer_id = $disputerId; // Use the ID of the inserted disputer
        $dispute->dispute_person_name = $request->dispute_person_name;
        $dispute->dispute_person_father_name = $request->dispute_person_father_name;
        $dispute->dispute_person_contact_number = $request->dispute_person_contact_number;
        $dispute->dispute_person_address = $request->dispute_person_address;
        $dispute->dispute_type = $request->dispute_type;
        $dispute->save();
    }







    public function showdisputer()
    {
        $disputers = Disputer::all();
        return view('Admin.alldisputers', compact("disputers"));
    }

    public function fetchDisputerDetails()
    {
        $disputers = Disputer::all();
        return view('Admin.alldisputers', compact("disputers"));
    }

    public function editdisputer($id)
    {
        $disputers = Disputer::find($id);
        return view('Admin.editdisputer', compact('disputers'))->with('Srno', 1);
    }

    public function updatedisputer(Request $request, disputer $disputer, $id)
    {
        $disputers = disputer::find($id);
        $disputers->name                             = $request->name;
        $disputers->fathername                       = $request->fathername;
        $disputers->email                            = $request->email;
        $disputers->cnic                             = $request->cnic;
        // $disputers->password                         = bcrypt($request->password); // Hash the password
        $disputers->contact                          = $request->contact;
        $disputers->address                          = $request->address;

        // Handle image upload
        if ($request->hasFile('disputerimage')) {
            // Delete previous image if it exists
            $previousImage = $disputers->disputerimage;
            if ($previousImage) {
                $imagePath = public_path('allassets/images/ActorsDetails/disputers/' . $previousImage);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the previous image file
                }
            }
            $image = $request->file('disputerimage');
            $img_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('allassets/images/ActorsDetails/disputers'), $img_name);
            $disputers->disputerimage = $img_name;
        }

        $disputers->save();
        if ($disputers) {
            return redirect('/disputerdetailview')->with('flash_message', 'Disputer Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
    }

    public function destroydisputer($id)
    {

        // Retrieve the Disputer data
        $disputer = DB::table('disputers')->where('id', $id)->first();
        if ($disputer) {
            // Delete the associated image file if it exists
            if ($disputer->disputerimage) {
                $image_path = public_path('allassets/images/ActorsDetails/disputers/') . $disputer->disputerimage;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            // Delete the disputer record from the database
            DB::table('disputers')->where('id', $id)->delete();

            return redirect('/disputerdetailview')->with('flash_message', 'Disputer Deleted successfully.');
        } else {
            return redirect('/disputerdetailview')->with('fail_message', 'Disputer not found.');
        }

        // $data = DB::table('disputers')->where('id', $id)->first();
        // $data = DB::table('disputers')->where('id', $id)->delete();
        // return redirect('/disputerdetailview')->with('flash_message', 'Disputer Deleted successfully.');
    }






/**
     * Update the Assigned Date for Disputes by MEMBER
     */
    public function update_assigned_date(Request $request, $dispute_id)
    {
        $request->validate([
            'assigned_date' => 'required|date',
        ]);

        $assignedDate = $request->input('assigned_date');

        $dispute = Dispute::findOrFail($dispute_id);
        $dispute->assigned_date = $assignedDate;
        $dispute->final_decision_favor = "";
        $dispute->dispute_status = 2;
        $dispute->save();

        return redirect('/inprogressdisputesdetail')->with('flash_message', 'Updated Date Assigned Successfully✌');
    }








}
