<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('/allassets/DefaultTheme/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('/allassets/DefaultTheme/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('/allassets/DefaultTheme/favicons/favicon-16x16.png') }}">

    <title> @yield('title') </title>


    @include('Themes.DefaultTheme.LinkScripts.headlinks')

</head>
