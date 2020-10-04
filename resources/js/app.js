require('./bootstrap');

window.Vue = require('vue');

Vue.component('project-card', require('./components/projectCardComponent.vue').default);
Vue.component('project-card-modal', require('./components/projectCardModalComponent.vue').default);
Vue.component('contact-form', require('./components/contactFormComponent.vue').default);
Vue.component('contact-form-flash', require('./components/contactFormFlashComponent.vue').default);

Vue.component('education', require('./components/educationComponent.vue').default);

Vue.component('work-experience', require('./components/workExperienceComponent.vue').default);
const app = new Vue({
    el: '#app',
    data: {
        showModal: false,
        projects: [],
        workExperiences: [],
        educations: [],
    },
    mounted: function() {
        this.getProjects();
        this.getWorkExperiences();
        this.getAllEducations();
    },
    methods: {
        getProjects: function() {
            setInterval(() => {
                axios.get('/api/get/projects')
                    .then(response => {
                        this.projects = response.data
                    }).catch(err => {
                    console.log(err)
                });
            },1000)
        },
        getWorkExperiences: function() {
            axios.get('/api/get/workexperiences')
                .then(response => {
                    this.workExperiences = response.data
                }).catch(err => {
                console.log(err)
            });
        },
        getAllEducations: function() {
            axios.get('/api/get/educations')
                .then(response => {
                    this.educations = response.data
                }).catch(err => {
                console.log(err)
            });
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
