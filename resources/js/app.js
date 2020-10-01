require('./bootstrap');

window.Vue = require('vue');

Vue.component('project-card', require('./components/projectCardComponent.vue').default);
Vue.component('project-card-modal', require('./components/projectCardModalComponent.vue').default);


const app = new Vue({
    el: '#app',
    data: {
        showModal: false,
        projects: [],
    },
    mounted() {
        this.getProjects();
    },
    methods: {
        getProjects: function() {
            axios.get('/api/get/projects')
                .then(response => {
                    this.projects = response.data
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
