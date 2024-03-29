<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <title> Ginedia | @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="icon" type="image/png" href="{{ asset('storage/images/icon.png') }}">
        <link rel="shortcut icon" href="{{ route('home') }}">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Materialize 5-cols grid -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.grid5.css') }}" />


        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}?d=<?php echo time(); ?>" />
        @if ($agent->isMobile())
            <link rel="stylesheet" type="text/css" media='all and (max-width: 1112px)' href="{{ asset('css/mobile.css') }}?d=<?php echo time(); ?>" />
            <link rel="stylesheet" type="text/css" media='all and (max-width: 1112px)' href="{{ asset('css/mobile.menu.css') }}?d=<?php echo time(); ?>" />
        @endif
        @livewireStyles

        <!-- Compiled and minified jQuery from Google Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Font Awesome CDN -->
        <script src="https://kit.fontawesome.com/2785306567.js" crossorigin="anonymous"></script>

        <!-- Modernizr for Mobile Menu -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Compiled and minified jQuery for the Contact Form -->
        <script type="text/javascript" src="{{ asset('js/scripts.js?') }}d=<?php echo time(); ?>"></script>
        <!--script src="https://www.google.com/recaptcha/api.js?render=6Ld-68UUAAAAABOSbMSXQtatr8l04k9X3XKEIh_U"></script-->

        <!-- Gallery PlugIn -->
        <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.contact').click(function () {
                    $("html, body").animate({scrollTop: $(document).height()},
                            {duration: 500, complete: function () {
                                    $("input[name=full_name]").focus();
                                }
                            });
                });
            });
        </script>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">
    </head>
    <body >
    <div id="root">
        @include('includes.analytics')
        @if ($agent->isMobile())
            @include('includes.m.header')
        @else
            @include('includes.header')
        @endif
        @yield('sidebar')
        @yield('content')
        @include('includes.footer')
    </div>
    @if ($agent->isMobile())
        <script type="text/javascript" src="{{ asset('js/mobile_menu.js') }}"></script>
    @endif
        @livewireScripts
    </body>
</html>
