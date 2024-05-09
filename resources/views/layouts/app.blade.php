<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="dist/css/vendors/litepicker.css">
    <link rel="stylesheet" href="dist/css/vendors/simplebar.css">
    <link rel="stylesheet" href="dist/css/themes/exort.css">
    <link rel="stylesheet" href="dist/css/app.css"> <!-- END: CSS Assets-->
</head>

<body class="font-sans antialiased">
    {{-- <div class="min-h-screen bg-gray-100"> --}}
    {{-- @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

    <!-- Page Content -->
    <main>
        {{-- {{ $slot }} --}}
        <div
            class="exort before:content-[''] before:bg-gradient-to-b before:from-slate-100 before:to-slate-50 before:h-screen before:w-full before:fixed before:top-0">
            <div
                class="[&.loading-page--before-hide]:h-screen [&.loading-page--before-hide]:relative loading-page loading-page--before-hide [&.loading-page--before-hide]:before:block [&.loading-page--hide]:before:opacity-0 before:content-[''] before:transition-opacity before:duration-300 before:hidden before:inset-0 before:h-screen before:w-screen before:fixed before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:z-[60] [&.loading-page--before-hide]:after:block [&.loading-page--hide]:after:opacity-0 after:content-[''] after:transition-opacity after:duration-300 after:hidden after:h-16 after:w-16 after:animate-pulse after:fixed after:opacity-50 after:inset-0 after:m-auto after:bg-loading-puff after:bg-cover after:z-[61]">
                <div class="fixed top-0 left-0 z-50 h-screen side-menu group side-menu--collapsed">
                    <div
                        class="box fixed inset-x-0 top-0 z-10 flex h-[65px] rounded-none border-x-0 border-t-0 border-transparent bg-gradient-to-r from-theme-1 to-theme-2 shadow-lg">
                        <div
                            class="side-menu__content bg-white flex-none flex items-center z-10 px-5 h-full xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000001f] before:content-[''] before:hidden before:xl:block before:absolute before:right-0 before:border-r before:border-dashed before:border-white/[0.15] before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:hidden after:content-[''] after:left-[-1.25rem] after:bg-[1.25rem_top] after:absolute after:w-screen after:h-full after:bg-[length:100vw_65px] after:z-[-1] after:bg-gradient-to-r after:from-theme-1 after:to-theme-2">
                            <a class="hidden items-center transition-[margin] xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2"
                                href="#">
                                <div
                                    class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-white/10 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                                    <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                                        <div
                                            class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                        </div>
                                        <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                                        <div
                                            class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                                    EXORT
                                </div>
                            </a>
                            <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
                                href="#">
                                <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
                            </a>
                            <div class="flex items-center gap-1 xl:hidden">
                                <a class="open-mobile-menu rounded-full p-2 hover:bg-white/5" href="#">
                                    <i data-tw-merge="" data-lucide="align-justify"
                                        class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                                </a>
                                <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal"
                                    data-tw-target="#quick-search" href="javascript:;">
                                    <i data-tw-merge="" data-lucide="search"
                                        class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div
                            class="absolute inset-x-0 h-full transition-[padding] duration-100 xl:pl-[275px] group-[.side-menu--collapsed]:xl:pl-[91px]">
                            <div class="flex h-full w-full items-center px-5">
                                <!-- BEGIN: Breadcrumb -->
                                <nav aria-label="breadcrumb" class="flex hidden flex-1 xl:block">
                                    <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                                        <li class="">
                                            <a href="#">App</a>
                                        </li>
                                        <li
                                            class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                                            <a href="#">Dashboards</a>
                                        </li>
                                        <li
                                            class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                                            <a href="#">Analytics</a>
                                        </li>
                                    </ol>
                                </nav>
                                <!-- END: Breadcrumb -->
                                <!-- BEGIN: Search -->
                                <div class="relative hidden flex-1 justify-center xl:flex" data-tw-toggle="modal"
                                    data-tw-target="#quick-search">
                                    <div
                                        class="flex w-[350px] cursor-pointer items-center rounded-[0.5rem] bg-white/[0.12] px-3.5 py-2 text-white/60 transition-colors hover:bg-white/20">
                                        <i data-tw-merge="" data-lucide="search"
                                            class="stroke-[1] h-[18px] w-[18px]"></i>
                                        <div class="ml-2.5 mr-auto">Quick search...</div>
                                        <div>⌘K</div>
                                    </div>
                                </div>
                                <div id="quick-search" aria-hidden="true" tabindex="-1"
                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 overflow-y-hidden z-[60] [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.1s]">
                                    <div
                                        class="relative mx-auto my-2 w-[95%] scale-95 transition-transform group-[.show]:scale-100 sm:mt-40 sm:w-[600px] lg:w-[700px]">
                                        <div class="relative">
                                            <div
                                                class="absolute inset-y-0 left-0 flex w-12 items-center justify-center">
                                                <i data-tw-merge="" data-lucide="search"
                                                    class="stroke-[1] w-5 h-5 -mr-1.5 text-slate-500"></i>
                                            </div>
                                            <input data-tw-merge="" type="text" placeholder="Quick search..."
                                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full border-slate-200 placeholder:text-slate-400/90 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 rounded-lg border-0 py-3.5 pl-12 pr-14 text-base shadow-lg focus:ring-0">
                                            <div class="absolute inset-y-0 right-0 flex w-14 items-center">
                                                <div
                                                    class="mr-auto rounded-[0.4rem] border bg-slate-100 px-2 py-1 text-xs text-slate-500/80">
                                                    ESC
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="global-search global-search--show-result group relative z-10 mt-1 max-h-[468px] overflow-y-auto rounded-lg bg-white pb-1 shadow-lg sm:max-h-[615px]">
                                            <div
                                                class="flex flex-col items-center justify-center pb-28 pt-20 group-[.global-search--show-result]:hidden">
                                                <i data-tw-merge="" data-lucide="search-x"
                                                    class="h-20 w-20 fill-theme-1/5 stroke-[0.5] text-theme-1/20"></i>
                                                <div class="mt-5 text-xl font-medium">
                                                    No result found
                                                </div>
                                                <div class="mt-3 w-2/3 text-center leading-relaxed text-slate-500">
                                                    No results found for
                                                    <span class="global-search__keyword font-medium italic"></span>
                                                    . Please try a different search term or check your
                                                    spelling.
                                                </div>
                                            </div>
                                            <div class="hidden group-[.global-search--show-result]:block">
                                                <div class="px-5 py-4">
                                                    <div class="flex items-center">
                                                        <div class="text-xs uppercase text-slate-500">
                                                            Start your search here...
                                                        </div>
                                                    </div>
                                                    <div class="mt-3.5 flex flex-wrap gap-2">
                                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                            href="#">
                                                            <i data-tw-merge="" data-lucide="users2"
                                                                class="h-4 w-4 stroke-[1.3]"></i>
                                                            Users
                                                        </a>
                                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                            href="#">
                                                            <i data-tw-merge="" data-lucide="building2"
                                                                class="h-4 w-4 stroke-[1.3]"></i>
                                                            Departments
                                                        </a>
                                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                            href="#">
                                                            <i data-tw-merge="" data-lucide="kanban-square"
                                                                class="h-4 w-4 stroke-[1.3]"></i>
                                                            Products
                                                        </a>
                                                        <a class="flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50"
                                                            href="#">
                                                            <i data-tw-merge="" data-lucide="mail-check"
                                                                class="h-4 w-4 stroke-[1.3]"></i>
                                                            Mails
                                                        </a>
                                                        <div data-tw-merge="" data-tw-placement="bottom-end"
                                                            class="dropdown relative"><a data-tw-toggle="dropdown"
                                                                aria-expanded="false" href="javascript:;"
                                                                class="cursor-pointer flex items-center gap-x-1.5 rounded-full border border-slate-300/70 px-3 py-0.5 hover:bg-slate-50">More
                                                                <i data-tw-merge="" data-lucide="chevron-down"
                                                                    class="-ml-0.5 h-4 w-4 stroke-[1.3]"></i>
                                                            </a>
                                                            <div data-transition="" data-selector=".show"
                                                                data-enter="transition-all ease-linear duration-150"
                                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                data-leave="transition-all ease-linear duration-150"
                                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                class="dropdown-menu absolute z-[9999] hidden">
                                                                <div data-tw-merge=""
                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                    <a
                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                            data-tw-merge="" data-lucide="map"
                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                        Locations</a>
                                                                    <a
                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                            data-tw-merge="" data-lucide="file-check"
                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                        Projects</a>
                                                                    <a
                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                            data-tw-merge="" data-lucide="printer"
                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                        Devices</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-t border-dashed px-5 py-4">
                                                    <div class="flex items-center">
                                                        <div class="text-xs uppercase text-slate-500">
                                                            Users
                                                        </div>
                                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                                            See All
                                                        </a>
                                                    </div>
                                                    <div class="mt-3.5 flex flex-col gap-1">
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user5-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Brad Pitt
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Seattle, USA
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user3-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Leonardo DiCaprio
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Chicago, USA
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user2-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Meryl Streep
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Los Angeles, USA
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="border-t border-dashed px-5 py-4">
                                                    <div class="flex items-center">
                                                        <div class="text-xs uppercase text-slate-500">
                                                            Departments
                                                        </div>
                                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                                            See All
                                                        </a>
                                                    </div>
                                                    <div class="mt-3.5 flex flex-col gap-1">
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                                <i data-tw-merge="" data-lucide="store"
                                                                    class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Operations
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Niger
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                                <i data-tw-merge="" data-lucide="hotel"
                                                                    class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Sales
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Moldova
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="zoom-in box flex h-6 w-6 items-center justify-center overflow-hidden rounded-md border border-theme-1/10 bg-theme-1/10">
                                                                <i data-tw-merge="" data-lucide="store"
                                                                    class="h-3.5 w-3.5 stroke-[1.3] text-theme-1"></i>
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Customer Support
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Belarus
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="border-t border-dashed px-5 py-4">
                                                    <div class="flex items-center">
                                                        <div class="text-xs uppercase text-slate-500">
                                                            Products
                                                        </div>
                                                        <a class="ml-auto text-xs text-slate-500" href="#">
                                                            See All
                                                        </a>
                                                    </div>
                                                    <div class="mt-3.5 flex flex-col gap-1">
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/products/product5-400x400.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Professional DSLR Camera
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Jewelry
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/products/product7-400x400.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Ultra HD 4K Smart TV
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Furniture
                                                            </div>
                                                        </a>
                                                        <a class="flex items-center gap-2.5 rounded-md border border-transparent p-1 hover:border-slate-100 hover:bg-slate-50/80"
                                                            href="#">
                                                            <div
                                                                class="image-fit zoom-in box h-6 w-6 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/products/product3-400x400.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                            <div class="truncate font-medium">
                                                                Bluetooth Speaker with Bass Boost
                                                            </div>
                                                            <div class="hidden text-slate-500 sm:block">
                                                                Food & Grocery
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Search -->
                                <!-- BEGIN: Notification & User Menu -->
                                <div class="flex flex-1 items-center">
                                    <div class="ml-auto flex items-center gap-1">
                                        <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal"
                                            data-tw-target="#activities-panel" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="layout-grid"
                                                class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                                        </a>
                                        <a class="request-full-screen rounded-full p-2 hover:bg-white/5"
                                            href="javascript:;">
                                            <i data-tw-merge="" data-lucide="expand"
                                                class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                                        </a>
                                        <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal"
                                            data-tw-target="#notifications-panel" href="javascript:;">
                                            <i data-tw-merge="" data-lucide="bell"
                                                class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                                        </a>
                                    </div>
                                    <div data-tw-merge="" data-tw-placement="bottom-end"
                                        class="dropdown relative ml-5"><button data-tw-toggle="dropdown"
                                            aria-expanded="false"
                                            class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]"><img
                                                src="dist/images/users/user5-50x50.jpg"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </button>
                                        <div data-transition="" data-selector=".show"
                                            data-enter="transition-all ease-linear duration-150"
                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave="transition-all ease-linear duration-150"
                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                            class="dropdown-menu absolute z-[9999] hidden">
                                            <div data-tw-merge=""
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-1 w-56">
                                                <a data-tw-toggle="modal" data-tw-target="#switch-account"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="toggle-left"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Switch Account</a>
                                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                                </div>
                                                <a href="exort-settings-connected-services.html"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="settings"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Connected Services</a>
                                                <a href="exort-settings-email-settings.html"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="inbox"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Email Settings</a>
                                                <a href="exort-settings-security.html"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="lock"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Reset Password</a>
                                                <div class="h-px my-2 -mx-2 bg-slate-200/60 dark:bg-darkmode-400">
                                                </div>
                                                <a href="exort-settings.html"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="users"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Profile Info</a>
                                                <a href="exort-login.html"
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                        data-tw-merge="" data-lucide="power"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="activities-panel"
                                        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                        <div data-tw-merge=""
                                            class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                                            <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                                                data-tw-dismiss="modal" href="javascript:;">
                                                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                            </a>
                                            <div data-tw-merge=""
                                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                                <h2 class="mr-auto text-base font-medium">Latest Activities</h2>
                                            </div>
                                            <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                                <div class="flex flex-col gap-3.5 px-5 py-3">
                                                    <div
                                                        class="relative overflow-hidden before:absolute before:inset-y-0 before:left-0 before:ml-[14px] before:w-px before:bg-slate-200/60 before:content-[''] before:dark:bg-darkmode-400">
                                                        <div
                                                            class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                            <div
                                                                class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                <a class="font-medium text-primary" href="#">
                                                                    Added a new contact
                                                                </a>
                                                                <div
                                                                    class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                    Added a new contact, Sarah
                                                                    <span
                                                                        class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 primary">
                                                                        <span
                                                                            class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                        <span class="-mt-px">Success</span>
                                                                    </span>
                                                                </div>
                                                                <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                    <div
                                                                        class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                        <div class="hidden w-10 sm:block">
                                                                            <div
                                                                                class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mr-auto sm:ml-3.5">
                                                                            <div
                                                                                class="max-w-[8rem] truncate font-medium text-primary">
                                                                                spreadsheet.xlsx
                                                                            </div>
                                                                            <div class="mt-1 text-xs text-slate-500">
                                                                                3.4MB
                                                                            </div>
                                                                        </div>
                                                                        <div data-tw-merge=""
                                                                            data-tw-placement="bottom-end"
                                                                            class="dropdown relative"><button
                                                                                data-tw-toggle="dropdown"
                                                                                aria-expanded="false"
                                                                                class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="more-vertical"
                                                                                    class="stroke-[1] h-4 w-4"></i>
                                                                            </button>
                                                                            <div data-transition=""
                                                                                data-selector=".show"
                                                                                data-enter="transition-all ease-linear duration-150"
                                                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave="transition-all ease-linear duration-150"
                                                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                class="dropdown-menu absolute z-[9999] hidden">
                                                                                <div data-tw-merge=""
                                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="copy"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Copy Link</a>
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="trash"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1.5 text-xs text-slate-500">
                                                                    Wed Apr 2022
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                            <div
                                                                class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                <a class="font-medium text-primary" href="#">
                                                                    Uploaded images
                                                                </a>
                                                                <div
                                                                    class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                    Added project screenshots
                                                                    <span
                                                                        class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 warning">
                                                                        <span
                                                                            class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                        <span class="-mt-px">Completed</span>
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                                                    <div
                                                                        class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project8-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project2-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project9-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1.5 text-xs text-slate-500">
                                                                    Fri Apr 2020
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                            <div
                                                                class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                <a class="font-medium text-primary" href="#">
                                                                    Task completed: Review Project Proposal
                                                                </a>
                                                                <div
                                                                    class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                    Reviewed and provided feedback
                                                                    <span
                                                                        class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 info">
                                                                        <span
                                                                            class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                        <span class="-mt-px">Completed</span>
                                                                    </span>
                                                                </div>
                                                                <div
                                                                    class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-[80%]">
                                                                    <div
                                                                        class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project9-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project2-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                        <div
                                                                            class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-20">
                                                                            <img src="dist/images/projects/project3-400x400.jpg"
                                                                                alt="Tailwise - Admin Dashboard Template">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1.5 text-xs text-slate-500">
                                                                    Mon Jun 2021
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                            <div
                                                                class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                <a class="font-medium text-primary" href="#">
                                                                    Received 5 new emails
                                                                </a>
                                                                <div
                                                                    class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                    Inbox updates
                                                                    <span
                                                                        class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 success">
                                                                        <span
                                                                            class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                        <span class="-mt-px">Info</span>
                                                                    </span>
                                                                </div>
                                                                <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                    <div
                                                                        class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                        <div class="hidden w-10 sm:block">
                                                                            <div
                                                                                class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mr-auto sm:ml-3.5">
                                                                            <div
                                                                                class="max-w-[8rem] truncate font-medium text-primary">
                                                                                presentation1.pptx
                                                                            </div>
                                                                            <div class="mt-1 text-xs text-slate-500">
                                                                                5.2MB
                                                                            </div>
                                                                        </div>
                                                                        <div data-tw-merge=""
                                                                            data-tw-placement="bottom-end"
                                                                            class="dropdown relative"><button
                                                                                data-tw-toggle="dropdown"
                                                                                aria-expanded="false"
                                                                                class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="more-vertical"
                                                                                    class="stroke-[1] h-4 w-4"></i>
                                                                            </button>
                                                                            <div data-transition=""
                                                                                data-selector=".show"
                                                                                data-enter="transition-all ease-linear duration-150"
                                                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave="transition-all ease-linear duration-150"
                                                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                class="dropdown-menu absolute z-[9999] hidden">
                                                                                <div data-tw-merge=""
                                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="copy"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Copy Link</a>
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="trash"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                        <div class="hidden w-10 sm:block">
                                                                            <div
                                                                                class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mr-auto sm:ml-3.5">
                                                                            <div
                                                                                class="max-w-[8rem] truncate font-medium text-primary">
                                                                                presentation2.ppt
                                                                            </div>
                                                                            <div class="mt-1 text-xs text-slate-500">
                                                                                4.5MB
                                                                            </div>
                                                                        </div>
                                                                        <div data-tw-merge=""
                                                                            data-tw-placement="bottom-end"
                                                                            class="dropdown relative"><button
                                                                                data-tw-toggle="dropdown"
                                                                                aria-expanded="false"
                                                                                class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="more-vertical"
                                                                                    class="stroke-[1] h-4 w-4"></i>
                                                                            </button>
                                                                            <div data-transition=""
                                                                                data-selector=".show"
                                                                                data-enter="transition-all ease-linear duration-150"
                                                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave="transition-all ease-linear duration-150"
                                                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                class="dropdown-menu absolute z-[9999] hidden">
                                                                                <div data-tw-merge=""
                                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="copy"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Copy Link</a>
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="trash"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1.5 text-xs text-slate-500">
                                                                    Sun Oct 2022
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mb-3 last:mb-0 relative first:before:content-[''] first:before:h-1/2 first:before:w-5 first:before:bg-white first:before:absolute last:after:content-[''] last:after:h-1/2 last:after:w-5 last:after:bg-white last:after:absolute last:after:bottom-0">
                                                            <div
                                                                class="px-4 py-3 ml-8 before:content-[''] before:ml-1 before:absolute before:w-5 before:h-5 before:bg-slate-200 before:rounded-full before:inset-y-0 before:my-auto before:left-0 before:dark:bg-darkmode-300 before:z-10 after:content-[''] after:absolute after:w-1.5 after:h-1.5 after:bg-slate-500 after:rounded-full after:inset-y-0 after:my-auto after:left-0 after:ml-[11px] after:dark:bg-darkmode-200 after:z-10">
                                                                <a class="font-medium text-primary" href="#">
                                                                    Uploaded a spreadsheet
                                                                </a>
                                                                <div
                                                                    class="mt-1.5 flex flex-col gap-y-1.5 text-[0.8rem] leading-relaxed text-slate-500 sm:flex-row sm:items-center">
                                                                    Added financial data for Q3
                                                                    <span
                                                                        class="group flex items-center text-xs font-medium rounded-md sm:ml-2 border px-1.5 py-px mr-auto sm:mr-0 [&.primary]:text-primary [&.primary]:bg-primary/10 [&.primary]:border-primary/10 [&.success]:text-success [&.success]:bg-success/10 [&.success]:border-success/10 [&.warning]:text-warning [&.warning]:bg-warning/10 [&.warning]:border-warning/10 [&.info]:text-info [&.info]:bg-info/10 [&.info]:border-info/10 primary">
                                                                        <span
                                                                            class="mr-1.5 h-1.5 w-1.5 rounded-full group-[.info]:bg-info/80 group-[.primary]:bg-primary/80 group-[.success]:bg-success/80 group-[.warning]:bg-warning/80"></span>
                                                                        <span class="-mt-px">Completed</span>
                                                                    </span>
                                                                </div>
                                                                <div class="my-3.5 grid grid-cols-1 gap-4">
                                                                    <div
                                                                        class="flex items-center rounded-[0.6rem] border border-slate-200/80 bg-slate-50/70 py-4 pl-5 pr-2.5">
                                                                        <div class="hidden w-10 sm:block">
                                                                            <div
                                                                                class="relative block bg-center bg-no-repeat bg-contain before:content-[''] before:pt-[100%] before:w-full before:block bg-file-icon-directory">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mr-auto sm:ml-3.5">
                                                                            <div
                                                                                class="max-w-[8rem] truncate font-medium text-primary">
                                                                                spreadsheet.xlsx
                                                                            </div>
                                                                            <div class="mt-1 text-xs text-slate-500">
                                                                                3.4MB
                                                                            </div>
                                                                        </div>
                                                                        <div data-tw-merge=""
                                                                            data-tw-placement="bottom-end"
                                                                            class="dropdown relative"><button
                                                                                data-tw-toggle="dropdown"
                                                                                aria-expanded="false"
                                                                                class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="more-vertical"
                                                                                    class="stroke-[1] h-4 w-4"></i>
                                                                            </button>
                                                                            <div data-transition=""
                                                                                data-selector=".show"
                                                                                data-enter="transition-all ease-linear duration-150"
                                                                                data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave="transition-all ease-linear duration-150"
                                                                                data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                                data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                                class="dropdown-menu absolute z-[9999] hidden">
                                                                                <div data-tw-merge=""
                                                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="copy"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Copy Link</a>
                                                                                    <a
                                                                                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                            data-tw-merge=""
                                                                                            data-lucide="trash"
                                                                                            class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                        Delete</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-1.5 text-xs text-slate-500">
                                                                    Mon Aug 2020
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div data-tw-backdrop="" aria-hidden="true" tabindex="-1"
                                        id="notifications-panel"
                                        class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                        <div data-tw-merge=""
                                            class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                                            <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                                                data-tw-dismiss="modal" href="javascript:;">
                                                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                                            </a>
                                            <div data-tw-merge=""
                                                class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                                                <h2 class="mr-auto text-base font-medium">Notifications</h2>
                                                <button data-tw-merge=""
                                                    class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i
                                                        data-tw-merge="" data-lucide="shield-check"
                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                    Mark all as
                                                    read</button>
                                            </div>
                                            <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                                                <div class="flex flex-col gap-0.5 p-3">
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded audio recordings</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Recorded podcast episodes
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Oct 2021
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Logged out</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Signed out from the dashboard
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project4-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project5-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project10-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Wed Jun 2022
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded images</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Added project screenshots
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project3-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project6-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project7-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Wed Nov 2021
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Logged in successfully</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Accessed the dashboard
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project9-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project4-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project8-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Wed Sep 2020
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded presentations</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Added slides for the team meeting
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Jan 2021
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Task completed: Review Project
                                                                Proposal</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Reviewed and provided feedback
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project6-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project9-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project2-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Mon Mar 2022
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded documents</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Uploaded important project documents
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Tue Jan 2021
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded video files</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Shared video tutorials
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sat Feb 2021
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Updated profile picture</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Changed profile photo
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project7-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project8-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project8-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Fri Oct 2022
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Added a new contact</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Added a new contact, Sarah
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Thu Jan 2021
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Received 5 new emails</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Inbox updates
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Tue Jun 2021
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded code files</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Added new code modules
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sat May 2020
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Received a friend request</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Friend request from John
                                                            </div>
                                                            <div
                                                                class="my-3.5 w-40 rounded-[0.6rem] border bg-slate-50/80 p-1 sm:w-56">
                                                                <div
                                                                    class="grid grid-cols-3 overflow-hidden rounded-[0.6rem]">
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project2-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project4-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                    <div
                                                                        class="image-fit h-12 cursor-pointer overflow-hidden border border-slate-100 saturate-[.6] hover:saturate-100 sm:h-16">
                                                                        <img src="dist/images/projects/project10-400x400.jpg"
                                                                            alt="Tailwise - Admin Dashboard Template">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Thu Dec 2020
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Posted a status update</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Shared thoughts on the project
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Fri Oct 2021
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                    <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                                        href="#">
                                                        <div>
                                                            <div
                                                                class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                                                <img src="dist/images/users/user7-50x50.jpg"
                                                                    alt="Tailwise - Admin Dashboard Template">
                                                            </div>
                                                        </div>
                                                        <div class="sm:ml-5">
                                                            <div class="font-medium">Uploaded a spreadsheet</div>
                                                            <div class="mt-0.5 text-slate-500">
                                                                Added financial data for Q3
                                                            </div>
                                                            <div class="mt-1.5 text-xs text-slate-500">
                                                                Sun Oct 2022
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="switch-account"
                                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                                    <div data-tw-merge=""
                                        class="w-[90%] mx-auto bg-white relative rounded-md shadow-md transition-[margin-top,transform] duration-[0.4s,0.3s] -mt-16 group-[.show]:mt-16 group-[.modal-static]:scale-[1.05] dark:bg-darkmode-600 sm:w-[460px]">
                                        <div
                                            class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400 h-14 justify-center">
                                            <h2 class="text-base font-medium">Switch Account</h2>
                                        </div>
                                        <div data-tw-merge="" class="p-5 px-2.5 pb-4 pt-3.5">
                                            <div class="flex flex-col gap-1.5">
                                                <div
                                                    class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                    <div
                                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img src="dist/images/users/user8-50x50.jpg"
                                                            alt="Tailwise - Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">Cate Blanchett</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            cate.blanchett@left4code.com
                                                        </div>
                                                    </div>
                                                    <div class="relative ml-auto h-7 w-7">
                                                        <input data-tw-merge="" checked="" type="checkbox"
                                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                                            id="switch-account-0" value="switch-account">
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                            <i data-tw-merge="" data-lucide="check"
                                                                class="h-3 w-3 stroke-[1.5]"></i>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                    <div
                                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img src="dist/images/users/user7-50x50.jpg"
                                                            alt="Tailwise - Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">Johnny Depp</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            johnny.depp@left4code.com
                                                        </div>
                                                    </div>
                                                    <div class="relative ml-auto h-7 w-7">
                                                        <input data-tw-merge="" type="checkbox"
                                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                                            id="switch-account-1" value="switch-account">
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                            <i data-tw-merge="" data-lucide="check"
                                                                class="h-3 w-3 stroke-[1.5]"></i>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                    <div
                                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img src="dist/images/users/user9-50x50.jpg"
                                                            alt="Tailwise - Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">Denzel Washington</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            denzel.washington@left4code.com
                                                        </div>
                                                    </div>
                                                    <div class="relative ml-auto h-7 w-7">
                                                        <input data-tw-merge="" type="checkbox"
                                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                                            id="switch-account-2" value="switch-account">
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                            <i data-tw-merge="" data-lucide="check"
                                                                class="h-3 w-3 stroke-[1.5]"></i>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                    <div
                                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img src="dist/images/users/user2-50x50.jpg"
                                                            alt="Tailwise - Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">Meryl Streep</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            meryl.streep@left4code.com
                                                        </div>
                                                    </div>
                                                    <div class="relative ml-auto h-7 w-7">
                                                        <input data-tw-merge="" type="checkbox"
                                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                                            id="switch-account-3" value="switch-account">
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                            <i data-tw-merge="" data-lucide="check"
                                                                class="h-3 w-3 stroke-[1.5]"></i>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex cursor-pointer items-center rounded-lg px-2.5 py-1 hover:bg-slate-100">
                                                    <div
                                                        class="image-fit h-11 w-11 overflow-hidden rounded-full border-[3px] border-slate-200/70">
                                                        <img src="dist/images/users/user10-50x50.jpg"
                                                            alt="Tailwise - Admin Dashboard Template">
                                                    </div>
                                                    <div class="ml-3.5">
                                                        <div class="font-medium">Julia Roberts</div>
                                                        <div class="mt-0.5 text-xs text-slate-500">
                                                            julia.roberts@left4code.com
                                                        </div>
                                                    </div>
                                                    <div class="relative ml-auto h-7 w-7">
                                                        <input data-tw-merge="" type="checkbox"
                                                            class="transition-all duration-100 ease-in-out shadow-sm border-slate-200 cursor-pointer rounded focus:ring-4 focus:ring-offset-0 focus:ring-primary focus:ring-opacity-20 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&[type='radio']]:checked:bg-primary [&[type='radio']]:checked:border-primary [&[type='radio']]:checked:border-opacity-10 [&[type='checkbox']]:checked:bg-primary [&[type='checkbox']]:checked:border-primary [&[type='checkbox']]:checked:border-opacity-10 [&:disabled:not(:checked)]:bg-slate-100 [&:disabled:not(:checked)]:cursor-not-allowed [&:disabled:not(:checked)]:dark:bg-darkmode-800/50 [&:disabled:checked]:opacity-70 [&:disabled:checked]:cursor-not-allowed [&:disabled:checked]:dark:bg-darkmode-800/50 peer absolute z-10 h-full w-full opacity-0"
                                                            id="switch-account-4" value="switch-account">
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1 bg-theme-1/80 text-white opacity-0 transition-all peer-checked:opacity-100">
                                                            <i data-tw-merge="" data-lucide="check"
                                                                class="h-3 w-3 stroke-[1.5]"></i>
                                                        </div>
                                                        <div
                                                            class="absolute inset-0 m-auto flex h-6 w-6 items-center justify-center rounded-full border border-theme-1/20 bg-theme-1/5 text-primary transition-all peer-checked:opacity-0 peer-hover:bg-theme-1/10">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="px-5 py-3 text-right border-t border-slate-200/60 dark:border-darkmode-400 flex h-14 items-center justify-center text-center">
                                            <a class="-mt-1 block text-primary" href="#">
                                                Login into an Existing Account
                                            </a></div>
                                    </div>
                                </div>
                                <!-- END: Notification & User Menu -->
                            </div>
                        </div>
                    </div>
                    <div class="side-menu__content absolute inset-y-0 z-10 xl:top-[65px] xl:z-0">
                        <div
                            class="xl:ml-0 bg-gradient-to-b from-slate-100 to-slate-50 border-r border-slate-300/70 border-dashed rounded-none w-[275px] duration-300 transition-[width,margin] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:border-solid relative overflow-hidden h-full flex flex-col after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:z-[-1] after:xl:hidden group-[.side-menu--mobile-menu-open]:ml-0 group-[.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
                            <div
                                class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden [&.close-mobile-menu--mobile-menu-open]:flex hidden">
                                <a class="ml-5 mt-5" href="#">
                                    <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
                                </a>
                            </div>
                            <div
                                class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
                                <ul class="scrollable">
                                    <!-- BEGIN: First Child -->
                                    <li class="side-menu__divider">
                                        DASHBOARDS
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-1.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="gauge-circle"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">E-Commerce</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-2.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="activity-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">CRM</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-3.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="album"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Hospital</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-4.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="book-marked"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Factory</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-5.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="hard-drive"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Banking</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-6.html"
                                            class="side-menu__link side-menu__link--active ">
                                            <i data-tw-merge="" data-lucide="mouse-pointer-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Cafe</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-7.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="shield-half"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Crypto</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dashboard-overview-8.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="building"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Hotel</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        APPS
                                    </li>
                                    <li>
                                        <a href="exort-inbox.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="gantt-chart-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Inbox</div>
                                            <div class="side-menu__link__badge">
                                                4
                                            </div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-file-manager-list.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="panel-right-inactive"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">File Manager List</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-file-manager-grid.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="panel-top-close"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">File Manager Grid</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-point-of-sale.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="panel-top-inactive"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Point of Sale</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-chat.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="mail-open"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Chat</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-calendar.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="calendar-range"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Calendar</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        UI WIDGETS
                                    </li>
                                    <li>
                                        <a href="exort-creative.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="album"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Creative</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dynamic.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="activity-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Dynamic</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-interactive.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="keyboard"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Interactive</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        USER MANAGEMENT
                                    </li>
                                    <li>
                                        <a href="exort-users.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="user-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Users</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-departments.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="cake-slice"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Departments</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-add-user.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="package-plus"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Add User</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        PERSONAL DASHBOARD
                                    </li>
                                    <li>
                                        <a href="exort-profile-overview.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="presentation"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Profile Overview</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-profile-overview-events.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="calendar-range"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Events</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-profile-overview-achievements.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="medal"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Achievements</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-profile-overview-contacts.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="tablet-smartphone"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Contacts</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-profile-overview-default.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="snail"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Default</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        GENERAL SETTINGS
                                    </li>
                                    <li>
                                        <a href="exort-settings.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="briefcase"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Profile Info</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-email-settings.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="mail-check"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Email Settings</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-security.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="fingerprint"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Security</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-preferences.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="radar"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Preferences</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-two-factor-authentication.html"
                                            class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="door-open"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Two-factor Authentication</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-device-history.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="keyboard"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Device History</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-notification-settings.html"
                                            class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="ticket"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Notification Settings</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-connected-services.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="bus-front"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Connected Services</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-social-media-links.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="podcast"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Social Media Links</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-settings-account-deactivation.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="package-x"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Account Deactivation</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        ACCOUNT
                                    </li>
                                    <li>
                                        <a href="exort-billing.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="percent-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Billing</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-invoice.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="database-zap"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Invoice</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        E-COMMERCE
                                    </li>
                                    <li>
                                        <a href="exort-categories.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="book-marked"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Categories</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-add-product.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="compass"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Add Product</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="table2"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Products</div>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="exort-product-list.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="layout-panel-top"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Product List
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-product-grid.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="layout-panel-left"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Product Grid
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                        </ul>
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="sigma-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Transactions</div>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="exort-transaction-list.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="divide-square"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Transaction List
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-transaction-detail.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="plus-square"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Transaction Detail
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                        </ul>
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="file-archive"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Sellers</div>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="exort-seller-list.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="file-image"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Seller List
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-seller-detail.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="file-box"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Seller Detail
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                        </ul>
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-reviews.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="goal"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Reviews</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        AUTHENTICATIONS
                                    </li>
                                    <li>
                                        <a href="exort-login.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="book-key"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Login</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-register.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="book-lock"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Register</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li class="side-menu__divider">
                                        COMPONENTS
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="layout-panel-left"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Table</div>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="exort-regular-table.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="flip-vertical"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Regular Table
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-tabulator.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="flip-horizontal"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Tabulator
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                        </ul>
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="memory-stick"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Overlay</div>
                                            <i data-tw-merge="" data-lucide="chevron-down"
                                                class="stroke-[1] w-5 h-5 side-menu__link__chevron"></i>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <ul class="hidden">
                                            <li>
                                                <a href="exort-modal.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="menu-square"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Modal
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-slideover.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="newspaper"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Slide Over
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                            <li>
                                                <a href="exort-notification.html" class="side-menu__link ">
                                                    <i data-tw-merge="" data-lucide="panel-bottom"
                                                        class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                                    <div class="side-menu__link__title">
                                                        Notification
                                                    </div>
                                                </a>
                                                <!-- BEGIN: Third Child -->
                                                <!-- END: Third Child -->
                                            </li>
                                        </ul>
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-tab.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="package2"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Tab</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-accordion.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="pocket"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Accordion</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-button.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="plus-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Button</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-alert.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="presentation"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Alert</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-progress-bar.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="shield-ellipsis"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Progress Bar</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-tooltip.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="clapperboard"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Tooltip</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-dropdown.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="flip-vertical"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Dropdown</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-typography.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="file-type2"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Typography</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-icon.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="aperture"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Icon</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-loading-icon.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="droplets"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Loading Icon</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-regular-form.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="gallery-horizontal-end"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Regular Form</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-datepicker.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="microwave"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Datepicker</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-tom-select.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="disc3"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Tom Select</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-file-upload.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="sandwich"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">File Upload</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-wysiwyg-editor.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="hop-off"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Wysiwyg Editor</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-validation.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="clipboard-type"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Validation</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-chart.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="pie-chart"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Chart</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-slider.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="kanban-square"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Slider</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <li>
                                        <a href="exort-image-zoom.html" class="side-menu__link ">
                                            <i data-tw-merge="" data-lucide="image"
                                                class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                                            <div class="side-menu__link__title">Image Zoom</div>
                                        </a>
                                        <!-- BEGIN: Second Child -->
                                        <!-- END: Second Child -->
                                    </li>
                                    <!-- END: First Child -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
                    <div class="container">
                        <div class="grid grid-cols-10 gap-x-6 gap-y-10">
                            <div class="col-span-12 gap-y-10 2xl:col-span-3">
                                <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                                        <div class="flex h-10 items-center">
                                            <div class="text-base font-medium group-[.mode--light]:text-white">
                                                Current Balance
                                            </div>
                                        </div>
                                        <div class="box box--stacked mt-3.5">
                                            <div class="border-b border-dashed p-5">
                                                <div class="flex flex-col gap-3 sm:flex-row">
                                                    <div>
                                                        <div class="text-base text-slate-500">Total Orders</div>
                                                        <div class="mt-1 flex items-center">
                                                            <div class="text-xl font-medium">1,241,221</div>
                                                            <div class="-mr-1 ml-2.5 flex items-center text-success">
                                                                11%
                                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sm:ml-auto">
                                                        <select data-tw-merge=""
                                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 px-4 sm:w-28">
                                                            <option value="monthly">Monthly</option>
                                                            <option value="yearly">Yearly</option>
                                                            <option value="weekly">Weekly</option>
                                                            <option value="daily">Daily</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-6 border-b border-dashed px-5 py-6">
                                                <div>
                                                    <div class="flex items-center text-slate-500">
                                                        <div class="mr-auto">Order Goal</div>
                                                        <span class="ml-auto">201 / 410</span>
                                                    </div>
                                                    <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                                        <div
                                                            class="-m-px w-[75%] border border-theme-1/40 bg-theme-1/30 first:rounded-l last:rounded-r">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center text-slate-500">
                                                        <div class="mr-auto">Revenue Progress</div>
                                                        <span class="ml-auto">$8,500 / $10,000</span>
                                                    </div>
                                                    <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                                        <div
                                                            class="-m-px w-[45%] border border-theme-2/40 bg-theme-2/30 first:rounded-l last:rounded-r">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="flex items-center text-slate-500">
                                                        <div class="mr-auto">Completed Orders</div>
                                                        <span class="ml-auto">395 / 450</span>
                                                    </div>
                                                    <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                                        <div
                                                            class="-m-px w-[75%] border border-primary/40 bg-primary/30 first:rounded-l last:rounded-r">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-5 py-6">
                                                <a data-tw-merge="" href="#"
                                                    class="transition duration-200 border shadow-sm inline-flex items-center font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed text-primary dark:border-primary [&:hover:not(:disabled)]:bg-primary/10 rounded-full relative w-full justify-start border-primary/20 px-4 py-2.5">Explore
                                                    Details
                                                    <div
                                                        class="absolute right-0 mr-0.5 flex h-9 w-9 items-center justify-center rounded-full border border-primary/[0.15] bg-primary/[0.15]">
                                                        <i data-tw-merge="" data-lucide="arrow-right"
                                                            class="stroke-[1] h-4 w-4"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                                        <div class="flex h-10 items-center">
                                            <div
                                                class="text-base font-medium md:group-[.mode--light]:text-white 2xl:group-[.mode--light]:text-current">
                                                Sales Breakdown
                                            </div>
                                        </div>
                                        <div class="box box--stacked mt-3.5 p-5">
                                            <div class="mt-1">
                                                <ul data-tw-merge="" role="tablist"
                                                    class="p-0.5 border dark:border-darkmode-400 flex mx-auto w-3/4 rounded-[0.6rem] border-slate-200 bg-white shadow-sm">
                                                    <li id="example-1-tab" data-tw-merge="" role="presentation"
                                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                                        <button data-tw-merge="" data-tw-target="#example-1"
                                                            role="tab"
                                                            class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Daily</button>
                                                    </li>
                                                    <li id="example-2-tab" data-tw-merge="" role="presentation"
                                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                                        <button data-tw-merge="" data-tw-target="#example-2"
                                                            role="tab"
                                                            class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Weekly</button>
                                                    </li>
                                                    <li id="example-3-tab" data-tw-merge="" role="presentation"
                                                        class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                                        <button data-tw-merge="" data-tw-target="#example-3"
                                                            role="tab"
                                                            class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Monthly</button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content mt-8">
                                                    <div data-transition="" data-selector=".active"
                                                        data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                                        data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                                        data-enter-to="visible opacity-100"
                                                        data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                                        data-leave-from="visible opacity-100"
                                                        data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                                        id="example-1" role="tabpanel"
                                                        aria-labelledby="example-1-tab" class="tab-pane active">
                                                        <div
                                                            class="relative mx-auto w-4/5 [&&gt;div]:!h-[200px] [&&gt;div]:sm:!h-[160px] [&&gt;div]:2xl:!h-[200px]">
                                                            <div class="w-auto h-[200px]">
                                                                <canvas
                                                                    class="chart report-donut-chart-5 relative z-10"></canvas>
                                                            </div>
                                                            <div
                                                                class="absolute inset-0 flex items-center justify-center">
                                                                <div class="text-center">
                                                                    <div
                                                                        class="text-lg font-medium text-slate-600/90">
                                                                        781,224
                                                                    </div>
                                                                    <div class="mt-1 text-slate-500">Total Sales</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="mt-7 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                                                            <div class="flex items-center text-slate-500">
                                                                <div
                                                                    class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60">
                                                                </div>
                                                                Coffee
                                                            </div>
                                                            <div class="flex items-center text-slate-500">
                                                                <div
                                                                    class="mr-2 h-2 w-2 rounded-full border border-success/60 bg-success/60">
                                                                </div>
                                                                Pastries
                                                            </div>
                                                            <div class="flex items-center text-slate-500">
                                                                <div
                                                                    class="mr-2 h-2 w-2 rounded-full border border-warning/60 bg-warning/60">
                                                                </div>
                                                                Beverages
                                                            </div>
                                                        </div>
                                                        <button data-tw-merge=""
                                                            class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed mt-9 w-full border-dashed border-slate-300 hover:bg-slate-50"><i
                                                                data-tw-merge="" data-lucide="external-link"
                                                                class="mr-2 h-4 w-4 stroke-[1.3]"></i>
                                                            Export Report</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-7">
                                <div>
                                    <div class="flex h-10 items-center">
                                        <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                                            Cafe Insight
                                        </div>
                                    </div>
                                    <div class="box box--stacked mt-3.5 p-5">
                                        <div class="flex flex-col gap-y-5 lg:flex-row lg:items-center">
                                            <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row sm:items-center">
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="calendar-check2"
                                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                    <select data-tw-merge=""
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 pl-9 sm:w-44">
                                                        <option value="custom-date">Custom Date</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="weekly">Weekly</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="yearly">Yearly</option>
                                                    </select>
                                                </div>
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="calendar"
                                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                    <input data-tw-merge="" type="text"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.3rem] pl-9 sm:w-64">
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3.5 lg:ml-auto">
                                                <a class="flex items-center text-slate-500" href="#">
                                                    <i data-tw-merge="" data-lucide="printer"
                                                        class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div
                                                        class="ml-1.5 whitespace-nowrap underline decoration-slate-300 decoration-dotted underline-offset-[3px]">
                                                        Export to PDF
                                                    </div>
                                                </a>
                                                <a class="flex items-center text-primary" href="#">
                                                    <i data-tw-merge="" data-lucide="external-link"
                                                        class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div
                                                        class="ml-1.5 whitespace-nowrap underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                        Show full report
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mt-5 rounded-md border border-dashed border-slate-300/70 py-5">
                                            <div class="flex flex-col md:flex-row">
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                                        <i data-tw-merge="" data-lucide="kanban-square"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Total Orders</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">876,221</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-success">
                                                                11%
                                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                                        <i data-tw-merge="" data-lucide="person-standing"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Customer Feedback</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">46,221</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-success">
                                                                2%
                                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                                        <i data-tw-merge="" data-lucide="banknote"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Coffee Orders</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">350</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                                                4%
                                                                <i data-tw-merge="" data-lucide="chevron-down"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mx-5 my-5 h-px border-t border-dashed border-slate-300/70">
                                            </div>
                                            <div class="flex flex-col md:flex-row">
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                                        <i data-tw-merge="" data-lucide="coffee"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Total Supplier</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">1,523</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-success">
                                                                11%
                                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                                        <i data-tw-merge="" data-lucide="credit-card"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Expenses Analysis</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">261</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-success">
                                                                2%
                                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r">
                                                    <div
                                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                                        <i data-tw-merge="" data-lucide="package-search"
                                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                                    </div>
                                                    <div class="flex-start flex flex-col">
                                                        <div class="text-slate-500">Coffee Varieties</div>
                                                        <div class="mt-1.5 flex items-center">
                                                            <div class="text-base font-medium">141</div>
                                                            <div
                                                                class="-mr-1 ml-2 flex items-center text-xs text-danger">
                                                                4%
                                                                <i data-tw-merge="" data-lucide="chevron-down"
                                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                        <div class="text-base font-medium">Revenue Analysis</div>
                                    </div>
                                    <div class="box box--stacked mt-3.5 p-5">
                                        <div class="flex flex-col gap-y-5 lg:flex-row lg:items-center">
                                            <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row sm:items-center">
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="calendar-check2"
                                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                    <select data-tw-merge=""
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 pl-9 sm:w-44">
                                                        <option value="custom-date">Custom Date</option>
                                                        <option value="daily">Daily</option>
                                                        <option value="weekly">Weekly</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="yearly">Yearly</option>
                                                    </select>
                                                </div>
                                                <div class="relative">
                                                    <i data-tw-merge="" data-lucide="calendar"
                                                        class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                    <input data-tw-merge="" type="text"
                                                        class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.3rem] pl-9 sm:w-64">
                                                </div>
                                            </div>
                                            <div class="flex items-center gap-3.5 lg:ml-auto">
                                                <a class="flex items-center text-slate-500" href="#">
                                                    <i data-tw-merge="" data-lucide="printer"
                                                        class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div
                                                        class="ml-1.5 whitespace-nowrap underline decoration-slate-300 decoration-dotted underline-offset-[3px]">
                                                        Export to PDF
                                                    </div>
                                                </a>
                                                <a class="flex items-center text-primary" href="#">
                                                    <i data-tw-merge="" data-lucide="external-link"
                                                        class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div
                                                        class="ml-1.5 whitespace-nowrap underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                                        Show full report
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mb-1 mt-7">
                                            <div class="w-auto h-[220px]">
                                                <canvas class="chart report-bar-chart-5"></canvas>
                                            </div>
                                        </div>
                                        <div class="mt-5 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                                            <div class="flex items-center text-slate-500">
                                                <div
                                                    class="mr-2 h-2 w-2 rounded-full border border-primary/60 bg-primary/60">
                                                </div>
                                                Total Revenue
                                            </div>
                                            <div class="flex items-center text-slate-500">
                                                <div
                                                    class="mr-2 h-2 w-2 rounded-full border border-slate-500/60 bg-slate-500/60">
                                                </div>
                                                Customer Visits
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                                        <div class="text-base font-medium">Quick Links</div>
                                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                                            <div class="relative">
                                                <i data-tw-merge="" data-lucide="calendar-check2"
                                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                <select data-tw-merge=""
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] pl-9 sm:w-44">
                                                    <option value="custom-date">Custom Date</option>
                                                    <option value="daily">Daily</option>
                                                    <option value="weekly">Weekly</option>
                                                    <option value="monthly">Monthly</option>
                                                    <option value="yearly">Yearly</option>
                                                </select>
                                            </div>
                                            <div class="relative">
                                                <i data-tw-merge="" data-lucide="calendar"
                                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                                <input data-tw-merge="" type="text"
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.5rem] pl-9 sm:w-64">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box box--stacked mt-3.5">
                                        <div class="overflow-auto xl:overflow-visible">
                                            <table data-tw-merge="" class="w-full text-left">
                                                <thead data-tw-merge="" class="">
                                                    <tr data-tw-merge="" class="">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                            Date
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 w-56 border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                            Menu Items Sold
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 truncate border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                            Customer Feedback
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 w-32 truncate border-slate-200/80 bg-slate-50 py-5 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                            Total Sales
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 w-32 border-slate-200/80 bg-slate-50 py-5 text-center font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                                            Action
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap" href="#">
                                                                Mon Dec 2022
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="flex items-center text-primary"
                                                                href="#">
                                                                <i data-tw-merge="" data-lucide="external-link"
                                                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Iced Coffee:
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                                </div>
                                                                <div class="ml-1 text-xs text-slate-500">
                                                                    (4.3)
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                1.560
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                    class="dropdown relative h-5"><button
                                                                        data-tw-toggle="dropdown"
                                                                        aria-expanded="false"
                                                                        class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                            data-tw-merge=""
                                                                            data-lucide="more-vertical"
                                                                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show"
                                                                        data-enter="transition-all ease-linear duration-150"
                                                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave="transition-all ease-linear duration-150"
                                                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge=""
                                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-line-chart"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Sales Report</a>
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-check2"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Item Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap" href="#">
                                                                Tue Jun 2021
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="flex items-center text-primary"
                                                                href="#">
                                                                <i data-tw-merge="" data-lucide="external-link"
                                                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Espresso: 50
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                                </div>
                                                                <div class="ml-1 text-xs text-slate-500">
                                                                    (4.5)
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                173
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                    class="dropdown relative h-5"><button
                                                                        data-tw-toggle="dropdown"
                                                                        aria-expanded="false"
                                                                        class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                            data-tw-merge=""
                                                                            data-lucide="more-vertical"
                                                                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show"
                                                                        data-enter="transition-all ease-linear duration-150"
                                                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave="transition-all ease-linear duration-150"
                                                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge=""
                                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-line-chart"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Sales Report</a>
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-check2"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Item Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap" href="#">
                                                                Sat Feb 2021
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="flex items-center text-primary"
                                                                href="#">
                                                                <i data-tw-merge="" data-lucide="external-link"
                                                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Cappuccino: 45
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                                </div>
                                                                <div class="ml-1 text-xs text-slate-500">
                                                                    (4.8)
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                946
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                    class="dropdown relative h-5"><button
                                                                        data-tw-toggle="dropdown"
                                                                        aria-expanded="false"
                                                                        class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                            data-tw-merge=""
                                                                            data-lucide="more-vertical"
                                                                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show"
                                                                        data-enter="transition-all ease-linear duration-150"
                                                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave="transition-all ease-linear duration-150"
                                                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge=""
                                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-line-chart"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Sales Report</a>
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-check2"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Item Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap" href="#">
                                                                Tue Nov 2021
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="flex items-center text-primary"
                                                                href="#">
                                                                <i data-tw-merge="" data-lucide="external-link"
                                                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Americano: 30
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                                </div>
                                                                <div class="ml-1 text-xs text-slate-500">
                                                                    (4)
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                609
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                    class="dropdown relative h-5"><button
                                                                        data-tw-toggle="dropdown"
                                                                        aria-expanded="false"
                                                                        class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                            data-tw-merge=""
                                                                            data-lucide="more-vertical"
                                                                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show"
                                                                        data-enter="transition-all ease-linear duration-150"
                                                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave="transition-all ease-linear duration-150"
                                                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge=""
                                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-line-chart"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Sales Report</a>
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-check2"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Item Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap" href="#">
                                                                Tue Dec 2020
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="flex items-center text-primary"
                                                                href="#">
                                                                <i data-tw-merge="" data-lucide="external-link"
                                                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                                <div class="ml-1.5 whitespace-nowrap">
                                                                    Croissant: 15
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center">
                                                                <div class="flex items-center">
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                                    <i data-tw-merge="" data-lucide="star"
                                                                        class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                                </div>
                                                                <div class="ml-1 text-xs text-slate-500">
                                                                    (4.4)
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <a class="whitespace-nowrap font-medium" href="#">
                                                                64
                                                            </a>
                                                        </td>
                                                        <td data-tw-merge=""
                                                            class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                            <div class="flex items-center justify-center">
                                                                <div data-tw-merge="" data-tw-placement="bottom-end"
                                                                    class="dropdown relative h-5"><button
                                                                        data-tw-toggle="dropdown"
                                                                        aria-expanded="false"
                                                                        class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                            data-tw-merge=""
                                                                            data-lucide="more-vertical"
                                                                            class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                                    </button>
                                                                    <div data-transition="" data-selector=".show"
                                                                        data-enter="transition-all ease-linear duration-150"
                                                                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave="transition-all ease-linear duration-150"
                                                                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                                        class="dropdown-menu absolute z-[9999] hidden">
                                                                        <div data-tw-merge=""
                                                                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-line-chart"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Sales Report</a>
                                                                            <a
                                                                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                                    data-tw-merge=""
                                                                                    data-lucide="file-check2"
                                                                                    class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                                Item Details</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div
                                        class="flex-reverse mt-8 flex flex-col-reverse flex-wrap items-center gap-y-2 sm:flex-row">
                                        <nav class="mr-auto w-full flex-1 sm:w-auto">
                                            <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-left"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">1</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3 !box dark:bg-darkmode-400">2</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">3</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevron-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                                <li class="flex-1 sm:flex-initial">
                                                    <a data-tw-merge=""
                                                        class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3"><i
                                                            data-tw-merge="" data-lucide="chevrons-right"
                                                            class="stroke-[1] h-4 w-4"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <select data-tw-merge=""
                                            class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    {{-- </div> --}}

    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/tab.js"></script>
    <script src="dist/js/vendors/dayjs.js"></script>
    <script src="dist/js/vendors/litepicker.js"></script>
    <script src="dist/js/vendors/lodash.js"></script>
    <script src="dist/js/vendors/popper.js"></script>
    <script src="dist/js/vendors/dropdown.js"></script>
    <script src="dist/js/vendors/simplebar.js"></script>
    <script src="dist/js/vendors/chartjs.js"></script>
    <script src="dist/js/vendors/transition.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <script src="dist/js/utils/colors.js"></script>
    <script src="dist/js/utils/helper.js"></script>
    <script src="dist/js/components/report-donut-chart-5.js"></script>
    <script src="dist/js/components/base/litepicker.js"></script>
    <script src="dist/js/components/report-bar-chart-5.js"></script>
    <script src="dist/js/themes/exort.js"></script>
    <script src="dist/js/components/quick-search.js"></script> <!-- END: Vendor JS Assets-->
    <!-- BEGIN: Pages, layouts, components JS Assets-->
    <!-- END: Pages, layouts, components JS Assets-->
</body>

</html>
