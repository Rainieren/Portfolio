<template>
    <div class="work-experience my-3">
        <div class="my-3">
            <p class="font-bold mb-0">{{ experience.title }}</p>
            <p class="">{{ experience.company }}</p>
            <p class="text-gray-600">{{ experience.started_at }} – {{ experience.stopped_at }}</p>
        </div>
        <div class="">
            <p>{{ experience.description }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['experience'],
        data: function() {
            return {

            }
        }
    }
</script>
