<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rainierlaan's portfolio</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/emoji.min.css') }}" rel="stylesheet">
</head>
    <body class="antialiased" id="app">
        <nav class=" flex items-center bg-gray-200 justify-between flex-wrap p-5 sm:p-5 md:p-5 lg:px-0 xl:px-0 shadow-lg">
            <div class="container mx-auto ">
                <div class="grid grid-cols-2">
                    <div class=" text-black mr-6">
                        <span class="font-semibold text-xl">Portfoli<span class="text-indigo-600">o</span></span>
                    </div>
                    <div class="block lg:hidden">
                        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div class="text-right flex items-center">
                        <div class="text-sm lg:flex-grow">
                            <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-10 nav-slide" data-nav-destination="home">
                                Home
                            </a>
                            <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-10 nav-slide" data-nav-destination="about-me">
                                Over mij
                            </a>
                            <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-10 nav-slide" data-nav-destination="work">
                                Werkervaring
                            </a>
                            <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-10 nav-slide" data-nav-destination="projects">
                                Projecten
                            </a>
                            <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-indigo-600 mr-10 nav-slide" data-nav-destination="contact">
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
