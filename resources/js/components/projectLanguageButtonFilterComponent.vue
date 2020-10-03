<template>
    <button @click="filterLanguage(language.language)"
            class="language-filter-button hover:bg-indigo-600 text-black hover:text-white font-bold py-2 px-4 rounded-full transition duration-150 ease-in-out focus:outline-none">
        {{ language.language }}
    </button>
</template>

<script>
    export default {
        props: ['language'],
        data: {
        },
        methods: {
            filterLanguage(language) {
                this.$parent.languageFilterKey = language;
                this.$parent.filterProjectsByLanguage();
            }
        }
    }
</script>
