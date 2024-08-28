<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Dispute;
use App\Models\Disputer;

class DisputerController extends Controller
{

    public function disputerdashboard()
    {

        $disputer = Auth::guard('disputer')->user();

        // Count all disputes associated with the disputer
        $alldisputes = $disputer->disputes()->count();

        // Count disputes that are new (status 0), not assigned to any member
        $pendingdisputes = $disputer->disputes()
            ->whereDoesntHave('members') // No members assigned
            ->where('disputes.dispute_status', 0)
            ->whereNull('disputes.assigned_date')
            ->count();

        // Count disputes that have been assigned to a member but not yet scheduled
        $assigneddisputes = $disputer->disputes()
            ->whereHas('members') // At least one member assigned
            ->where('disputes.dispute_status', 1)
            ->whereNull('disputes.assigned_date')
            ->count();

        // Count disputes that have been scheduled (status 2)
        $dateassigneddisputes = $disputer->disputes()
            ->whereHas('members')
            ->where('disputes.dispute_status', 2)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        // Count disputes that are in progress (status 3)
        $inprogressdisputes = $disputer->disputes()
            ->whereHas('members')
            ->where('disputes.dispute_status', 3)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        // Count disputes that are completed (status 4)
        $completeddisputes = $disputer->disputes()
            ->whereHas('members')
            ->where('disputes.dispute_status', 4)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        return view('User.disputer-dashboard', compact('disputer', 'alldisputes', 'pendingdisputes', 'assigneddisputes', 'dateassigneddisputes', 'inprogressdisputes', 'completeddisputes'));
    }



    public function store(Request $request)
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
            $messg = "You registered Successfully </br> Please Login to Proceed";
            return redirect('/')->with('flash_message', $messg);
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










    // // store function for the register the disputer by own
    // public function store(Request $request)
    // {
    //     $validate = $request->validate([
    //         'email' => 'required|email|unique:admins,email|unique:members,email|unique:disputers',
    //         'password' => 'required|min:3|max:20',
    //     ]);
    //     if (!$validate) {
    //         return back()->with('fail_message', 'Something Get Wrong 😥');
    //     }
    //     $data = new disputer(); {
    //         $data->name                             = $request->name;
    //         $data->fathername                       = $request->fathername;
    //         $data->email                            = $request->email;
    //         $data->cnic                             = $request->cnic;
    //         $data->password                         = bcrypt($request->password); // Hash the password
    //         $data->contact                          = $request->contact;
    //         $data->address                          = $request->address;

    //         // Handle image upload
    //         if ($request->hasFile('disputerimage')) {
    //             $image = $request->file('disputerimage');
    //             $img_name = time() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('allassets/images/ActorsDetails/disputers'), $img_name);
    //             $data->disputerimage = $img_name;
    //         }


    //         $data->dispute_person_name              = $request->dispute_person_name;
    //         $data->dispute_person_father_name       = $request->dispute_person_father_name;
    //         $data->dispute_person_contact_number    = $request->dispute_person_contact_number;
    //         $data->dispute_person_address           = $request->dispute_person_address;
    //         $data->dispute_type                     = $request->dispute_type;
    //         $data->save();

    //         if ($data) {
    //             $messg = "You registered Successfully </br> Please Login to Proceed";
    //             return redirect('/')->with('flash_message', $messg);
    //         } else {
    //             return back()->with('fail_message', 'Something Went Wrong!!');
    //         }

    //         // Return a JSON response indicating success
    //         // return response()->json(['success' => true]);
    //     }
    // }





    // View the Details of Disputer Profile
    public function disputerprofileview()
    {
        $disputers = Auth::guard('disputer')->user();
        return view('User.disputerprofile', ['disputers' => $disputers]);
    }

    // View the Form for Edit Disputer Profile
    public function editdisputerprofile($id)
    {
        $disputers = Disputer::find($id);
        return view('User.editdisputerprofile', ['disputers' => $disputers]);
    }

    // Function of Update Disputer Profile
    public function updatedisputerprofile(Request $request, disputer $disputer, $id)
    {
        $disputers = Disputer::find($id);
        $disputers->name                             = $request->name;
        $disputers->fathername                       = $request->fathername;
        $disputers->email                            = $request->email;
        $disputers->password                         = bcrypt($request->password);
        $disputers->cnic                             = $request->cnic;
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
            return redirect('/disputerprofile')->with('flash_message', 'Profile Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
    }














    public function logout()
    {
        Auth::guard('disputer')->logout();
        return redirect('/')->with('flash_message', 'Successfully Logout✌');
    }


    // // Login Functionality for Disputer
    // public function disputerlogin(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required'],
    //         'password' => ['required'],
    //     ]);
    //     if (Auth::guard('disputer')->attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect('/home')->with('flash_message', 'Welcome !');
    //     } else {
    //         return redirect('/')->with('fail_message', 'Wrong Credentials!!');
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */



    /**
     * Display the specified resource.
     */
    public function show(Disputer $disputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Disputer $disputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disputer $disputer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Disputer $disputer)
    {
        //
    }
}
