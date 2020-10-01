<template>
    <div class="overlay project-overlay fixed w-full h-full bg-gray-800 bg-opacity-75 top-0 left-0 flex items-center justify-center hidden z-10 close-project">
        <div class="relative rounded overflow-hidden shadow-lg bg-white hidden m-5">
            <div class="p-6">
                <div class="font-bold gilroy text-3xl mb-2">{{ project.name }}</div>
                <p class="text-gray-700 text-sm md:text-base lg:text-base xl:text-base mb-5">
                    {{ project.description }}
                </p>
                <a v-bind:href="project.html_url" class="" target="_blank">Bekijk het op GitHub</a>
            </div>
            <button class="absolute top-0 right-0 close-project p-4 font-bold text-gray-600">×</button>
        </div>
    </div>
</template>

<script>
export default {
    props: ['project'],
}
</script>
