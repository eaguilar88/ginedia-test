<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title> Ginedia | @yield('title') </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <link rel="icon" type="image/png" href="{{ route('home') }}">

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link rel="stylesheet" href="{{ asset('css/pure.extras.css') }}">
    <link rel="stylesheet" href="{{ asset('css/moz.pure.hack.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/myForm.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel='stylesheet' type='text/css' media='all and (min-width: 1280px)' href="{{ asset('css/large.css') }}" />
    <link rel='stylesheet' type='text/css' media='all and (max-width: 1279px)' href='{{ asset('css/standard.css') }}' />
    <link rel="stylesheet" type="text/css" href="{{ asset('typos/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('typos/css/font-main.css') }}" />

    @livewireStyles

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/myForm.js') }}"></script>

    <script type="text/javascript">
        document.createElement('header');
        document.createElement('footer');
        document.createElement('section');
        document.createElement('aside');
        document.createElement('nav');
        document.createElement('article');
    </script>

    <script type="text/javascript">
        $('#contact').click(function () {
            $("html, body").animate({scrollTop: $(document).height()},
                {duration: 500, complete: function () {
                        $("input[name=name]").focus();
                    }
                });
        });
    </script>

</head>
<body>
@include('includes.analytics')
@include('includes.header')
@yield('sidebar')
@yield('content')
@include('includes.footer')
@livewireScripts
</body>
</html>
