<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Dispute;
use App\Models\DisputeComment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admin;
// use App\Models\Disputer;
// use App\Models\DisputeTypeSetting;
// use Dompdf\Dompdf;
// use Illuminate\Support\Facades\App;
// use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class DisputeController extends Controller
{

    // Method to insert data into the disputes table
    public function addDispute(Request $request)
    {
        // Get the ID of the logged-in user (assuming you are using Laravel's built-in authentication)
        $disputerId = Auth::guard('disputer')->user()->id;

        $dispute = new Dispute();
        $dispute->disputer_id = $disputerId; // Associate the disputer's ID with the dispute
        $dispute->dispute_person_name = $request->dispute_person_name;
        $dispute->dispute_person_father_name = $request->dispute_person_father_name;
        $dispute->dispute_person_contact_number = $request->dispute_person_contact_number;
        $dispute->dispute_person_address = $request->dispute_person_address;
        $dispute->email = $request->email;
        $dispute->password = $request->password;
        $dispute->dispute_person_cnic = $request->dispute_person_cnic;
        $dispute->dispute_type = $request->dispute_type;
        $dispute->save();

        if ($dispute) {
            return redirect('/disputedetailview')->with('flash_message', 'Dispute submitted successfully');
        } else {
            return back()->with('fail_message', 'Something went wrong 😥');
        }
    }




    //  ------------------- Controller Functions for Showing Dispute Details and Status to the Admin---------------------------------------------


    //  ------------------- Controller functions for View the ALL Details of Dispute
    // public function showdisputes()
    // {
    //     $disputes = Dispute::all();
    //     $members = Member::all();
    //     return view('Admin.disputes.alldisputes', compact('disputes', 'members'));
    // }
    public function showdisputes()
    {
        $disputes = Dispute::with('members', 'disputestype')->get();
        $members = Member::all();
        return view('Admin.disputes.alldisputes', compact('disputes', 'members'));
    }

    //  ------------------- Controller functions for View the Pending Dispute Details and Status to the Admin---------------------------------------------
    public function showpendingdisputes()
    {

        $pendingDisputes = Dispute::whereDoesntHave('members') // Check if no members are associated
            ->where('dispute_status', 0)
            ->whereNull('assigned_date')
            ->get();
        $members = Member::all();
        return view('Admin.disputes.allpendingdisputes', compact('pendingDisputes', 'members'));
    }

    public function showassigneddisputes()
    {
        $assignedDisputes = Dispute::whereHas('members') // Check if no members are associated
            ->where('dispute_status', 1)
            ->whereNull('assigned_date')
            ->get();
        return view('Admin.disputes.allassigneddispute', compact("assignedDisputes"));
    }

    public function alldateassigneddisputes()
    {
        $dateassignedDisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 2)
            ->whereNotNull('assigned_date')
            ->get();
        return view('Admin.disputes.alldateassigneddispute', compact("dateassignedDisputes"));
    }

    public function showinprogressdisputes()
    {
        $inprogressDisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 3)
            ->whereNotNull('assigned_date')
            ->get();
        return view('Admin.disputes.allinprogressdispute', compact("inprogressDisputes"));
    }

    public function showcompleteddisputes()
    {
        $completedDisputes = Dispute::whereHas('members') // Check if members are associated
            ->where('dispute_status', 4)
            ->where('assigned_date', 4)
            ->get();
        return view('Admin.disputes.allcompleteddispute', compact("completedDisputes"));
    }







    // -------------------Controller functions for Assigning Member to  Dispute by Admin --------------------------------------

    public function assignmember(Request $request, $dispute_id)
    {
        $dispute = Dispute::find($dispute_id);
        if (!$dispute) {
            return back()->with('fail_message', 'Dispute not found.');
        }

        // Sync the members with the dispute (replaces existing entries)
        $dispute->members()->sync($request->member_id);

        $dispute->dispute_status = 1;
        $dispute->save();

        return redirect('/disputesdetail')->with('flash_message', 'Members assigned to dispute successfully.');
    }





    //  ------------------- Controller Functions for Showing Dispute Details and Status to the Members---------------------------------------------

    /**
     * Display the Total Disputes that was assigned to MEMBER
     */
    public function memberdisputedetailview()
    {
        $member = Auth::guard('member')->user();
        $allmemberdisputes = $member->disputes;
        return view('Member.disputes.allmemberdispute', compact('allmemberdisputes'));
    }


    /**
     * Display the New Disputes that was assigned to MEMBER 
     */
    public function membernewdisputeview()
    {
        $member = Auth::guard('member')->user();
        $membernewdisputes = $member->disputes()
            ->whereNotNull('dispute_member.member_id') // Specify member_id from the pivot table
            ->where('disputes.dispute_status', 1)      // Specify the column with the table
            ->whereNull('disputes.assigned_date')      // Specify the column with the table and check for null
            ->get();

        return view('Member.disputes.membernewdispute', compact('membernewdisputes'));
    }

    /**
     * Display the Schedule Disputes that was assigned to MEMBER
     */
    public function memberscheduledisputeview()
    {
        $member = Auth::guard('member')->user();
        $memberscheduledisputes = $member->disputes()
            ->whereNotNull('dispute_member.member_id') // Specify the member_id from the pivot table
            ->where('disputes.dispute_status', 2)      // Specify the column with the table
            ->whereNotNull('disputes.assigned_date')   // Specify the column with the table
            ->get();

        return view('Member.disputes.memberscheduledispute', compact('memberscheduledisputes'));
    }

    /**
     * Display the In-Progress Disputes that was assigned to MEMBER
     */
    public function memberinprogressdisputeview()
    {
        $member = Auth::guard('member')->user();
        $memberinprogressdisputes = $member->disputes()
            ->whereNotNull('dispute_member.member_id') // Specify the member_id from the pivot table
            ->where('disputes.dispute_status', 3)
            ->whereNotNull('disputes.assigned_date')
            ->get();

        return view('Member.disputes.memberinprogressdispute', compact('memberinprogressdisputes'));
    }


    /**
     * Display the Completed Disputes that was assigned to MEMBER
     */
    public function membercompleteddisputeview()
    {
        $member = Auth::guard('member')->user();
        $membercompleteddisputes = $member->disputes()
            ->whereNotNull('dispute_member.member_id') // Specify the member_id from the pivot table
            ->where('disputes.dispute_status', 4)
            ->where('disputes.assigned_date', "4")
            ->get();

        return view('Member.disputes.membercompleteddispute', compact('membercompleteddisputes'));
    }


    /**
     * Display the The DETAILS Disputes to MEMBER in MODAL INFO
     */

    public function alldisputedetailsmodalview($id)
    {
        $dispute = Dispute::with('disputer', 'members')->find($id);

        if (!$dispute) {
            return response()->json(['error' => 'Dispute not found'], 404);
        }

        return response()->json($dispute);
    }












    // Controller Functions for Showing Dispute Details and Status to the Disputer---------------------------------------------

    /**
     * Display the Total Disputes of DISPUTER / USER
     */
    public function disputedetailview()
    {
        $disputer = Auth::guard('disputer')->user();
        $alldisputes = $disputer->disputes;
        return view('User.disputes.alldispute', compact('alldisputes'));
    }

    /**
     * Display the Pending Disputes of DISPUTER / USER
     */
    public function pendingdisputeview()
    {
        $disputer = Auth::guard('disputer')->user();
        $pendingdisputes = $disputer->disputes()
            ->whereHas('members', function ($query) {
                $query->whereNull('dispute_member.member_id');
            })
            ->where('disputes.dispute_status', 0)
            ->whereNull('disputes.assigned_date')
            ->get();

        return view('User.disputes.pendingdispute', compact('pendingdisputes'));
    }

    /**
     * Display the Assigned Disputes of DISPUTER / USER
     */
    public function assigneddisputeview()
    {
        $disputer = Auth::guard('disputer')->user();
        $assigneddisputes = $disputer->disputes()
            ->whereHas('members', function ($query) {
                $query->whereNotNull('dispute_member.member_id');
            })
            ->where('disputes.dispute_status', 1)
            ->whereNull('disputes.assigned_date')
            ->get();

        return view('User.disputes.assigneddispute', compact('assigneddisputes'));
    }

    /**
     * Display the Date Assigned Disputes of DISPUTER / USER
     */
    public function dateassigneddisputeview()
    {
        $disputer = Auth::guard('disputer')->user();
        $dateassigneddisputes = $disputer->disputes()
            ->whereHas('members', function ($query) {
                $query->whereNotNull('dispute_member.member_id');
            })
            ->where('disputes.dispute_status', 2)
            ->whereNotNull('disputes.assigned_date')
            ->get();

        return view('User.disputes.dateassigneddisputeview', compact('dateassigneddisputes'));
    }


    /**
     * Display the In-Progress Disputes of DISPUTER / USER
     */
    public function inprogressdisputeview()
    {
        $disputer = Auth::guard('disputer')->user();
        $inprogressdisputes = $disputer->disputes()
            ->whereHas('members', function ($query) {
                $query->whereNotNull('dispute_member.member_id');
            })
            ->where('disputes.dispute_status', 3)
            ->whereNotNull('disputes.assigned_date')
            ->get();

        return view('User.disputes.inprogressdisputeview', compact('inprogressdisputes'));
    }

    /**
     * Display the Completed Disputes of DISPUTER / USER
     */
    public function completeddisputeview()
    {
        $disputer = Auth::guard('disputer')->user();
        $completeddisputes = $disputer->disputes()
            ->whereHas('members', function ($query) {
                $query->whereNotNull('dispute_member.member_id');
            })
            ->where('disputes.dispute_status', 4)
            ->where('disputes.assigned_date', "4")
            ->get();

        return view('User.disputes.completeddispute', compact('completeddisputes'));
    }

    // public function disputedetailview()
    // {
    //     $disputer = Auth::guard('disputer')->user();

    //     $alldisputes = DB::table('disputes')
    //         ->join('disputers', 'disputes.disputer_id', '=', 'disputers.id')
    //         ->join('dispute_type_settings', 'disputes.dispute_type', '=', 'dispute_type_settings.id')
    //         ->select('disputes.*', 'dispute_type_settings.dispute_type_name as dispute_type_name')
    //         ->where('disputers.id', $disputer->id)
    //         ->get();

    //     // dd($alldisputes);

    //     return view('User.disputes.alldispute', compact('alldisputes'));
    // }











    public function addComment(Request $request)
    {
        $disputeId = $request->input('dispute_id');
        $memberId = Auth::guard('member')->id();
        // $memberId = $request->input('member_id');

        $dispute = Dispute::find($disputeId);

        if (!$dispute) {
            return redirect('/')->with('error', 'Dispute not found.');
        }

        $comment = new DisputeComment();
        $comment->dispute_id = $dispute->id;
        $comment->comment = $request->input('comment');
        $comment->member_id = $memberId;
        $comment->save();

        $dispute->update(['dispute_status' => 3]);

        return redirect('/viewcomments/' . $disputeId)->with('flash_message', 'Comment added to the dispute.');
    }



    // -------------------Controller functions for Commenting by Member to  Dispute  --------------------------------------
    public function viewcommentfile($id)
    {
        $dispute = Dispute::find($id);

        return view('Member.comments.viewcommentfile', compact('dispute'));
    }


    // -------------------Controller functions for View Comments to Member on Dispute --------------------------------------
    public function viewcomments($id)
    {
        $dispute = Dispute::with('comments', 'members', 'disputestype')->findOrFail($id);
        if (!$dispute) {
            return redirect('/')->with('error', 'Dispute not found.');
        }
        // Sort the comments by created_at in ascending order
        $comments = $dispute->comments->sortBy('created_at');

        return view('Member.comments.viewcomments', compact('dispute', 'comments'));
    }





    // -------------------Controller functions for View Comments to Disputer on Dispute --------------------------------------
    public function addcommentbydisputer(Request $request)
    {
        $disputeId = $request->input('dispute_id');
        $disputerId = Auth::guard('disputer')->id();

        $dispute = Dispute::find($disputeId);
        if (!$dispute) {
            return redirect('/')->with('error', 'Dispute not found.');
        }
        $comment = new DisputeComment();
        $comment->dispute_id = $dispute->id;
        $comment->comment = $request->input('comment');
        $comment->disputer_id = $disputerId;
        $comment->save();
        $dispute->update(['dispute_status' => 3]);

        return redirect('/viewcommentsfordisputer/' . $disputeId)->with('flash_message', 'Comment added to the dispute.');
    }


    // -------------------Controller functions for View Comments to Member on Dispute --------------------------------------
    public function viewcommentsfordisputer($id)
    {
        $dispute = Dispute::with(['comments.memberUser', 'comments.disputerUser'])
            ->find($id);

        if (!$dispute) {
            return redirect('/')->with('error', 'Dispute not found.');
        }

        // Merge all comments into a single collection and sort by created_at
        $comments = $dispute->comments->sortBy('created_at');

        return view('User.comments.viewcomments', compact('dispute', 'comments'));
    }





    // -------------------Controller functions for View Comments to Member on Dispute --------------------------------------
    public function viewcommentstoadmin($id)
    {
        // Retrieve the dispute by ID
        $dispute = Dispute::with('comments', 'members', 'disputestype')->findOrFail($id);

        // Retrieve the comments related to this dispute
        $comments = $dispute->comments->sortBy('created_at');

        return view('Admin.comments.viewcomments', compact('dispute', 'comments'));
    }





    // -------------------Controller functions for View Comments to Member on Dispute --------------------------------------
    public function finalreview(Request $request)
    {

        $disputeId = $request->input('dispute_id');

        $dispute = Dispute::find($disputeId);

        if (!$dispute) {
            return redirect('/')->with('flash_error', 'Something Went Wrong.');
        }
        $dispute->final_decision_favor = $request->final_decision_favor;
        $dispute->final_review = $request->final_review;
        $dispute->dispute_status = 4;
        $dispute->assigned_date = 4;

        $dispute->save();

        return redirect('/viewcomments/' . $disputeId)->with('flash_message', 'Dispute Closed Successfully.');
    }



    public function reviewfinaldecision($id)
    {
        $dispute = Dispute::with('disputer')->with('members')->find($id);

        return response()->json($dispute);
    }





    public function downloadReport($disputeId)
    {
        $dispute = Dispute::with(['disputer', 'members', 'disputestype', 'comments'])
        ->findOrFail($disputeId);

        if (!$dispute) {
            abort(404, 'Dispute not found.');
        }
        $pdf = PDF::loadView('User.PDF.Reports', ['dispute' => $dispute]);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream('disputes.pdf');
    }

}
