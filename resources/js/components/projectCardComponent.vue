<template>
    <div class="project-card rounded bg-white overflow-hidden shadow-lg rounded-lg flex flex-col relative">
        <img class="w-full" src="/images/stock-image.jpeg" alt="">
        <div class="px-6 py-4 h-full flex flex-col">
            <div class="project-info block min-h-8">
                <div class="w-full">
                    <p class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">{{ project.language }}</p>
                </div>
            </div>
            <div class="project-language flex-1">
                <div class="w-5/6 float-left">
                    <p class="font-bold gilroy text-xl">{{ project.name }}</p>
                </div>
            </div>
            <div class="project-description flex-2 space-y-4 py-3 h-full">
                <p>{{ project.description | str_limit(128) }}</p>
            </div>
            <div class="read-more mt-auto">
                <div class="flex items-center flex-wrap ">
                    <button type="button" @click="openModal" class="font-bold text-sm text-indigo-600 hover:text-indigo-500 transition duration-150 ease-in-out hover:text-indigo-900 read-more-button flex items-center focus:outline-none">
                        Lees meer <span class="read-more-arrow ml-2">→</span>
                    </button>
                    <span class="text-gray-600 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-300">

                    </span>
                    <span class="text-gray-600 inline-flex items-center leading-none text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                        {{ project.stargazers_count }}
                    </span>
                </div>

                <project-card-modal :project="project" ref="projectModal"></project-card-modal>
            </div>
        </div>
    </div>
</template>

<script>
    import projectCardModalComponent from "./projectCardModalComponent";
    export default {
        components: {
            projectCardModalComponent
        },
        methods: {
            openModal() {
                this.$refs.projectModal.show = true;
            }
        },

        props: ['project']
    }
</script>
