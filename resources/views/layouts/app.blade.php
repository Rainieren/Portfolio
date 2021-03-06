<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rainier Laan</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/emoji.min.css') }}" rel="stylesheet">
</head>
    <body class="antialiased">
        <nav class=" flex items-center bg-gray-200 justify-between flex-wrap p-5 sm:p-5 md:p-5 lg:px-0 xl:px-0 shadow-lg">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row">
                    <div class="flex w-full lg:w-1/4">
                        <div class="text-black lg:w-auto w-2/4 flex justify-between items-center">
                            <a href="/"><span class="font-semibold text-xl">Rainier Laan</span></a>
                        </div>
                        <div class="flex lg:w-auto w-2/4 justify-end lg:hidden">
                            <button id="nav-collapse" class="flex items-center px-3 py-2 text-xl rounded text-black hover:text-black focus:outline-none">
                                <svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
                    </div>
                    <div id="nav-content" class="hidden lg:flex w-full lg:w-3/4 justify-center items-center text-right">
                        <div class="text-sm lg:flex-grow">
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="about-me">
                                Home
                            </a>
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="work">
                                Werkervaring
                            </a>
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="projects">
                                Projecten
                            </a>
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="services">
                                Diensten
                            </a>
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="contact">
                                Contact
                            </a>
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="contact">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="app">
            @yield('content')
        </div>

    </body>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</html>
