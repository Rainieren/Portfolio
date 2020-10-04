require('./bootstrap');

window.Vue = require('vue');

Vue.component('project-card', require('./components/projectCardComponent.vue').default);
Vue.component('project-card-modal', require('./components/projectCardModalComponent.vue').default);
Vue.component('contact-form', require('./components/contactFormComponent.vue').default);
Vue.component('contact-form-flash', require('./components/contactFormFlashComponent.vue').default);
Vue.component('project-language-filter-button', require('./components/projectLanguageButtonFilterComponent.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        showModal: false,
        projects: [],
        filteredProjects: [],
        languages: [],
        languageFilterKey: 'all'
    },
    mounted: function() {
        this.getProjects();
        this.getProjectLanguages();
    },
    methods: {
        getProjects: function() {
            axios.get('/api/get/projects')
                .then(response => {
                    this.filteredProjects = this.projects = response.data
                }).catch(err => {
                console.log(err)
            });
        },
        getProjectLanguages: function() {
            axios.get('/api/get/project/languages')
                .then(response => {
                    this.languages = response.data
                }).catch(err => {
                console.log(err)
            });
        },
        selectedLanguage: function() {
            if(this.languageFilterKey !== null) {
                this.languages.forEach((item) => {
                    item.active = item.language === this.languageFilterKey;
                });
            } else {
                this.languageFilterKey = null
            }
        },
        filterProjectsByLanguage () {
            if(this.languageFilterKey === 'all') {
                this.filteredProjects = this.projects;
            } else {
                this.filteredProjects = this.projects.filter((project) => {
                    return this.languageFilterKey === project.language
                });
            }
        }
    },
})

Vue.filter('str_limit', function (value, size) {
    if (!value) return '';
    value = value.toString();

    if (value.length <= size) {
        return value;
    }
    return value.substr(0, size) + '...';
});
