<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;


class ThemeController extends Controller
{

    public function create(Request $request)
    {
        // Validate the form data
        $validate = $request->validate([
            'themename' => 'required',
            'themelayoutname' => 'required',
            'themeiframeurl' => 'required',
        ]);

        if (!$validate) {
            return back()->with('fail_message', 'Something Get Wrong 😥');
        }
        $theme = new theme(); {
            $theme->themename                             = $request->themename;
            $theme->themelayoutname                       = $request->themelayoutname;
            $theme->themeiframeurl                        = $request->themeiframeurl;
            $theme->save();
        }

        // Extract form data
        $themeName = $request->input('themename');
        $layoutName = $request->input('themelayoutname');
        $urlName = $request->input('themeiframeurl');

        // Create directory if not exists
        $themeDirectory = resource_path("views/Themes/AdminTheme/$themeName");
        if (!File::exists($themeDirectory)) {
            File::makeDirectory($themeDirectory, 0755, true);
        }



        $routePath = "$urlName";
        // Define the controller method that will handle the route
        $controllerMethod = "return view('Themes.DefaultTheme.Layouts.iframe.$themeName');";


        // Dynamically add a new route to the web.php file
        $routeDefinition = "Route::get('$routePath', function(){ 
            $controllerMethod 
        });";

        // Append the route definition to the web.php file
        File::append(base_path('routes/web.php'), $routeDefinition . PHP_EOL);


        // Create directory if not exists
        $iframeDirectory = resource_path("views/Themes/DefaultTheme/Layouts/iframe");
        if (!File::exists($iframeDirectory)) {
            File::makeDirectory($iframeDirectory, 0755, true);
        }

        // Creating the Sub Directories

        // Create common directory
        $commonDirectory = "$themeDirectory/Common";
        if (!File::exists($commonDirectory)) {
            File::makeDirectory($commonDirectory, 0755, true);
        }

        // Create commonEmail directory
        $commonemailDirectory = "$themeDirectory/Common/Emails";
        if (!File::exists($commonemailDirectory)) {
            File::makeDirectory($commonemailDirectory, 0755, true);
        }

        // Create commonModals directory
        $commonmodalsDirectory = "$themeDirectory/Common/Modals";
        if (!File::exists($commonmodalsDirectory)) {
            File::makeDirectory($commonmodalsDirectory, 0755, true);
        }

        // Create FlashMessages directory
        $flashMessagesDirectory = "$themeDirectory/FlashMessages/Messages";
        if (!File::exists($flashMessagesDirectory)) {
            File::makeDirectory($flashMessagesDirectory, 0755, true);
        }

        // Create include directory
        $includeDirectory = "$themeDirectory/Include";
        if (!File::exists($includeDirectory)) {
            File::makeDirectory($includeDirectory, 0755, true);
        }

        // Create layouts directory
        $layoutsDirectory = "$themeDirectory/Layouts";
        if (!File::exists($layoutsDirectory)) {
            File::makeDirectory($layoutsDirectory, 0755, true);
        }

        // Create link scripts directory
        $linkScriptsDirectory = "$themeDirectory/LinkScripts";
        if (!File::exists($linkScriptsDirectory)) {
            File::makeDirectory($linkScriptsDirectory, 0755, true);
        }

        // Create blade files
        $iframeBladeContent = ''; // Content of iframe directory .blade.php
        file_put_contents("$iframeDirectory/$themeName.blade.php", $iframeBladeContent);


        // // Creating the Blade Files

        // // Create blade files
        // $headerBladeContent = ''; // Content of header.blade.php
        // file_put_contents("$includeDirectory/header.blade.php", $headerBladeContent);

        // // Create blade files
        // $navbarBladeContent = ''; // Content of navbar.blade.php
        // file_put_contents("$includeDirectory/navbar.blade.php", $navbarBladeContent);

        // // Create blade files
        // $footerBladeContent = ''; // Content of footer.blade.php
        // file_put_contents("$includeDirectory/footer.blade.php", $footerBladeContent);

        // // Create blade files
        // $contentBladeContent = ''; // Content of content.blade.php
        // file_put_contents("$includeDirectory/content.blade.php", $contentBladeContent);

        // // Create blade files
        // $sidebarBladeContent = ''; // Content of sidebar.blade.php
        // file_put_contents("$includeDirectory/sidebar.blade.php", $sidebarBladeContent);

        // // Create blade files
        // $modalsBladeContent = ''; // Content of modals.blade.php
        // file_put_contents("$includeDirectory/modals.blade.php", $modalsBladeContent);



        // // Create blade files for Layouts in Theme/AdminTheme/  
        // $defaultlayoutsBladeContent = ''; // Content of default.blade.php
        // file_put_contents("$layoutsDirectory/default.blade.php", $defaultlayoutsBladeContent);

        // // Create blade files
        // $layouts01BladeContent = ''; // Content of layout1.blade.php
        // file_put_contents("$layoutsDirectory/layout1.blade.php", $layouts01BladeContent);

        // // Create blade files
        // $layouts02BladeContent = ''; // Content of layout2.blade.php
        // file_put_contents("$layoutsDirectory/layout2.blade.php", $layouts02BladeContent);



        // // Create blade files
        // $headlinksBladeContent = ''; // Content of headlinks.blade.php
        // file_put_contents("$linkScriptsDirectory/headlinks.blade.php", $headlinksBladeContent);

        // // Create blade files
        // $scripttagsBladeContent = ''; // Content of scripttags.blade.php
        // file_put_contents("$linkScriptsDirectory/scripttags.blade.php", $scripttagsBladeContent);



        // // Create blade files
        // $errormessageBladeContent = ''; // Content of errormessage.blade.php in Flash Message Directory
        // file_put_contents("$flashMessagesDirectory/errormessage.blade.php", $errormessageBladeContent);


        // // Create blade files
        // $commonaboutBladeContent = ''; // Content of Common/about.blade.php in Flash Message Directory
        // file_put_contents("$commonDirectory/about.blade.php", $commonaboutBladeContent);


        // // Create blade files
        // $commonfaqsBladeContent = ''; // Content of Common/faqs.blade.php in Flash Message Directory
        // file_put_contents("$commonDirectory/faqs.blade.php", $commonfaqsBladeContent);



        // // Create blade files
        // $contactusmailBladeContent = ''; // Content of Common/contactusmail.blade.php in Flash Message Directory
        // file_put_contents("$commonemailDirectory/contactusmail.blade.php", $contactusmailBladeContent);


        // // Create blade files
        // $disputerRegisterBladeContent = ''; // Content of Common/Modals/Disputer-Register.blade.php in Flash Message Directory
        // file_put_contents("$commonmodalsDirectory/Disputer-Register.blade.php", $disputerRegisterBladeContent);

        // // Create blade files
        // $memberRegisterBladeContent = ''; // Content of Common/Modals/Member-Register.blade.php in Flash Message Directory
        // file_put_contents("$commonmodalsDirectory/Member-Register.blade.php", $memberRegisterBladeContent);

        // // Create blade files
        // $mainLoginBladeContent = ''; // Content of Common/Modals/Main-Login.blade.php in Flash Message Directory
        // file_put_contents("$commonmodalsDirectory/Main-Login.blade.php", $mainLoginBladeContent);



        // Copy content from existing theme files to the new theme files
        $existingThemeName = 'DefaultTheme'; // Replace 'OldTheme' with the name of the existing theme
        $existingThemeDirectory = resource_path("views/Themes/$existingThemeName");



        // Copy include files
        File::copyDirectory("$existingThemeDirectory/Include", $includeDirectory);

        // Copy Common files
        File::copyDirectory("$existingThemeDirectory/Common", $commonDirectory);

        // Copy Common/Emails files
        File::copyDirectory("$existingThemeDirectory/Common/Emails", $commonemailDirectory);

        // Copy Common/Modals files
        File::copyDirectory("$existingThemeDirectory/Common/Modals", $commonmodalsDirectory);

        // // Copy Emails files
        // File::copyDirectory("$existingThemeDirectory/Emails", $EmailsDirectory);

        // Copy FlashMessages files
        File::copyDirectory("$existingThemeDirectory/FlashMessage/Messages", $flashMessagesDirectory);

        // Copy layouts files
        File::copyDirectory("$existingThemeDirectory/Layouts", $layoutsDirectory);

        // Copy link scripts files
        File::copyDirectory("$existingThemeDirectory/LinkScripts", $linkScriptsDirectory);


        // Optionally, you can return a success response
        $redirect =   redirect('/themesetting')->with('flash_message', 'Theme Structure Create Successfully');
        // Clear route cache to reflect the changes
        Artisan::call('route:cache');

        return $redirect;
    }




    public function update(Request $request)
    {
        $themeId = $request->input('theme_id');
        $selectedTheme = Theme::find($themeId);

        if (!$selectedTheme) {
            return redirect('themesetting')->with('error_message', 'Selected theme not found.');
        }

        // Find the currently active theme and set its status to 0
        $currentActiveTheme = Theme::where('status', 1)->first();
        if ($currentActiveTheme) {
            $currentActiveTheme->status = 0;
            $currentActiveTheme->save();
        }

        // Set the status of the selected theme to 1
        $selectedTheme->status = 1;
        $selectedTheme->save();

        return redirect('/themesetting')->with('flash_message', 'Theme updated successfully.');
    }


}
