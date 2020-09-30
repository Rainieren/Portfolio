require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    data: {
        projects: []
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
    }
})
