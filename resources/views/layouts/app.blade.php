<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data x-init>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        {{-- Google font style --}}



<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text:ital@0;1&family=Mea+Culpa&family=Rubik+Microbe&family=Tangerine:wght@400;700&family=Tillana:wght@400;500;600;700;800&display=swap" rel="stylesheet">

        {{-- fontawesome --}}

        <script src="https://kit.fontawesome.com/e1bf5ea7a7.js" crossorigin="anonymous"></script>



 <!-- Fonts -->

 <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />




 {{-- GOOGLE FONT STYLE  --}}

 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<link href="https://fonts.googleapis.com/css2?family=Mea+Culpa&family=Rubik+Microbe&family=Tangerine:wght@400;700&family=Tillana:wght@400;500;600;700;800&display=swap" rel="stylesheet">
 <!-- Styles -->



        <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />


     {{-- css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>


    {{-- fontawesome --}}

    <script src="https://kit.fontawesome.com/e1bf5ea7a7.js" crossorigin="anonymous"></script>


    @livewireStyles


    <style>
        {!! file_get_contents(public_path('css/pdf-tailwind.css')) !!}


    </style>








    </head>
    <body class="font-sans antialiased">
        @livewireScripts

        <div class="min-h-screen bg-cyan-50 dark:bg-cyan-600">


            <livewire:welcome.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif



            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>





    </body>
</html>
