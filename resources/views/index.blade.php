@extends('layouts.app')

@section('content')
{{--    TODO:: Inplementeer dark modus--}}
    <section class="dark-mode-switch">
        <a href="#" class="bg-gradient-to-br from-purple-500 to-indigo-500 w-12 h-12 rounded-lg flex justify-center items-center fixed bottom-0 right-0 z-10 m-10 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 text-white font-light">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
        </a>
    </section>

    <section class="settings-popup bg-white bottom-10 right-28 z-20 p-5 rounded-lg fixed shadow-lg" style="min-width: 400px; min-height: 400px; display: none">
        <h4 class="border-b-2 border-gray-200">Instellingen</h4>
        <form action="" class="my-4">
            <li>Switch Dark modus</li>
            <li>Select Taal met vlaggetjes</li>
            <li>Select kleur veranderen keuze uit 3</li>
        </form>
    </section>

    <section class="section-about-me p-5 md:p-5 lg:p-10 xl:p-10 bg-gray-200 flex items-center relative" style="min-height: 100vh;">
        <div class="container mx-auto">
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 px-5 sm:px-5 md:px-0 lg:px-0 xl:px-0 gap-5" >
                <div class="introduction">
                    <h1 class="font-bold">Rainier Laan</h1>
                    <div class="line h-1 bg-gradient-to-br from-purple-500 to-indigo-500 w-24 rounded-full"></div>
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
                <div class="introduction-image flex justify-center overflow-hidden">
                    <img src="images/blob.svg" width="400" height="400" alt="" class="absolute">
                    <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_oxurudgk.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop autoplay></lottie-player>
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
                        <work-experience v-bind:experience="workExperience" v-bind:key="workExperience.id" v-for="workExperience in workExperiences"></work-experience>

                        <p class="font-bold">Mijn opleidingen</p>
                        <education v-bind:education="education" v-bind:key="education.id" v-for="education in educations"></education>
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
                <p class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Mijn projecten <span class="text-gray-400 w-full block md:w-auto md:inline text-xs font-normal">Synchronised with GitHub</span></p>
            </div>

            <div class="project-filter-options hidden md:grid sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-10 gap-5 my-5">
                <button @click="filterLanguage('all')" class="language-filter-button hover:bg-indigo-600 text-black hover:text-white font-bold py-2 px-4 rounded-full transition duration-150 ease-in-out focus:outline-none">
                    All
                </button>
                <project-language-filter-button v-bind:language="language" v-bind:key="language.text" v-if="languages" v-for="language in languages"></project-language-filter-button>
            </div>
            <div class="project-filter-options md:hidden">
                <div class="filter-dropdown">
                    <div class="w-full md:w-1/3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                            Filter Language
                        </label>
                        <div class="relative">
                            <select class="language-filter-dropdown block appearance-none w-full bg-gray-300 border border-gray-200 focus:bg-gray-300 focus:border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none" id="grid-state">
                                <option selected value="all">All</option>
                                @foreach($projects->unique('language')->pluck('language') as $language)
                                    @if($language)
                                        <option value="{{ $language }}">{{ $language  }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 my-10 gap-10">
                <project-card v-bind:project="project" v-bind:key="project.id" v-if="projects" v-for="project in filteredProjects"></project-card>
            </div>
        </div>
    </section>

    <section class="section-services bg-white p-5 md:p-5 lg:p-10 xl:p-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-1">
                <p class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Mijn diensten</p>
            </div>
            <div class="grid grid-cols-1">
                <div>
                    <p class="text-gray-700">Ik heb niet echt diensten maar ik kan wel heel veel dingen maken. Ben je opzoek naar een developer die jouw idee in de realiteit kan brengen? Misschien ben ik dan wel de juiste persoon!
                    Hieronder vind je een lijst van onderwerpen waar ik ervaring mee heb.</p>
                    <ol class="my-5 ml-10 list-decimal">
                        <li class="my-1">Webshops (Magento 2)</li>
                        <li class="my-1">Web applicaties</li>
                        <li class="my-1">Websites</li>
                        <li class="my-1">Apps</li>
                    </ol>
                    <p class="text-gray-700">Staat hetgene wat je zoekt niet tussen de lijst? Misschien kunnen we samen ergens overuit komen. Stel gerust een vraag in het contactformulier hier
                        onder en wellicht kunnen we jouw idee bespreken onder het genot van een kop koffie!</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="section-contact footer relative" id="footer">
        <div class="maps bg-white w-100 flex items-center justify-center" style="height: 250px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="height: 500px; bottom: 70px; position: relative">
                <path fill="#5000ca" fill-opacity="1" d="M0,256L30,245.3C60,235,120,213,180,208C240,203,300,213,360,208C420,203,480,181,540,176C600,171,660,181,720,192C780,203,840,213,900,224C960,235,1020,245,1080,250.7C1140,256,1200,256,1260,240C1320,224,1380,192,1410,176L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
            </svg>
        </div>
        <div class="accent-color bg-gradient-to-br from-purple-500 to-indigo-500 w-full relative p-5 md:p-5 lg:p-10 xl:p-10">
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
                                                <div class="rounded-full bg-gradient-to-br from-purple-500 to-indigo-500 h-12 w-12"></div>
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
                                <div class="contact-form" id="contact-form">
                                    <h2 class="font-bold mb-4 gilroy text-4xl xl:text-4xl lg:text-4xl md:text-4xl sm:text-4xl">Stuur een berichtje</h2>

                                    <contact-form></contact-form>
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

