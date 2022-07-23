<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Sistem Pemrosesan Surat</title>

    {{-- favicon --}}
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('frontend/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



    <!-- Fonts -->
    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Style -->
    <link href="{{ asset('frontend/css/styles.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-size-base leading-default text-slate-500">
    <div class="container sticky top-0 z-sticky">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <!-- Navbar -->
                <nav
                    class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
                    <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
                        <a class="py-2.375 text-size-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0"
                            href="{{ route('login') }}"> SISPEMSU </a>
                        <button navbar-trigger
                            class="px-3 py-1 ml-2 leading-none transition-all bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-size-lg ease-soft-in-out lg:hidden"
                            type="button" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span
                                class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6-em h-6-em bg-none">
                                <span bar1
                                    class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar2
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                                <span bar3
                                    class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                            </span>
                        </button>
                        <div navbar-menu
                            class="items-center flex-grow overflow-hidden transition-all duration-500 ease-soft lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
                            <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                                <li>
                                    <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm text-slate-700 lg:px-2"
                                        aria-current="page" href="javascript:void">
                                        <i class="mr-1 fas fa-envelope-open-text opacity-60"></i>
                                        Cek Surat
                                    </a>
                                </li>
                                <li>
                                    <a type="button"
                                        class="block px-4 py-2 mr-2 font-normal transition-all lg-max:opacity-0 duration-250 ease-soft-in-out text-size-sm text-slate-700 lg:px-2"
                                        href="javascript:void">
                                        <i class="mr-1 fas fa-info-circle opacity-60"></i>
                                        Info
                                    </a>
                                </li>
                            </ul>
                            <!-- online builder btn  -->
                            <!-- <li class="flex items-center">
                  <a
                    class="leading-pro ease-soft-in text-fuchsia-500 border-fuchsia-500 text-size-xs tracking-tight-soft bg-150 bg-x-25 rounded-3.5xl hover:border-fuchsia-500 hover:scale-102 hover:text-fuchsia-500 active:hover:border-fuchsia-500 active:hover:scale-102 active:hover:text-fuchsia-500 active:opacity-85 active:shadow-soft-xs active:bg-fuchsia-500 active:border-fuchsia-500 mr-2 mb-0 inline-block cursor-pointer border border-solid bg-transparent py-2 px-8 text-center align-middle font-bold uppercase shadow-none transition-all hover:bg-transparent hover:opacity-75 hover:shadow-none active:scale-100 active:text-white active:hover:bg-transparent active:hover:opacity-75 active:hover:shadow-none"
                    target="_blank"
                    href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053"
                    >Online Builder</a
                  >
                </li> -->
                            <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                                <li>
                                    <a href="/"
                                        class="btn leading-pro hover:scale-102 hover:shadow-soft-xs active:opacity-85 ease-soft-in text-size-xs tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray rounded-3.5xl mb-0 mr-1 inline-block cursor-pointer border-0 bg-transparent px-8 py-2 text-center align-middle font-bold uppercase text-white transition-all">
                                        <i class="mr-1 fas fa-key opacity-60"></i>
                                        Sign In
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    {{ $slot }}

    <footer class="py-12">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-shrink-0 w-full max-w-full mx-auto mt-2 mb-6 text-center lg:flex-0 lg:w-8/12">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" width="100" />
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright © {{ date('Y') }}
                        Kementerian Komunikasi dan Informatika Republik Indonesia - Aceh.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- js for navbar collapse -->
    <script src="{{ asset('frontend/js/navbar-collapse.js') }}" async></script>
</body>

</html>