<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DisputerController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\DisputeController;
use App\Http\Controllers\AdisputerController;
use App\Http\Controllers\ContactmailsettingController;

use App\Http\Middleware\Login;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Disputer;
use App\Http\Middleware\Member;
use App\Http\Middleware\Home;
use App\Http\Middleware\Adisputer;




// -----------------------------------------Routes for Admin----------------------------------------- //


// Index Landing page   /// Home Middleware only require for main index landing page
Route::get('/', [AdminController::class, 'index'])->middleware(Home::class);



// Route for ALL Login Functionality
Route::post('/login-all', [LoginController::class, 'login']);

// Route for view of Admin Dashboard
Route::get('/admin-dashboard', [AdminController::class, 'admindashboard'])->middleware(Login::class);






// Route for view of Admin Profile
Route::get('/adminprofile', [AdminController::class, 'adminprofileview'])->middleware(Login::class, Admin::class);

// Rout for edit the Admin profile
Route::get('/editadminprofile/{id}', [AdminController::class, 'editadminprofile'])->middleware(Login::class);

// Route for Update Functionality of Admin Profile
Route::post('/updateadminprofile/{id}', [AdminController::class, 'updateadminprofile'])->middleware(Login::class);



// Route for Creating the Theme in the Admin Panel
Route::post('/create-theme', [ThemeController::class, 'create'])->middleware(Login::class);


// Route for Updating the Theme in the Admin Panel
Route::post('/update-theme', [ThemeController::class, 'update'])->middleware(Login::class);


// Route for View the Setting Page
Route::get('/setting', [SettingController::class, 'index'])->middleware(Admin::class);

// Route for View the Contact Mail Setting Pages
Route::get('/contactsetting', [SettingController::class, 'contactsetting'])->middleware(Login::class);

// Route for View the Theme Setting Pages
Route::get('/themesetting', [SettingController::class, 'themesetting'])->middleware(Login::class);

// Route for Viewing the Dispute Types Setting Pages
Route::get('/viewDisputeTypeSetting', [SettingController::class, 'viewDisputeTypeSetting'])->middleware(Login::class);

// Route for Add the Dispute Types 
Route::post('/addDisputeType', [SettingController::class, 'addDisputeType'])->middleware(Login::class);

// Route for Delete the Dispute Types 
Route::get('/deleteDisputeType/{id}', [SettingController::class, 'deleteDisputeType'])->middleware(Login::class);



// Route for Sending the Contact Mail
Route::post('/contactemail', [ContactUsController::class, 'index']);

// Route for Contact main Setting Functionality
Route::post('/contactmainsetting', [SettingController::class, 'contactmainsetting'])->middleware(Login::class);

// Route for Delete Functionality of ContactUS Email
Route::get('/deletecontactusemail/{id}', [SettingController::class, 'deletecontactusemail'])->middleware(Login::class);







// Route for All Logout Functionality
Route::post('/logout', [LoginController::class, 'logout']);










// Route for Register Member -----------------------------------------------------------------------------by Admin Functionality
Route::post('/register-member', [AdminController::class, 'registermember']);

// Route for Register Member -----------------------------------------------------------------------------by Admin Functionality
Route::get('/memberdetailview', [AdminController::class, 'showmember'])->middleware(Login::class);

// Route for Edit Member -----------------------------------------------------------------------------by Admin Functionality
Route::get('/editmember/{id}', [AdminController::class, 'editmember'])->middleware(Login::class);

// Route for Update Member -----------------------------------------------------------------------------by Admin Functionality
Route::post('/updatemember/{id}', [AdminController::class, 'updatemember'])->middleware(Login::class);

// Route for Delete Member -----------------------------------------------------------------------------by Admin Functionality
Route::get('/deletemember/{id}', [AdminController::class, 'destroymember'])->middleware(Login::class);




// Route for View Details of Member -----------------------------------------------------------------------------by Admin Functionality
Route::get('/viewdetails/{id}', [AdminController::class, 'viewdetailsofmember'])->middleware(Login::class)->name('membersdetails');




// Route for Register disputer -----------------------------------------------------------------------------by Admin Functionality
Route::post('/insert-disputer', [AdminController::class, 'insertdisputer'])->middleware(Login::class);

// Route for View disputer -----------------------------------------------------------------------------by Admin Functionality
Route::get('/disputerdetailview', [AdminController::class, 'showdisputer'])->middleware(Login::class);

// Route for View disputer all Details-----------------------------------------------------------------------------by Admin Functionality
Route::get('/fetch-disputer-details', [AdminController::class, 'fetchDisputerDetails'])->middleware(Login::class);

// Route for Edit disputer -----------------------------------------------------------------------------by Admin Functionality
Route::get('/editdisputer/{id}', [AdminController::class, 'editdisputer'])->middleware(Login::class);

// Route for Update disputer -----------------------------------------------------------------------------by Admin Functionality
Route::post('/updatedisputer/{id}', [AdminController::class, 'updatedisputer'])->middleware(Login::class);

// Route for Delete disputer -----------------------------------------------------------------------------by Admin Functionality
Route::get('/deletedisputer/{id}', [AdminController::class, 'destroydisputer'])->middleware(Login::class);

// Route for View Details of Dipsuter -----------------------------------------------------------------------------by Admin Functionality
Route::get('/viewdetailsofdisputer/{id}', [AdminController::class, 'viewdetailsofdisputer'])->name('disputersdetails')->middleware(Login::class);

Route::post('/update_assigned_date/{dispute_id}', [AdminController::class, 'update_assigned_date'])->name('updateassigndate')->middleware(Admin::class);




// Route for View All Disputes -----------------------------------------------------------------------------by Admin Functionality
Route::get('/disputesdetail', [DisputeController::class, 'showdisputes'])->middleware(Login::class);

// Route for View Pending Disputes -----------------------------------------------------------------------------by Admin Functionality
Route::get('/pendingdisputesdetail', [DisputeController::class, 'showpendingdisputes'])->middleware(Login::class);

Route::get('/assigneddisputesdetail', [DisputeController::class, 'showassigneddisputes'])->middleware(Login::class);

Route::get('/dateassigneddisputedetail', [DisputeController::class, 'alldateassigneddisputes'])->middleware(Login::class);

Route::get('/inprogressdisputesdetail', [DisputeController::class, 'showinprogressdisputes'])->middleware(Login::class);

Route::get('/completeddisputesdetail', [DisputeController::class, 'showcompleteddisputes'])->middleware(Login::class);







// Route for view of A-Disputer Dashboard
Route::get('/adisputer-dashboard', [AdisputerController::class, 'adisputerdashboard'])->middleware(Login::class, Adisputer::class);

Route::get('/adisputedetailview', [AdisputerController::class, 'adisputedetailview'])->middleware(Login::class, Adisputer::class);

Route::get('/apendingdisputeview', [AdisputerController::class, 'apendingdisputeview'])->middleware(Login::class, Adisputer::class);

Route::get('/aassigneddisputeview', [AdisputerController::class, 'aassigneddisputeview'])->middleware(Login::class, Adisputer::class);

Route::get('/adateassigneddisputeview', [AdisputerController::class, 'adateassigneddisputeview'])->middleware(Login::class, Adisputer::class);

Route::get('/ainprogressdisputeview', [AdisputerController::class, 'ainprogressdisputeview'])->middleware(Login::class, Adisputer::class);

Route::get('/acompleteddisputeview', [AdisputerController::class, 'acompleteddisputeview'])->middleware(Login::class, Adisputer::class);


Route::get('/againstdisputerprofile', [AdisputerController::class, 'againstdisputerprofileview'])->middleware(Login::class, Adisputer::class);

Route::get('/editagainstdisputerprofile/{id}', [AdisputerController::class, 'editagainstdisputerprofile'])->middleware(Login::class, Adisputer::class);

Route::post('/updateagainstdisputerprofile/{id}', [AdisputerController::class, 'updatedagainstisputerprofile'])->middleware(Login::class, Adisputer::class);



Route::get('/viewcommentsforagainstdisputer/{id}', [AdisputerController::class, 'viewcommentsforagainstdisputer'])->name('viewcommentsforagainstdisputer')->middleware(Login::class);

Route::post('/addcommentbyagainstdisputer/{id}', [AdisputerController::class, 'addcommentbyagainstdisputer'])->name('addcommentbyagainstdisputer')->middleware(Login::class);




// -----------------------------------------Routes for User (Disputer)----------------------------------------- //

Route::get('/disputer-dashboard', [DisputerController::class, 'disputerdashboard'])->middleware(Disputer::class);

// Route for Disputer Home Page Dashboard
Route::post('/submit-registration', [DisputerController::class, 'store']);

// Route for view of Disputer Profile
Route::get('/disputerprofile', [DisputerController::class, 'disputerprofileview'])->middleware(Disputer::class);

// Rout for edit the Disputer profile
Route::get('/editdisputerprofile/{id}', [DisputerController::class, 'editdisputerprofile'])->middleware(Disputer::class);

// Route for Update Functionality of Disputer Profile
Route::post('/updatedisputerprofile/{id}', [DisputerController::class, 'updatedisputerprofile'])->middleware(Disputer::class);






// -----------------------------------------Routes for Disputes For User/Disptuter ----------------------------------------- //

Route::post('/add-dispute', [DisputeController::class, 'addDispute'])->middleware(Login::class);

Route::get('/disputedetailview', [DisputeController::class, 'disputedetailview'])->middleware(Login::class);

Route::get('/pendingdisputeview', [DisputeController::class, 'pendingdisputeview'])->middleware(Login::class);

Route::get('/assigneddisputeview', [DisputeController::class, 'assigneddisputeview'])->middleware(Login::class);

Route::get('/dateassigneddisputeview', [DisputeController::class, 'dateassigneddisputeview'])->middleware(Login::class);

Route::get('/inprogressdisputeview', [DisputeController::class, 'inprogressdisputeview'])->middleware(Login::class);

Route::get('/completeddisputeview', [DisputeController::class, 'completeddisputeview'])->middleware(Login::class);


// -----------------------------------------Routes for Disputes For Member ----------------------------------------- //


Route::get('/memberdisputedetailview', [DisputeController::class, 'memberdisputedetailview'])->middleware(Login::class);

Route::get('/membernewdisputeview', [DisputeController::class, 'membernewdisputeview'])->middleware(Login::class);

Route::get('/memberscheduledisputeview', [DisputeController::class, 'memberscheduledisputeview'])->middleware(Login::class);

Route::get('/memberinprogressdisputeview', [DisputeController::class, 'memberinprogressdisputeview'])->middleware(Login::class);

Route::get('/membercompleteddisputeview', [DisputeController::class, 'membercompleteddisputeview'])->middleware(Login::class);




// -----------------------------------------Routes for Assign Disputes For Member By Admin ----------------------------------------- //
Route::post('/assignmember/{dispute_id}', [DisputeController::class, 'assignmember'])->name('assignmember')->middleware(Login::class);


Route::get('/viewcommentfile/{id}', [DisputeController::class, 'viewcommentfile'])->name('viewcommentfile')->middleware(Login::class);

Route::get('/viewcomments/{id}', [DisputeController::class, 'viewcomments'])->name('viewcomments')->middleware(Login::class);

Route::post('/addcomment/{id}', [DisputeController::class, 'addcomment'])->name('addcomment')->middleware(Login::class);

Route::post('/addcommentbydisputer/{id}', [DisputeController::class, 'addcommentbydisputer'])->name('addcommentbydisputer')->middleware(Login::class);


Route::get('/viewcommentsfordisputer/{id}', [DisputeController::class, 'viewcommentsfordisputer'])->name('viewcommentsfordisputer')->middleware(Login::class);


Route::get('/viewcommentstoadmin/{id}', [DisputeController::class, 'viewcommentstoadmin'])->name('viewcommentstoadmin')->middleware(Login::class);



Route::post('/finalreview/{id}', [DisputeController::class, 'finalreview'])->name('finalreview')->middleware(Login::class);


Route::get('/reviewfinaldecision/{id}', [DisputeController::class, 'reviewfinaldecision'])->name('reviewfinaldecision')->middleware(Login::class);


Route::get('/alldisputedetailsmodalview/{id}', [DisputeController::class, 'alldisputedetailsmodalview'])->name('alldisputedetails')->middleware(Login::class);



Route::get('/download-report/{disputeId}', [DisputeController::class, 'downloadReport'])->name('downloadreport')->middleware(Login::class);










// -----------------------------------------Routes for Member--------------------------------------- //

Route::get('/member-dashboard', [MemberController::class, 'memberdashboard'])->middleware(Member::class);

// Route for view of Member Profile
Route::get('/memberprofile', [MemberController::class, 'memberprofileview'])->middleware(Member::class);

// Rout for edit the Member profile
Route::get('/editmemberprofile/{id}', [MemberController::class, 'editmemberprofile'])->middleware(Member::class);

// Route for Update Functionality of Member Profile
Route::post('/updatememberprofile/{id}', [MemberController::class, 'updatememberprofile'])->middleware(Member::class);

// Route::post('/memberlogout', [MemberController::class, 'logout']);


Route::post('/assigned_date/{dispute_id}', [MemberController::class, 'assigned_date'])->name('assigndate')->middleware(Member::class);


// Route::post('/update_assigned_date/{dispute_id}', [MemberController::class, 'update_assigned_date'])->name('updateassigndate')->middleware(Member::class);






// -----------------------------------------Routes for Common--------------------------------------- //

//  About Page
Route::get('/about', [CommonController::class, 'about']);

//  FAQs Page
Route::get('/faqs', [CommonController::class, 'faqs']);

//  Contact Page
Route::get('/contacts', [CommonController::class, 'contacts']);


// For testing different front end views
Route::get('/test', function () {
    return view('test');
});











// To view the iframe of themes in setting pages
Route::get('/default', function () {
    return view('Themes.DefaultTheme.Layouts.iframe.default');
})->middleware(Admin::class);


// To view the iframe of themes in setting pages
Route::get('/iframe01', function () {
    return view('Themes.DefaultTheme.Layouts.iframe.Theme01');
})->middleware(Admin::class);


// To view the iframe of themes in setting pages
Route::get('/iframe02', function () {
    return view('Themes.DefaultTheme.Layouts.iframe.Theme02');
})->middleware(Admin::class);


// To view the iframe of themes in setting pages
Route::get('/iframe03', function () {
    return view('Themes.DefaultTheme.Layouts.iframe.Theme03');
})->middleware(Admin::class);








// -----------------------------------------Routes for Clearing Cache--------------------------------------- //

// Route for Clear the Cache
Route::get('reset', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');

    return redirect('/DRC/public/');
})->middleware(Home::class);


Route::get('/RD', function () {
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::output();
    return redirect('/DRC/public/');
});









Route::get('/task', function () {
    return view('Task');
});





























































































// Route::get('/main', [ProductController::class, 'productdisplay']);

// Route::get('/allP', [ProductController::class, 'productview']);

// Route::post('/themes/store', [ThemeController::class, 'store'])->name('themes.store');

// Route::get('/themes', [ThemeController::class, 'index'])->name('themes.index');
// Route::post('/themes/update', [ThemeController::class, 'update'])->name('themes.update');
// Add more routes as needed







// Route::get('/product', function () {
//     return view('Admin.product');
// });


// Route::get('/', function () {
//     return view('Themes.OriginalLayouts.home');
// });
// Route::get('/index', function () {
//     return view('Themes.OriginalLayouts.index');
// });
// Route::get('/index1', function () {
//     return view('Themes.OriginalLayouts.index2');
// });
// Route::get('/index2', function () {
//     return view('Themes.OriginalLayouts.index3');
// });
// Route::get('/kaya', function () {
//     return view('Themes.OriginalLayouts.kayaall');
// });

// Route::get('/index', function () {
//     return view('Admin.index');
// });


// Route::get('/la1', function () {
//     return view('Themes.AdminTheme.Layouts.layout1');
// });
