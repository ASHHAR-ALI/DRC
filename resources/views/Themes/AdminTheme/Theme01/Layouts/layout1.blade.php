









@include('Themes.AdminTheme.Theme01.Include.header')


@include('Themes.AdminTheme.Theme01.Include.navbar')


@include('Themes.AdminTheme.Theme01.Include.navigation')


@include('Themes.AdminTheme.Theme01.FlashMessage.Messages.errormessage')


{{-- @include('Themes.AdminTheme.Theme01.Include.content') --}}


@include('Themes.AdminTheme.Theme01.Include.welcome')


@include('Themes.AdminTheme.Theme01.Include.modals')


@include('Themes.AdminTheme.Theme01.Include.homecard')


@yield('content')


@include('Themes.AdminTheme.Theme01.Include.footer')



