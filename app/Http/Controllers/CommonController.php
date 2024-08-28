<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Admin;
// use App\Models\Member;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\Auth;


class CommonController extends Controller
{

        // Display for About Page
        public function about()
        {
            return view('Themes.DefaultTheme.Common.about');
        }
    
        // Display for FAQs Page
        public function faqs()
        {
            return view('Themes.DefaultTheme.Common.faqs');
        }
    
        // Display for About Page
        public function contacts()
        {
            return view('Themes.DefaultTheme.Common.contacts');
        }
}
