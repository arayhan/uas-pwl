<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VaksinKuy! - UAS PWL Kelompok 2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.google2apis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Raleway', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="h-screen w-screen flex flex-col-reverse md:flex-row items-center justify-center">
            <div class="md:w-1/2 bg-red-700 inline-flex flex-col justify-center h-full p-20">
                <h1 class="mb-3 text-center md:text-left text-white text-5xl font-bold">Vaksinasi Online</h1>
                <p class="mb-8 text-center md:text-left text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod perspiciatis, architecto animi, temporibus dolores excepturi blanditiis maxime itaque nulla aspernatur ipsam mollitia? Quisquam, repellendus libero ullam omnis dolorem porro magni.</p>
                <div class="text-center md:text-left">
                    <a class="inline-block font-semibold py-3 px-10 bg-white text-red-700 rounded-md hover:bg-gray-300 transition-all" href="/login">Login</a>
                </div>
            </div>
            <div class="md:w-1/2 flex items-center justify-center logo">
                <img class="w-1/3" src="{{ asset('vendor/logo/logo-vaksinkuy.png') }}" alt="">
            </div>
        </div>
    </body>
</html>
