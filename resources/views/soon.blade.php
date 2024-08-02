<!DOCTYPE html>
<html lang="fr">

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
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="w-full min-h-screen bg-fixed bg-center bg-cover" style="background-image:url('assets/img/hero.jpg');">

        <div class="min-h-screen flex flex-col sm:justify-center items-center py-6 sm:pt-0"
            style="background-color: rgba(3, 34, 76, .8)">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                <div class="text-center py-6">
                    <div class="w-16 mx-auto">
                        <x-application-logo class="fill-current text-gray-500" />
                    </div>
                    <h1 class="text-center text-base font-semibold">Votre compte est en cours de validation</h1>
                    <div>
                        Vous recevrez un e-mail dès que votre compte sera activé et vous pourrez accéder à votre espace
                        client en vous connectant.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
