





@include('Themes.AdminTheme.Theme02.Include.header')


@include('Themes.AdminTheme.Theme02.Include.navbar')


@include('Themes.AdminTheme.Theme02.Include.sidebar')


@include('Themes.AdminTheme.Theme02.FlashMessage.Messages.errormessage')

{{-- @include('Themes.AdminTheme.Theme02.Include.welcome') --}}


@include('Themes.AdminTheme.Theme02.Include.modals')


@yield('content')


@include('Themes.AdminTheme.Theme02.Include.footer')