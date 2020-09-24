@extends('layouts.app')

@section('content')
    <section class="section-about-me p-5 md:p-5 lg:p-10 xl:p-10 bg-gray-200 flex items-center relative" style="min-height: 100vh;">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-5 sm:px-5 md:px-0 lg:px-0 xl:px-0 gap-5" >
                <div class="introduction">
                    <h1 class="font-bold">Rainier Laan</h1>
                    <div class="line h-1 bg-indigo-600 w-24 rounded-full"></div>
                    <div class="text my-5">
                        <p class="text-gray-800">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aperiam aspernatur aut consectetur corporis delectus eius est facere iure iusto minus nam odit quas sint soluta, tempora tempore vitae voluptas.</p>
                        <p class="text-gray-800 my-5">Meer weten? Klik op de pijl</p>
                        <div class="bounce-arrow w-100 flex justify-center">
                            <a href="#" class="nav-slide" data-nav-destination="work">
                                <svg class="animate-bounce w-6 h-6 text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="introduction-image flex justify-center">
                    <span class="relative rounded-full h-64 w-64 bg-gray-400 block p-5">
                        <span class="relative rounded-full h-full w-full bg-indigo-600 block p-5">
                            <span class="relative rounded-full h-full w-full bg-indigo-700 block p-5">
                                <span class="relative rounded-full h-full w-full bg-indigo-800 block p-5">
                                    <span class="relative rounded-full h-full w-full bg-indigo-900 block"></span>
                                </span>
                            </span>
                        </span>
                    </span>
                </div>
            </div>

        </div>
    </section>

    <section class="section-work  p-5 md:p-5 lg:p-10 xl:p-10 bg-white">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 my-5">
                <p class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Mijn werkervaring</p>
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
                            </div>
                            <div class="flex justify-between my-5">
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>
                                <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>
                            </div>
                            <div class="space-y-2 my-5">
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

    <section class="section-projects bg-gray-200 p-5 md:p-5 lg:p-10 xl:p-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1">
                <p class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Mijn projecten <span class="text-gray-400 w-full block md:w-auto md:inline text-xs font-normal">Fetched from GitHub</span></p>
            </div>
            <div class="grid sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-12 gap-5 my-5">
                <button class="bg-indigo-600 hover:bg-indigo-700 text-white hover:text-white font-bold py-2 px-4 rounded-full">
                    All
                </button>

                @foreach($projects->unique('language')->pluck('language') as $language)
                    <button class="bg-none hover:bg-indigo-600 text-black hover:text-white font-bold py-2 px-4 rounded-full transition duration-150 ease-in-out focus:outline-none">
                        {{ $language  }}
                    </button>
                @endforeach
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 my-10 gap-10">
                @foreach($projects as $project)
                    <div class="rounded bg-gray-100 overflow-hidden shadow-lg rounded-lg flex flex-col relative">
                        <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4 h-full flex flex-col">
                            <div class="project-info flex justify-between pt-1">
                                <div class="flex w-5/6">
                                    <p class="font-bold gilroy text-xl">{{ $project->name }}</p>
                                </div>
                                <div class="flex justify-end w-1/6">
                                    {{ $project->stargazers_count }}
                                </div>
                            </div>
                            <div class="project-language flex-1">
                                <div class="w-full">
                                    <p class="text-gray-600 text-sm font-bold">{{ $project->language }}</p>
                                </div>
                            </div>
                                {{--                                <div class="animate-pulse h-4 bg-gray-400 rounded w-1/4"></div>--}}
                            <div class="project-description flex-2 space-y-4 py-3 h-full">
                                <p>{!! \Illuminate\Support\Str::limit($project->description, $limit = 125, $end = '...') !!}</p>
                            </div>
                            <div class="read-more mt-auto">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out hover:text-indigo-900 read-more-button" data-target-project="{{ $project->name }}">Lees meer</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div class="overlay fixed w-full h-full bg-gray-800 bg-opacity-75 top-0 left-0 flex items-center justify-center hidden z-10 close-project">
        @foreach($projects as $project)
            <div class="relative rounded overflow-hidden shadow-lg bg-white hidden project-card project-{{ $project->name }} m-5" data-target-modal="{{ $project->name }}">
                <div class="p-6">
                    <div class="font-bold gilroy text-3xl mb-2">{{ $project->name }}</div>
                    <p class="text-gray-700 text-sm md:text-base lg:text-base xl:text-base">
                        {{ $project->description }}
                    </p>
                </div>
                <button class="absolute top-0 right-0 close-project p-4 font-bold text-gray-600" data-target-project="{{ $project->name }}">×</button>
            </div>
        @endforeach
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
                                    <p class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Kom in contact</p>
                                    <p class="text-gray-600 ">Wil je contact met mij opnemen? Dat kan! Ik ben te bereiken op een van de onderstaande platformen.</p>
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
                                    <h2 class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Stuur een berichtje</h2>
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
                                                <button type="submit" id="" class="submit-contact-button inline-flex items-center rounded-lg px-4 py-2 border border-transparent text-base leading-6 rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
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

