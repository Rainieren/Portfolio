<template>
    <select @change="filterLanguage(language_selected)" v-model="language_selected" class="language-filter-dropdown block appearance-none w-full bg-gray-300 border border-gray-200 focus:bg-gray-300 focus:border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none" id="grid-state">
        <option v-for="language in languages" v-bind:value="language.language">{{ language.language }}</option>
        {{ language_selected }}
    </select>

</template>

<script>
export default {
    props: ['languages'],
    data: function(){
        return {
            language_selected: '',
        }
    },
    methods: {
        filterLanguage(language_selected) {
            this.$parent.languageFilterKey = language_selected;
            this.$parent.filterProjectsByLanguage();
            this.$parent.selectedLanguage();
            this.activeLanguage();
        }
    }
}
</script>
