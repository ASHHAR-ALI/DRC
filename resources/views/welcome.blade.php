@php
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

@endphp

@extends($layout)
