<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Disputer;
use App\Models\Dispute;
use App\Models\Theme;
use App\Models\DisputeTypeSetting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        View::composer('welcome', function ($view) {
            if (Auth::guard('admin')->check()) {
                $admins = Admin::first();
                $view->with('admins', $admins);
            }
        });



        View::composer('welcome', function ($view) {
            if (Auth::guard('member')->check()) {
                $members = Member::first();
                $view->with('members', $members);
            }
        });



        View::composer('welcome', function ($view) {
            if (Auth::guard('disputer')->check()) {
                $disputers = Disputer::first();
                $view->with('disputers', $disputers);
            }
        });



        View::composer('welcome', function ($view) {
            if (Auth::guard('againstdisputer')->check()) {
                $againstdisputers = Dispute::first();
                $view->with('againstdisputers', $againstdisputers);
            }
        });



        View::composer('welcome', function ($view) {
            if (Auth::guard('admin')->check()) {
                $themes = Theme::all();
                $view->with('themes', $themes);
            }
        });





        // $disputetypespath = 'Themes/DefaultTheme/Common/Modals/Disputer-Register';

        // View::composer($disputetypespath, function ($view) {
        //     $disputeTypes = DisputeTypeSetting::all();
        //     $view->with('disputeTypes', $disputeTypes);
        // });

        $disputetypespath = [
            'Themes/DefaultTheme/Common/Modals/Disputer-Register',
            'Themes/DefaultTheme/Common/Modals/Add-Dispute',
        ];

        View::composer($disputetypespath, function ($view) {
            $disputeTypes = DisputeTypeSetting::all();
            $view->with('disputeTypes', $disputeTypes);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
