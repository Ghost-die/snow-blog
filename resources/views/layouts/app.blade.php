<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}博客,bogl,blog,{{ config('app.name', 'Laravel') }},孤城,雪,ghost">
    <meta name="description" content="{{ $description ?? '一人，一剑，守一座孤城，等你归来' }}" />


    <title> {{$title ?? config('app.name', 'Laravel')}}</title>
    <link rel="alternate" type="application/rss+xml" title="{{ config('app.name', 'Laravel') }} » Feed" href="{{ route('feed') }}">


    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

@stack('css')

<body style="background: #eaeaec">

@include('layouts.snow')
    <div id="app">

        @include('layouts.header')
        <main class="main-content g-mb-6">

            @yield('content')

        </main>

        <footer>
            @include('layouts.foot')

        </footer>

    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@stack('scripts')

@include('layouts.notifications.index')


<!--百度统计-->
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?7a7f643c97b4ad91ff9c9d2ba4f22d40";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</html>
