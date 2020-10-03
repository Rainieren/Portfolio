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
        languages: [],
        languageFilterKey: 'PHP'
    },
    mounted: function() {
        this.getProjects();
        this.getProjectLanguages();
    },
    methods: {
        getProjects: function() {
            axios.get('/api/get/projects')
                .then(response => {
                    this.projects = response.data
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
        filterProjectsByLanguage () {
            if(this.languageFilterKey === 'all') {
                return this.projects;
            } else {
                return this.projects.filter(function(project) {
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
