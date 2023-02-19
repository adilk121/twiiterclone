<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('js/app.js')}}">

    <link rel="stylesheet" href="{{asset('newcss/icons.css')}}">
    <link rel="stylesheet" href="{{asset('newcss/style.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('newcss/uikit.css')}}">
    <link rel="stylesheet" href="{{asset('newcss/tailwind.css')}}">

    <!-- CSS
        ================================================== -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        @media (min-width: 1024px) {
            header .header_inner {
                max-width: 980px;
            }

            .pro-container {
                max-width: 860px;
            }
        }
        .text-danger{
            color: red;
            font-weight: bold;
        }
    </style>


   </head>

<body>


    @if (session('status'))
    <div>{{ session('status') }}</div>
    @endif
    <div id="wrapper">
        @include ('_nav')

    {{ $slot }}
    </div>
    <script src="{{asset('js/js/uikit.js')}}"></script>
    <script>

    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' dark';
        }
    })(window, document);


    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>

    <script src="{{asset('js/js/ionicons.js')}}"></script>
    <script src="{{asset('js/js/tippy.all.min.js')}}"></script>
    <script src="{{asset('js/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/js/simplebar.js')}}"></script>
    <script src="{{asset('js/js/custom.js')}}"></script>
</body>

</html>
