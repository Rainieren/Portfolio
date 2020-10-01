<template>
    <div class="project-card rounded bg-gray-100 overflow-hidden shadow-lg rounded-lg flex flex-col relative">
        <img class="w-full" src="https://techcrunch.com/wp-content/uploads/2015/04/codecode.jpg" alt="Sunset in the mountains">
        <div class="px-6 py-4 h-full flex flex-col">
            <div class="project-info block min-h-8">
                <div class="w-5/6 float-left">
                    <p class="font-bold gilroy text-xl">{{ project.name }}</p>
                </div>
                <div class="flex w-1/6 float-right items-center justify-end">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5 mr-2 text-yellow-600">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    {{ project.stargazers_count }}
                </div>
            </div>
            <div class="project-language flex-1">
                <div class="w-full">
                    <p class="text-gray-600 text-sm font-bold">{{ project.language }}</p>
                </div>
            </div>
            <div class="project-description flex-2 space-y-4 py-3 h-full">
                <p>{{ project.description | str_limit(128) }}</p>
            </div>
            <div class="read-more mt-auto">
                <button type="button" class="font-bold text-sm text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out hover:text-indigo-900 read-more-button flex items-center focus:outline-none">
                    Lees meer <span class="read-more-arrow ml-2">→</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['project'],
    }
</script>
