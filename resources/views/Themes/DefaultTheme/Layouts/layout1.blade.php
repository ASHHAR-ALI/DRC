



@include('Themes.DefaultTheme.Include.header')

@include('Themes.DefaultTheme.Include.navbar')

@include('Themes.DefaultTheme.FlashMessage.Messages.errormessage')

@include('Themes.DefaultTheme.Include.modals')

@include('Themes.DefaultTheme.Include.welcome')

@include('Themes.DefaultTheme.Include.homecard')

@yield('content')

@include('Themes.DefaultTheme.Include.footer')