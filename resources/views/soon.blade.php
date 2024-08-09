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

    <!-- tailwind & alpine -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- template style --}}
    <link rel="stylesheet" href="dist/css/app.css">
</head>

<body>
    <div class="fixed inset-0 h-screen w-screen">
        <div
            class="h-full lg:relative before:content-[''] before:absolute before:left-0 before:inset-y-0 before:bg-gradient-to-b before:from-theme-1 before:to-theme-2 before:w-screen before:lg:w-[800%] after:content-[''] after:absolute after:inset-y-0 after:left-0 after:w-screen after:lg:w-[800%] after:bg-texture-white after:bg-fixed after:bg-center after:lg:bg-[25rem_-25rem] after:bg-no-repeat">
            <div class="sticky top-0 z-10 h-screen flex flex-col justify-center items-center">
                <div class="p-5 box box--stacked w-96 mx-auto">
                    <div class="w-48 mx-auto">
                        <x-application-logo class="fill-current text-gray-500" />
                    </div>
                    <div class="flex flex-col items-center pt-5">
                        <div
                            class="flex items-center justify-center w-16 h-16 border-4 rounded-full border-white/70 bg-primary">
                            <i data-tw-merge="" data-lucide="check" class="h-8 w-8 stroke-[1.5] text-white"></i>
                        </div>
                        <div class="mt-5 text-base font-medium text-center">
                            Votre compte a été créé avec succès.
                        </div>
                        <div class="mt-0.5 px-8 text-center text-slate-500">
                            Vous recevrez un e-mail dès que votre compte sera activé et vous pourrez accéder à votre
                            espace
                            client en vous connectant.
                        </div>
                        <a class="w-full block" href="{{ route('login') }}">
                            <button data-tw-merge="" type="button"
                                class="transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary rounded-full w-full mt-7">
                                Accéder à votre espace
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="dist/js/vendors/lucide.js"></script>
    <script src="dist/js/components/base/lucide.js"></script>

</body>

</html>
