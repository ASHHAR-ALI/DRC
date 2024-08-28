





@include('Themes.AdminTheme.Theme03.Include.header')




@include('Themes.AdminTheme.Theme03.Include.navbar')



@include('Themes.AdminTheme.Theme03.Include.sidebar')



@include('Themes.AdminTheme.Theme03.FlashMessage.Messages.errormessage')



{{-- @include('Themes.AdminTheme.Theme03.Include.welcome') --}}




@include('Themes.AdminTheme.Theme03.Include.modals')


@yield('content')


@include('Themes.AdminTheme.Theme03.Include.footer')