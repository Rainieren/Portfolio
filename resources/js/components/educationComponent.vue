<template>
    <div class="my-3">
        <p class="font-bold">{{ education.school }}</p>
        <p class="text-gray-600">{{ education.degree }}</p>
        <p class="text-gray-600">Diploma: {{ education.achieved }}</p>
        <p class="text-gray-600">{{ education.started_at }} - {{ education.stopped_at }}</p>
    </div>
</template>

<script>
    export default {
        props: ['education'],
        data: function() {
            return {

            }
        }
    }
</script>
