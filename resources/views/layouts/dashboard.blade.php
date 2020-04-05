<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.head')

<body id="body">
    <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div>

    <!-- Main Header -->
    <header id="navigation" class="navbar-fixed-top navbar">

      @include('layouts.menu')

    </header>
    
    @include('layouts.body')

    @yield('content')

    @include('layouts.footer')

{{--     <!-- @include('layouts.footer') --> --}}

    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    @include('layouts.js')


{{-- @include('layouts.js')
@yield('add-js') --}}
</body>
</html>