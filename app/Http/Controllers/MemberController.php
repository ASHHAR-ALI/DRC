<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Dispute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display the Main MEMBER Dashboard page
     */
    public function memberdashboard()
    {
        $members = Auth::guard('member')->user();

        $alldisputes = $members->disputes()->count();

        $newassigneddisputes = $members->disputes()
            ->whereNotNull('dispute_member.member_id')
            ->where('disputes.dispute_status', 1)
            ->whereNull('disputes.assigned_date')
            ->count();

        $memberscheduleassigneddisputes = $members->disputes()
            ->whereNotNull('dispute_member.member_id')
            ->where('disputes.dispute_status', 2)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        $inprogressdisputes = $members->disputes()
            ->whereNotNull('dispute_member.member_id')
            ->where('disputes.dispute_status', 3)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        $completeddisputes = $members->disputes()
            ->whereNotNull('dispute_member.member_id')
            ->where('disputes.dispute_status', 4)
            ->whereNotNull('disputes.assigned_date')
            ->count();

        return view('Member.member-dashboard', compact('members', 'alldisputes', 'newassigneddisputes', 'memberscheduleassigneddisputes', 'inprogressdisputes', 'completeddisputes'));
    }





    /**
     * View the Details of MEMBER Profile
     */
    public function memberprofileview()
    {
        $members = Auth::guard('member')->user();
        return view('Member.memberprofile', ['members' => $members]);
    }

    /**
     * View the Form of Edit MEMBER Profile
     */
    public function editmemberprofile($id)
    {
        $members = Member::find($id);
        return view('Member.editmemberprofile', ['members' => $members]);
    }

    /**
     * View the Form of Update MEMBER Profile
     */
    public function updatememberprofile(Request $request, member $member, $id)
    {
        $members = Member::find($id);
        $members->name                             = $request->name;
        $members->fathername                       = $request->fathername;
        $members->email                            = $request->email;
        $members->password                         = bcrypt($request->password);
        $members->cnic                             = $request->cnic;
        $members->contactnumber                    = $request->contactnumber;
        $members->address                          = $request->address;
        
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
            return redirect('/memberprofile')->with('flash_message', 'Profile Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
    }


    /**
     * Logout Functionality for MEMBER
     */
    public function logout()
    {
        Auth::guard('member')->logout();
        return redirect('/')->with('flash_message', 'Successfully Logout✌');
    }


    /**
     * Assigned Date to Disputers for Disputes by MEMBER
     */
    public function assigned_date(Request $request, $dispute_id)
    {
        $request->validate([
            'assigned_date' => 'required|date',
        ]);

        $assignedDate = $request->input('assigned_date');

        $dispute = Dispute::findOrFail($dispute_id);
        $dispute->assigned_date = $assignedDate;
        $dispute->dispute_status = 2;
        $dispute->save();

        return redirect('/memberdisputedetailview')->with('flash_message', 'Date Assigned Successfully✌');
    }


    // /**
    //  * Update the Assigned Date for Disputes by MEMBER
    //  */
    // public function update_assigned_date(Request $request, $dispute_id)
    // {
    //     $request->validate([
    //         'assigned_date' => 'required|date',
    //     ]);

    //     $assignedDate = $request->input('assigned_date');

    //     $dispute = Dispute::findOrFail($dispute_id);
    //     $dispute->assigned_date = $assignedDate;
    //     $dispute->dispute_status = 2;
    //     $dispute->save();

    //     return redirect('/memberdisputedetailview')->with('flash_message', 'Updated Date Assigned Successfully✌');
    // }
}



/**
 * Login Functionality for Member
 *  */  

    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required'],
    //         'password' => ['required'],
    //     ]);
    //     if (Auth::guard('member')->attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect('/member-dashboard')->with('flash_message', 'You are Logged In As Member!!');
    //         // ->with('flash_message', 'You are Logged in as Admin!');
    //     } else {
    //         return redirect('/')->with('fail_message', 'Wrong Credentials!!');
    //     }
    // }