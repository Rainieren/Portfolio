<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rainier Laan</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/emoji.min.css') }}" rel="stylesheet">
</head>
    <body class="antialiased" id="app">
        <nav class=" flex items-center bg-gray-200 justify-between flex-wrap p-5 sm:p-5 md:p-5 lg:px-0 xl:px-0 shadow-lg">
            <div class="container mx-auto">
                <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2">
                    <div class="text-black inline-flex justify-between items-center">
                        <a href="/"><span class="font-semibold text-xl">Rainier La<span class="text-indigo-600">an</span></span></a>
                        <div class="inline-flex justify-end md:hidden">
                            <button id="nav-collapse" class="flex items-center px-3 py-2 text-xl rounded text-black hover:text-black focus:outline-none">
                                <svg class="fill-current h-5 w-5" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                            </button>
                        </div>
                    </div>
                    <div id="nav-content" class="text-right hidden items-center md:flex">
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
                            <a href="#" class="transition duration-150 ease-in-out uppercase font-bold tracking-widest block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-3 lg:mr-10 nav-slide" data-nav-destination="contact">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </body>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</html>
