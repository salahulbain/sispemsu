<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('frontend/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>
        {{ config('app.name', 'SISPEMSU') }} -- {{ $title }}
    </title>
    @stack('addon-before-style')
    @include('includes.style')
    @stack('addon-after-style')
</head>

<body class="g-sidenav-show  bg-gray-200">
    {{-- sidebar --}}
    <x-sidebar-admin />
    {{-- end sidebar --}}
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbar-admin />
        <!-- End Navbar -->
        {{-- main content --}}
        {{ $slot }}
        {{-- end main content --}}
        <x-footer-admin />
    </main>

    @include('includes.plugin')
    @stack('addon-before-script')
    @include('includes.script')
    @stack('addon-after-script')

</body>

</html>