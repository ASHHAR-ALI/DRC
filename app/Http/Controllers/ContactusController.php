<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;
use App\Models\Contactmailsetting;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index(Request $request){
        
        $remail = Contactmailsetting::first();

        $send = Mail::to($remail->contact_reciever_email)->send(new ContactUsMail($request));
        if($send){
            return redirect()->back()->with('flash_message', 'Thanks for Contacting Us for your Query.');
        }

    }
}


