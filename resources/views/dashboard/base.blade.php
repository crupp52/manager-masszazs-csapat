<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | {{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fa/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/coreui.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/coreui-icons/all.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">

    @yield('css')
</head>


<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    @include('dashboard.shared.nav-builder')

    @include('dashboard.shared.header')

    <div class="c-body">

        <main class="c-main">

            <div class="container-fluid">
                @include('components.messages')
                @yield('content')
            </div>


        </main>
    </div>
    @include('dashboard.shared.footer')
</div>


<!-- CoreUI and necessary plugins-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/coreui-utilities.min.js.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
@yield('javascript')
@stack('script')

</body>
</html>
