require('./bootstrap');

window.Vue = require('vue');

Vue.component('project-card', require('./components/projectCardComponent.vue').default);
Vue.component('project-card-modal', require('./components/projectCardModalComponent.vue').default);
Vue.component('contact-form', require('./components/contactFormComponent.vue').default);
Vue.component('contact-form-flash', require('./components/contactFormFlashComponent.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        showModal: false,
        projects: [],
    },
    mounted: function() {
        this.getProjects();
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
            },60 * 1000)
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
