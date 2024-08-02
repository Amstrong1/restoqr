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

    {{-- template style --}}
    <link rel="stylesheet" href="dist/css/vendors/tippy.css">
    <link rel="stylesheet" href="dist/css/app.css">
</head>

<body">
    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div> --}}

    <div
        class="container grid grid-cols-12 px-5 py-10 sm:px-10 sm:py-14 md:px-36 lg:h-screen lg:max-w-[1550px] lg:py-0 lg:pl-14 lg:pr-12 xl:px-24 2xl:max-w-[1750px]">
        <div
            class="relative z-50 h-full col-span-12 p-7 sm:p-14 bg-white rounded-2xl lg:bg-transparent lg:pr-10 lg:col-span-5 xl:pr-24 2xl:col-span-4 lg:p-0 before:content-[''] before:absolute before:inset-0 before:-mb-3.5 before:bg-white/40 before:rounded-2xl before:mx-5">
            <div class="relative z-10 flex h-full w-full flex-col justify-center py-2 lg:py-32">
                {{-- <div
                    class="flex h-[55px] w-[55px] items-center justify-center rounded-[0.8rem] border border-primary/30">
                    <div
                        class="relative flex h-[50px] w-[50px] items-center justify-center rounded-[0.6rem] bg-white bg-gradient-to-b from-theme-1/90 to-theme-2/90">
                        <div class="relative h-[26px] w-[26px] -rotate-45 [&_div]:bg-white">
                            <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[20%] rounded-full opacity-50">
                            </div>
                            <div class="absolute inset-0 m-auto h-[120%] w-[20%] rounded-full"></div>
                            <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[20%] rounded-full opacity-50">
                            </div>
                        </div>
                    </div>
                </div> --}}
                <x-application-logo />
                <div class="mt-6">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <div
        class="container fixed inset-0 grid h-screen w-screen grid-cols-12 pl-14 pr-12 lg:max-w-[1550px] xl:px-24 2xl:max-w-[1750px]">
        <div
            class="relative h-screen col-span-12 lg:col-span-5 2xl:col-span-4 z-20 after:bg-white after:hidden after:lg:block after:content-[''] after:absolute after:right-0 after:inset-y-0 after:bg-gradient-to-b after:from-white after:to-slate-100/80 after:w-[800%] after:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0] before:content-[''] before:hidden before:lg:block before:absolute before:right-0 before:inset-y-0 before:my-6 before:bg-gradient-to-b before:from-white/10 before:to-slate-50/10 before:bg-white/50 before:w-[800%] before:-mr-4 before:rounded-[0_1.2rem_1.2rem_0/0_1.7rem_1.7rem_0]">
        </div>
        <div
            class="h-full col-span-7 2xl:col-span-8 lg:relative before:content-[''] before:absolute before:lg:-ml-10 before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%] after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat">
            <div class="sticky top-0 z-10 ml-16 hidden h-screen flex-col justify-center lg:flex xl:ml-28 2xl:ml-36">
                <div class="text-[2.6rem] font-medium leading-[1.4] text-white xl:text-5xl xl:leading-[1.2]">
                    Embrace Excellence <br> in Dashboard Development
                </div>
                <div class="mt-5 text-base leading-relaxed text-white/70 xl:text-lg">
                    Unlock the potential of Tailwise, where developers craft
                    meticulously structured, visually stunning dashboards with
                    feature-rich modules. Join us today to shape the future of your
                    application development.
                </div>
                <div class="mt-10 flex flex-col gap-3 xl:flex-row xl:items-center">
                    <div class="flex items-center">
                        <div class="image-fit zoom-in h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Meryl Streep" src="dist/images/users/user2-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Angelina Jolie" src="dist/images/users/user4-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Brad Pitt" src="dist/images/users/user5-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                        <div class="image-fit zoom-in -ml-3 h-9 w-9 2xl:h-11 2xl:w-11">
                            <img data-placement="top" title="Julia Roberts" src="dist/images/users/user10-50x50.jpg"
                                alt="Tailwise - Admin Dashboard Template"
                                class="tooltip cursor-pointer rounded-full border-[3px] border-white/50">
                        </div>
                    </div>
                    <div class="text-base text-white/70 xl:ml-2 2xl:ml-3">
                        Over 7k+ strong and growing! Your journey begins here.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Vendor JS Assets-->
    <script src="dist/js/vendors/dom.js"></script>
    <script src="dist/js/vendors/tailwind-merge.js"></script>
    <script src="dist/js/vendors/tippy.js"></script>
    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/vendors/modal.js"></script>
    <script src="dist/js/components/base/theme-color.js"></script>
    <script src="dist/js/components/base/tippy.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>
    <!-- END: Vendor JS Assets-->

    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                document.getElementById('view1').classList.add("hidden");
                document.getElementById('view2').classList.remove("hidden");

                if (document.getElementById('password_confirmation') !== null) {
                    document.getElementById('password_confirmation').type = "text";
                }
            } else {
                x.type = "password";
                document.getElementById('view1').classList.remove("hidden");
                document.getElementById('view2').classList.add("hidden");

                if (document.getElementById('password_confirmation') !== null) {
                    document.getElementById('password_confirmation').type = "password";
                }
            }
        }
    </script>

    </body>

</html>
