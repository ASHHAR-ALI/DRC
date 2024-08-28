<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admin;
// use App\Models\Member;
// use App\Models\Disputer;
// use Illuminate\Support\Facades\Hash;
// use Validate;
// use Session;

class LoginController extends Controller
{



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin-dashboard')->with('flash_message', 'You are Logged in as Admin!');
        } elseif (Auth::guard('member')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/member-dashboard')->with('flash_message', 'You are Logged in as Member!');
        } elseif (Auth::guard('disputer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/disputer-dashboard')->with('flash_message', 'You are Logged in as Disputer!');
        } elseif (Auth::guard('againstdisputer')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/adisputer-dashboard')->with('flash_message', 'You are Logged in as Dispute Person!');
        } else {
            return redirect('/')->with('fail_message', 'Wrong Credentials!!');
        }
    }



    public function logout()
    {
        $guards = ['admin', 'member', 'disputer', 'againstdisputer'];

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                Auth::guard($guard)->logout();
                return redirect('/')->with('flash_message', 'Successfully Logout✌');
            }
        }
    }





}
