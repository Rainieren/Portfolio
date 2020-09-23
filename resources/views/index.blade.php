@extends('layouts.app')

@section('content')
    <section class="introduction flex items-center bg-gray-200" style="height: calc(100vh - 70px)">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-5 sm:px-5 md:px-0 lg:px-0 xl:px-0 gap-5">
                <div class="bg-gray-300 h-12 w-full animate-pulse"></div>
                <div class="bg-gray-500 h-12 w-full animate-pulse"></div>
                <div class="bg-gray-300 h-12 w-full animate-pulse"></div>
                <div class="bg-gray-500 h-12 w-full animate-pulse"></div>
            </div>
        </div>
    </section>

    <section class="section-about-me p-5 md:p-5 lg:p-10 xl:p-10 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1">
                <h2 class="font-bold text-center heading">Over mij</h2>
            </div>
        </div>
    </section>

    <section class="section-work  p-5 md:p-5 lg:p-10 xl:p-10 bg-gray-200">
        <div class="container mx-auto">
            <div class="grid grid-cols-1">
                <h2 class="font-bold text-center heading">Mijn werkervaring</h2>
            </div>
            <div class="grid grid-cols-1 my-5">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-10">
                    <div>
                        <p class="font-bold">Waar heb ik gewerkt?</p>
                        <div class="space-y-2 my-3">
                            <div class="animate-pulse h-4 bg-gray-400 rounded w-3/4"></div>
                            <div class="animate-pulse h-4 bg-gray-400 rounded w-2/4"></div>
                        </div>
                        @for ($i = 0; $i < 4; $i++)
                            <div class="space-y-2 my-5">
                                <div class="animate-pulse h-4 bg-gray-700 rounded w-2/4"></div>
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-3/4"></div>
                            </div>
                        @endfor

                        <p class="font-bold">Mijn opleidingen</p>
                        <div class="space-y-2 my-3">
                            <div class="animate-pulse h-4 bg-gray-400 rounded w-3/4"></div>
                            <div class="animate-pulse h-4 bg-gray-400 rounded w-2/4"></div>
                        </div>
                        @for ($i = 0; $i < 4; $i++)
                            <div class="space-y-2 my-5">
                                <div class="animate-pulse h-4 bg-gray-700 rounded w-2/4"></div>
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-3/4"></div>
                            </div>
                        @endfor
                    </div>
                    <div>
                        <p class="font-bold">Wat kan ik allemaal?</p>
                        <div class="my-5">
                            @for ($i = 0; $i < 10; $i++)
                                <span class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Iets van waarde</span>
                            @endfor
                        </div>

                        <p class="font-bold">Waar ben ik bekend mee?</p>
                        <div class="my-5">
                            @for ($i = 0; $i < 10; $i++)
                                <span class="inline-block bg-gray-400 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Iets van waarde</span>
                            @endfor
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-projects bg-white p-5 md:p-5 lg:p-10 xl:p-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1">
                <h2 class="font-bold text-center heading">Mijn projecten</h2>
            </div>
            <div class="grid sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 gap-5 my-5">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white hover:text-white font-bold py-2 px-4 rounded-full">
                    Button
                </button>
                @for ($i = 0; $i < 4; $i++)

                    <button class="bg-none hover:bg-indigo-600 text-black hover:text-white font-bold py-2 px-4 rounded-full">
                        Button
                    </button>
                @endfor
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 my-10 gap-10">
                @for ($i = 0; $i < 6; $i++)
                    <div class="rounded bg-white overflow-hidden shadow-lg rounded-lg">
                        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="flex-1 space-y-4 py-1">
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-2/4"></div>
                                <div class="space-y-2">
                                    <div class="animate-pulse h-4 bg-gray-400 rounded w-4/4"></div>
                                    <div class="animate-pulse h-4 bg-gray-400 rounded w-3/4"></div>
                                    <div class="animate-pulse h-4 bg-gray-400 rounded w-4/4"></div>
                                </div>
                            </div>
                            <div class="read-more my-3">
                                <button type="button" class="text-indigo-600 read-more-button" data-target-project="{{ $i + 1 }}">Lees meer {{ $i + 1 }}</button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <div class="overlay fixed w-full h-full bg-gray-800 bg-opacity-75 top-0 left-0 flex items-center justify-center hidden z-10">
        @for ($i = 0; $i < 6; $i++)
            <div class="relative rounded overflow-hidden shadow-lg bg-white hidden project-card project-{{ $i + 1 }} m-5">
                <div class="p-6">
                    <div class="font-bold text-xl mb-2">The Coldest Sunset {{ $i + 1 }}</div>
                    <p class="text-gray-700 text-sm md:text-base lg:text-base xl:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <button class="absolute top-0 right-0 close-project p-4 font-bold text-gray-600" data-target-project="{{ $i + 1 }}">×</button>
            </div>
        @endfor
    </div>

    <footer class="section-contact footer relative ">
        <div class="maps bg-gray-200 w-100 flex items-center justify-center" style="height: 250px;">
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=1000&amp;hl=nl&amp;q=Groningen+(Mijn%20bedrijfsnaam)&amp;t=&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="250" frameborder="0" style="border:0; filter: grayscale(1)" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="accent-color bg-indigo-600 w-full relative p-5 md:p-5 lg:p-10 xl:p-10">
            <div class="container mx-auto">
                <div class="footer-card relative" style="bottom: 100px;">
                    <div class="container mx-auto">
                        <div class="bg-white rounded-lg shadow-lg p-5 md:p-5 lg:p-10 xl:p-10">
                            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-10">
                                <div>
                                    <h2 class="font-bold mb-4 heading">Kom in contact</h2>
                                    <p class="text-gray-600 ">Wil je contact met mij opnemen? Dat kan! Ik ben te bereiken op allerei platformen. Hieronder kan je een van de opties kiezen!</p>
                                    <div class="contact-options">
                                        @for ($i = 0; $i < 3; $i++)
                                            <div class="option-mail flex my-10 space-x-4">
                                                <div class="rounded-full bg-indigo-600 h-12 w-12"></div>
                                                <div class="flex-1 space-y-4 py-1">
                                                    <div class="animate-pulse h-4 bg-gray-400 rounded w-2/4"></div>
                                                    <div class="space-y-2">
                                                        <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="contact-form">
                                    <h2 class="font-bold mb-4 heading">Stuur een berichtje</h2>
                                    <form action="" method="post" class="submit-contact">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                    Voornaam
                                                </label>
                                                <input class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="grid-last-name" type="text" placeholder="John">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                    Achternaam
                                                </label>
                                                <input class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="grid-last-name" type="text" placeholder="Doe">
                                            </div>
                                            <div class="w-full p-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                    E-mail
                                                </label>
                                                <input class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="grid-last-name" type="text" placeholder="Example@outlook.com">
                                            </div>
                                            <div class="w-full p-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                                    Bericht
                                                </label>
                                                <textarea class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="grid-last-name" type="text">Maak er wat moois van!</textarea>
                                            </div>
                                            <div class="w-full p-3">
                                                <button type="submit" id="" class="submit-contact-button inline-flex items-center rounded-lg px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                   <span class="button-loader hidden">
                                                       <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                        </svg>
                                                   </span>
                                                    <span class="submit-button-text">Versturen</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright bg-white p-5 text-center">
            <p class="text-black my-3">Gemaakt met <i class="em em-heart" aria-role="presentation" aria-label="HEAVY BLACK HEART"></i> en <i class="em em-coffee" aria-role="presentation" aria-label="HOT BEVERAGE"></i> door mijzelf</p>
            <p class="text-gray-600">@ 2020 Rainier Laan, Alle rechten voorbehouden</p>
        </div>
    </footer>
@endsection

