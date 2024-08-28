
@php
    // Determine if the current request is for the landing page
    $isLandingPage = request()->is('/'); // Adjust the condition based on your landing page route

    // Set default layout
    $layout = $isLandingPage ? 'Themes.DefaultTheme.Layouts.layout1' : 'Themes.DefaultTheme.Layouts.default';

    $activeTheme = \App\Models\Theme::where('status', 1)
        ->whereIn('themelayoutname', ['Default', 'DarkGreeva', 'DeskApp', 'Multicart'])
        ->first();

    // Function to determine layout based on theme name
    function getLayoutByTheme($themeName) {
        switch ($themeName) {
            case 'Default':
                return 'Themes.DefaultTheme.Layouts.default';
            case 'DarkGreeva':
                return 'Themes.AdminTheme.Theme01.Layouts.default';
            case 'DeskApp':
                return 'Themes.AdminTheme.Theme02.Layouts.default';
            case 'Multicart':
                return 'Themes.AdminTheme.Theme03.Layouts.default';
            default:
                return 'Themes.DefaultTheme.Layouts.default'; // Fallback to the default layout
        }
    }

    if ($activeTheme) {
        if (Auth::guard('admin')->check() ||
            Auth::guard('member')->check() ||
            Auth::guard('disputer')->check() ||
            Auth::guard('againstdisputer')->check()) {
            $layout = getLayoutByTheme($activeTheme->themelayoutname);
        }
    }

@endphp

@extends($layout)















































{{-- @php
    $layout = 'Themes.DefaultTheme.Layouts.layout1'; // Default layout

    $activeTheme = \App\Models\Theme::where('status', 1)
        ->whereIn('themelayoutname', ['Default', 'DarkGreeva', 'DeskApp', 'Multicart'])
        ->first();

    // Function to determine layout based on theme name
    function getLayoutByTheme($themeName) {
        switch ($themeName) {
            case 'Default':
                return 'Themes.DefaultTheme.Layouts.default';
            case 'DarkGreeva':
                return 'Themes.AdminTheme.Theme01.Layouts.default';
            case 'DeskApp':
                return 'Themes.AdminTheme.Theme02.Layouts.default';
            case 'Multicart':
                return 'Themes.AdminTheme.Theme03.Layouts.default';
            default:
                return 'Themes.DefaultTheme.Layouts.layout1'; // Default fallback
        }
    }

    if ($activeTheme) {
        if (Auth::guard('admin')->check() ||
            Auth::guard('member')->check() ||
            Auth::guard('disputer')->check() ||
            Auth::guard('againstdisputer')->check()) {
            $layout = getLayoutByTheme($activeTheme->themelayoutname);
        }
    }

@endphp

@extends($layout) --}}





















{{-- @php
    $layout = 'Themes.DefaultTheme.Layouts.layout1'; // Default layout

    $activeTheme = \App\Models\Theme::where('status', 1)
        ->whereIn('themelayoutname', ['Default', 'DarkGreeva', 'DeskApp', 'Multicart'])
        ->first();

    if (Auth::guard('admin')->check()) {
        if ($activeTheme) {
            switch ($activeTheme->themelayoutname) {
                case 'Default':
                    $layout = 'Themes.DefaultTheme.Layouts.default';
                    break;
                case 'DarkGreeva':
                    $layout = 'Themes.AdminTheme.Theme01.Layouts.default';
                    break;
                case 'DeskApp':
                    $layout = 'Themes.AdminTheme.Theme02.Layouts.default';
                    break;
                case 'Multicart':
                    $layout = 'Themes.AdminTheme.Theme03.Layouts.default';
                    break;
                default:
                    // Handle default case
                    break;
            }
        }
    } elseif (Auth::guard('member')->check()) {
        switch ($activeTheme->themelayoutname) {
            case 'Default':
                $layout = 'Themes.DefaultTheme.Layouts.default';
                break;
            case 'DarkGreeva':
                $layout = 'Themes.AdminTheme.Theme01.Layouts.default';
                break;
            case 'DeskApp':
                $layout = 'Themes.AdminTheme.Theme02.Layouts.default';
                break;
            case 'Multicart':
                $layout = 'Themes.AdminTheme.Theme03.Layouts.default';
                break;
            default:
                // Handle default case
                break;
        }
    } elseif (Auth::guard('disputer')->check()) {
        switch ($activeTheme->themelayoutname) {
            case 'Default':
                $layout = 'Themes.DefaultTheme.Layouts.default';
                break;
            case 'DarkGreeva':
                $layout = 'Themes.AdminTheme.Theme01.Layouts.default';
                break;
            case 'DeskApp':
                $layout = 'Themes.AdminTheme.Theme02.Layouts.default';
                break;
            case 'Multicart':
                $layout = 'Themes.AdminTheme.Theme03.Layouts.default';
                break;
            default:
                // Handle default case
                break;
        }
    } elseif (Auth::guard('againstdisputer')->check()) {
        switch ($activeTheme->themelayoutname) {
            case 'Default':
                $layout = 'Themes.DefaultTheme.Layouts.default';
                break;
            case 'DarkGreeva':
                $layout = 'Themes.AdminTheme.Theme01.Layouts.default';
                break;
            case 'DeskApp':
                $layout = 'Themes.AdminTheme.Theme02.Layouts.default';
                break;
            case 'Multicart':
                $layout = 'Themes.AdminTheme.Theme03.Layouts.default';
                break;
            default:
                break;
        }
    }
    else {
        // Handle default case
        $layout = 'Themes.DefaultTheme.Layouts.layout1';
    }

@endphp

@extends($layout) --}}
