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
    <x-favicon />
    <title> {{ config('app.name', 'SISPEMSU') }} -- {{ $title }} </title>
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
        {{-- modal logout --}}
        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="logoutModalLabel">Logout ?</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('logout') }}" method="post" id="form-logout">
                        <div class="modal-body">
                            @csrf
                            <h5>Yakin ingin Logout ?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn bg-gradient-primary">Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('includes.plugin')
    @stack('addon-before-script')
    @include('includes.script')
    @stack('addon-after-script')
</body>

</html>