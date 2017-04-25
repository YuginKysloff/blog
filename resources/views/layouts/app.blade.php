<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" pixel-glass="index">
    <head>

        @section('head')
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>{{ config('app.name') }} {{ $title ?? '' }}</title>
            <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png') }}" sizes="32x32">
            <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png') }}" sizes="16x16">
            <link rel="manifest" href="{{ asset('img/favicon/manifest.json') }}">
            <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
            <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}">
            <meta name="msapplication-config" content="{{ asset('img/favicon/browserconfig.xml') }}">
            <meta name="theme-color" content="#ffffff">
        @show

    </head>

    {{--Tag body in the pages view--}}

    @section('nav')
        <nav class="main-nav main-nav--content page-wrap__blog-nav">
            <a href="/">
                <div id="main-nav__logo"></div>
            </a>
            <span class="main-nav__h1">Sergey Gromov</span>
            <span class="main-nav__h2">Front-end developer</span>

            <a href="blog.html" class="main-nav__item">blog</a>
            <a href="portfolio.html" class="main-nav__item">portfolio</a>
            <a href="https://vk.com/reskwer" class="main-nav__item">
                <svg role="img" class="main-nav__item-icon">
                    <use xlink:href="#vk"></use>
                </svg>
                <span>reskwer</span>
            </a>
            <a href="https://telegram.me/reskwer" class="main-nav__item">
                <svg role="img" class="main-nav__item-icon">
                    <use xlink:href="#telegram"></use>
                </svg>
                <span>reskwer</span>
            </a>
        </nav>
    @show

    @yield('content')

    @section('footer')
        <footer class="footer">
            <span>© Sergey Gromov | Design by <a href="http://mozart.studio/" class="footer__link">Mozart studio</a> </span>
        </footer>
        <svg xmlns="http://www.w3.org/2000/svg" class="svg-sprite">
            <symbol id="search" viewBox="596 -596 1792 1792">
                <path fill="currentColor" d="M1680.5 488.5C1592.8 576.2 1487.3 620 1364 620s-228.8-43.8-316.5-131.5S916 295.3 916 172s43.8-228.8 131.5-316.5S1240.7-276 1364-276s228.8 43.8 316.5 131.5S1812 48.7 1812 172s-43.8 228.8-131.5 316.5zM2287 914l-343-343c82.7-119.3 124-252.3 124-399 0-95.3-18.5-186.5-55.5-273.5s-87-162-150-225-138-113-225-150S1459.3-532 1364-532c-95.3 0-186.5 18.5-273.5 55.5s-162 87-225 150-113 138-150 225S660 76.7 660 172s18.5 186.5 55.5 273.5 87 162 150 225 138 113 225 150S1268.7 876 1364 876c146.7 0 279.7-41.3 399-124l343 342c24 25.3 54 38 90 38 34.7 0 64.7-12.7 90-38 25.3-25.3 38-55.3 38-90 0-35.3-12.3-65.3-37-90z"/>
            </symbol>
            <symbol id="telegram" viewBox="596 -596 1792 1792">
                <path d="M1704 749l-224-165-108 104c-14.7 14.7-29.7 22-45 22l16-228 415-375c7.3-6.7 8.7-11.7 4-15-7.3-5.3-18-3.3-32 6l-513 323-221-69c-16-4.7-26.7-11.2-32-19.5-5.3-8.3-4.5-17.2 2.5-26.5s20.2-17.7 39.5-25l864-333c21.3-8 38.5-5.7 51.5 7s16.5 33.7 10.5 63l-147 693c-11.3 49.3-38.3 62-81 38zm613-797c-47.3-110.7-111-206-191-286s-175.3-143.7-286-191-226.7-71-348-71c-121.3 0-237.3 23.7-348 71-110.7 47.3-206 111-286 191S714.3-158.7 667-48s-71 226.7-71 348 23.7 237.3 71 348 111 206 191 286 175.3 143.7 286 191 226.7 71 348 71c121.3 0 237.3-23.7 348-71s206-111 286-191 143.7-175.3 191-286c47.3-110.7 71-226.7 71-348s-23.7-237.3-71-348z" fill="currentColor"/>
            </symbol>
            <symbol id="vk" viewBox="596 -596 1792 1792">
                <path d="M2443.7-178.8c-4-6-14.3-11.5-31-16.5s-38-5.8-64-2.5l-288 2c-4.7-1.7-11.3-1.5-20 .5s-13 3-13 3l-5 2.5-4 3c-3.3 2-7 5.5-11 10.5s-7.3 10.8-10 17.5c-31.3 80.7-67 155.7-107 225-24.7 41.3-47.3 77.2-68 107.5s-38 52.7-52 67-26.7 25.8-38 34.5-20 12.3-26 11-11.7-2.7-17-4c-9.3-6-16.8-14.2-22.5-24.5s-9.5-23.3-11.5-39-3.2-29.2-3.5-40.5-.2-27.3.5-48 1-34.7 1-42c0-25.3.5-52.8 1.5-82.5s1.8-53.2 2.5-70.5 1-35.7 1-55-1.2-34.5-3.5-45.5-5.8-21.7-10.5-32-11.5-18.3-20.5-24-20.2-10.2-33.5-13.5c-35.3-8-80.3-12.3-135-13-124-1.3-203.7 6.7-239 24-14 7.3-26.7 17.3-38 30-12 14.7-13.7 22.7-5 24 40 6 68.3 20.3 85 43l6 12c4.7 8.7 9.3 24 14 46 4.7 22 7.7 46.3 9 73 3.3 48.7 3.3 90.3 0 125s-6.5 61.7-9.5 81-7.5 35-13.5 47-10 19.3-12 22-3.7 4.3-5 5c-8.7 3.3-17.7 5-27 5s-20.7-4.7-34-14-27.2-22.2-41.5-38.5-30.5-39.2-48.5-68.5-36.7-64-56-104l-16-29c-10-18.7-23.7-45.8-41-81.5s-32.7-70.2-46-103.5c-5.3-14-13.3-24.7-24-32l-5-3c-3.3-2.7-8.7-5.5-16-8.5-7.3-3-15-5.2-23-6.5l-274 2c-28 0-47 6.3-57 19l-4 6c-2 3.3-3 8.7-3 16s2 16.3 6 27c40 94 83.5 184.7 130.5 272s87.8 157.7 122.5 211c34.7 53.3 70 103.7 106 151s59.8 77.7 71.5 91c11.7 13.3 20.8 23.3 27.5 30l25 24c16 16 39.5 35.2 70.5 57.5s65.3 44.3 103 66c37.7 21.7 81.5 39.3 131.5 53s98.7 19.2 146 16.5h115c23.3-2 41-9.3 53-22l4-5c2.7-4 5.2-10.2 7.5-18.5s3.5-17.5 3.5-27.5c-.7-28.7 1.5-54.5 6.5-77.5s10.7-40.3 17-52 13.5-21.5 21.5-29.5 13.7-12.8 17-14.5 6-2.8 8-3.5c16-5.3 34.8-.2 56.5 15.5s42 35 61 58 41.8 48.8 68.5 77.5 50 50 70 64l20 12c13.3 8 30.7 15.3 52 22 21.3 6.7 40 8.3 56 5l256-4c25.3 0 45-4.2 59-12.5s22.3-17.5 25-27.5c2.7-10 2.8-21.3.5-34s-4.7-21.5-7-26.5-4.5-9.2-6.5-12.5c-33.3-60-97-133.7-191-221l-2-2-1-1-1-1h-1c-42.7-40.7-69.7-68-81-82-20.7-26.7-25.3-53.7-14-81 8-20.7 38-64.3 90-131 27.3-35.3 49-63.7 65-85 115.3-153.3 165.3-251.3 150-294l-6-10z" fill="currentColor"/>
            </symbol>
        </svg>
    @show

    @section('resources')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script async src="{{ asset('js/script.js') }}"></script>
    @show
    </body>
</html>





{{--<!DOCTYPE html>--}}
{{--<html lang="{{ config('app.locale') }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}

    {{--<!-- Scripts -->--}}
    {{--<script>--}}
        {{--window.Laravel = {!! json_encode([--}}
            {{--'csrfToken' => csrf_token(),--}}
        {{--]) !!};--}}
    {{--</script>--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('list_drafts') }}">Drafts</a>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}