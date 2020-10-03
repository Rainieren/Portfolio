<template>
    <transition @after-enter="showContent = true" name="fade">
        <div v-if="this.show" @click="closeModal" class="overlay fixed w-full h-full bg-gray-800 bg-opacity-75 top-0 left-0 flex items-center justify-center z-10">
            <transition name="slide-fade">
                <div @click.stop v-if="showContent" class="w-full md:w-2/4 relative rounded overflow-hidden shadow-lg bg-white m-5">
                    <div class="p-6">
                        <div class="font-bold gilroy text-3xl mb-2">{{ project.name }}</div>
                        <p class="text-gray-700 text-sm md:text-base lg:text-base xl:text-base mb-5">
                            {{ project.description }}
                        </p>
                        <a v-bind:href="project.html_url" class="" target="_blank">Bekijk het op GitHub</a>
                    </div>
                    <button @click="closeModal" class="absolute top-0 right-0 close-project p-4 font-bold text-gray-600">×</button>
                </div>
            </transition>
        </div>
    </transition>
</template>

<script>
    export default {
        data: function(){
            return {
                show: false,
                showContent: false
            }
        },
        props: ['project'],
        methods: {
            closeModal() {
                this.show = false;
            }
        }
    }
</script>

<style>
    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
