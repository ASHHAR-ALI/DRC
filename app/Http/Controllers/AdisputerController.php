<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dispute;
use App\Models\DisputeComment;
use App\Models\Disputer;
// use App\Models\Member;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\DB;
// use App\Models\Admin;

class AdisputerController extends Controller
{
    public function adisputerdashboard()
    {
        // Get the authenticated disputer (which is an instance of Dispute)
        $againstdisputer = Auth::guard('againstdisputer')->user();

        $alldisputes = Dispute::where('id', $againstdisputer->id)->count();

        // Count disputes that are new (status 0), not assigned to any member
        $pendingdisputes = Dispute::where('id', $againstdisputer->id)
            ->where('dispute_status', 0)
            ->whereNull('assigned_date')
            ->count();

        // Count disputes that have been assigned to a member but not yet scheduled (status 1)
        $assigneddisputes = Dispute::where('id', $againstdisputer->id)
            ->where('dispute_status', 1)
            ->whereNull('assigned_date')
            ->count();

        // Count disputes that have been scheduled (status 2)
        $dateassigneddisputes = Dispute::where('id', $againstdisputer->id)
            ->where('dispute_status', 2)
            ->whereNotNull('assigned_date')
            ->count();

        // Count disputes that are in progress (status 3)
        $inprogressdisputes = Dispute::where('id', $againstdisputer->id)
            ->where('dispute_status', 3)
            ->whereNotNull('assigned_date')
            ->count();

        // Count disputes that are completed (status 4)
        $completeddisputes = Dispute::where('id', $againstdisputer->id)
            ->where('dispute_status', 4)
            ->where('assigned_date', 4)
            ->count();

        return view('AgainstUser.adisputer-dashboard', compact(
            'againstdisputer',
            'alldisputes',
            'pendingdisputes',
            'assigneddisputes',
            'dateassigneddisputes',
            'inprogressdisputes',
            'completeddisputes'
        ));
    }




    public function adisputedetailview()
    {
        // Get the authenticated againstdisputer
        $againstDisputer = Auth::guard('againstdisputer')->user();

        // Fetch only the disputes related to this againstdisputer
        $alldisputes = Dispute::where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id)
            ->get();

        return view('AgainstUser.disputes.alldispute', compact('alldisputes'));
    }

    /**
     * Display the Pending Disputes of AGAINST DISPUTER / USER
     */
    public function apendingdisputeview()
    {
        $againstDisputer = Auth::guard('againstdisputer')->user();

        // Fetch the specific dispute related to this againstdisputer
        $pendingdisputes = Dispute::where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id) // Ensure the dispute is related to this againstdisputer
            ->where('dispute_status', 0)
            ->whereNull('assigned_date')
            ->get();

        return view('AgainstUser.disputes.pendingdispute', compact('pendingdisputes'));
    }



    /**
     * Display the Assigned Disputes of AGAINST DISPUTER / USER
     */
    public function aassigneddisputeview()
    {
        $againstDisputer = Auth::guard('againstdisputer')->user();

        // Fetch the specific dispute related to this againstdisputer
        $assigneddisputes = Dispute::where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id) // Ensure the dispute is related to this againstdisputer
            ->where('dispute_status', 1)
            ->whereNull('assigned_date')
            ->get();

        return view('AgainstUser.disputes.assigneddispute', compact('assigneddisputes'));
    }


    /**
     * Display the Date Assigned Disputes of AGAINST DISPUTER / USER
     */
    public function adateassigneddisputeview()
    {
        $againstDisputer = Auth::guard('againstdisputer')->user();

        // Fetch the specific dispute related to this againstdisputer
        $dateassigneddisputes = Dispute::where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id) // Ensure the dispute is related to this againstdisputer
            ->where('dispute_status', 2)
            ->whereNotNull('assigned_date')
            ->get();

        return view('AgainstUser.disputes.dateassigneddisputeview', compact('dateassigneddisputes'));
    }


    /**
     * Display the In-Progress Disputes of AGAINST DISPUTER / USER
     */
    public function ainprogressdisputeview()
    {
        $againstDisputer = Auth::guard('againstdisputer')->user();

        // Fetch the specific dispute related to this againstdisputer
        $inprogressdisputes = Dispute::where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id) // Ensure the dispute is related to this againstdisputer
            ->where('dispute_status', 3)
            ->whereNotNull('assigned_date')
            ->get();

        return view('AgainstUser.disputes.inprogressdisputeview', compact('inprogressdisputes'));
    }



    /**
     * Display the Completed Disputes of AGAINST DISPUTER / USER
     */
    public function acompleteddisputeview()
    {
        $againstDisputer = Auth::guard('againstdisputer')->user();
        $completeddisputes = Dispute::with('disputer', 'disputestype', 'members')
            ->where('disputer_id', $againstDisputer->disputer_id)
            ->where('id', $againstDisputer->id)
            ->where('dispute_status', 4)
            ->where('assigned_date', '4')
            ->get();


        return view('AgainstUser.disputes.completeddispute', compact('completeddisputes'));
    }








    // View the Details of Against Disputer Profile
    public function againstdisputerprofileview()
    {
        $disputers = Auth::guard('againstdisputer')->user();
        return view('AgainstUser.disputerprofile', ['disputers' => $disputers]);
    }

    // View the Form for Edit Against Disputer Profile
    public function editagainstdisputerprofile($id)
    {
        $disputers = Dispute::find($id);
        return view('AgainstUser.editdisputerprofile', ['disputers' => $disputers]);
    }

    // Function of Update Against Disputer Profile
    public function updatedagainstisputerprofile(Request $request, disputer $disputer, $id)
    {
        $disputers = Dispute::find($id);
        $disputers->dispute_person_name              = $request->dispute_person_name;
        $disputers->dispute_person_father_name       = $request->dispute_person_father_name;
        $disputers->email                            = $request->email;
        $disputers->password                         = bcrypt($request->password);
        $disputers->dispute_person_cnic              = $request->dispute_person_cnic;
        $disputers->dispute_person_contact_number    = $request->dispute_person_contact_number;
        $disputers->dispute_person_address           = $request->dispute_person_address;

        // Handle image upload
        if ($request->hasFile('againstdisputerimage')) {
            // Delete previous image if it exists
            $previousImage = $disputers->againstdisputerimage;
            if ($previousImage) {
                $imagePath = public_path('allassets/images/ActorsDetails/againstdisputers/' . $previousImage);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the previous image file
                }
            }
            $image = $request->file('againstdisputerimage');
            $img_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('allassets/images/ActorsDetails/againstdisputers'), $img_name);
            $disputers->againstdisputerimage = $img_name;
        }


        $disputers->save();

        if ($disputers) {
            return redirect('/againstdisputerprofile')->with('flash_message', 'Profile Updated Successfully');
        } else {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
    }



    public function viewCommentsForAgainstDisputer($id)
{
    // Retrieve the dispute by ID
    $dispute = Dispute::with('comments', 'members', 'disputestype')->findOrFail($id);

    // Retrieve the comments related to this dispute
    $comments = $dispute->comments;

    // Pass the dispute and comments to the view
    return view('AgainstUser.comments.viewcomments', compact('dispute', 'comments'));
}




    public function addcommentbyagainstdisputer(Request $request)
    {
        $againstdisputer = Auth::guard('againstdisputer')->user();

        // Assuming that the 'againstdisputer' is logged in and we have their associated dispute ID
        $disputeId = $againstdisputer->id;

        $comment = new DisputeComment();
        $comment->dispute_id = $disputeId;
        $comment->disputer_id = null; // Set null since it's for 'againstdisputer'
        $comment->member_id = null; // Ensure it's not associated with any member
        $comment->comment = $request->comment;
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully');
    }
}
