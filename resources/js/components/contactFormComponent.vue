<template>
<div class="contact-form">
    <form class="submit-contact" id="contact-form">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Voornaam
                </label>
                <input v-model.trim="$v.firstname.$model" v-model="firstname" :class='{"border-red-600": submitted && $v.firstname.$error}' name="firstname" class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="firstname" type="text" placeholder="John">
                <span class="error text-red-500" v-if="submitted && !$v.firstname.required">Voornaam is verplicht!</span>
                <span class="error text-red-500" v-if="submitted && !$v.firstname.maxLength">Je voornaam is iets te lang. Het maximum is 50 tekens</span>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Achternaam
                </label>
                <input v-model.trim="$v.lastname.$model" v-model="lastname" :class='{"border-red-600": submitted && $v.lastname.$error}' name="lastname" class=" appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="lastname" type="text" placeholder="Doe">
                <span class="error text-red-500" v-if="submitted && !$v.lastname.required">Achternaam is verplicht!</span>
                <span class="error text-red-500" v-if="submitted && !$v.lastname.maxLength">Je achternaam is iets te lang. Het maximum is 50 tekens</span>
            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    E-mail
                </label>
                <input v-model.trim="$v.email.$model" v-model="email" :class='{"border-red-600": submitted && $v.email.$error}' name="email" class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="email" type="text" placeholder="Example@outlook.com">
                <span class="error text-red-500" v-if="submitted && !$v.email.required">Email is verplicht!</span>
                <span class="error text-red-500" v-if="submitted && !$v.email.email">Het moet wel een email zijn he</span>

            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Reden voor contact
                </label>
                <div class="relative">
                    <select v-model.trim="$v.reason.$model" v-model="reason" :class='{"border-red-600": submitted && $v.reason.$error}' name="reason" class="appearance-none w-full bg-gray-200 border border-gray-200 focus:bg-gray-300 focus:border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none" id="reason">
                        <option value="">Selecteer een reden...</option>
                        <option value="talk">Hoi zeggen</option>
                        <option value="request">Een opdracht</option>
                        <option value="other">Anders, namelijk</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <span class="error text-red-500" v-if="submitted && !$v.reason.required">Reden is verplicht!</span>
            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Bericht
                </label>
                <textarea v-model="message" :class='{"border-red-600": submitted && $v.message.$error}' name="message" rows="4" class="appearance-none block resize-none rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="message" placeholder="Waar zit je aan te denken?" type="text"></textarea>
                <span class="error text-red-500" v-if="submitted && !$v.message.required">Bericht is verplicht!</span>
                <span class="error text-red-500" v-if="submitted && !$v.message.minLength">Bericht moet minimaal {{$v.message.$params.minLength.min}} tekens zijn!</span>
            </div>
            <div class="w-full p-3">
                <button @click.prevent="sendContactForm" type="submit" id="" class="submit-contact-button inline-flex items-center rounded-lg px-4 py-2 border border-transparent text-base leading-6 rounded-md text-white bg-gradient-to-br from-purple-500 to-indigo-500 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                     <span v-if="isLoading" class="button-loader">
                       <svg class="animate-spin mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                    <span class="submit-button-text">Versturen</span>
                </button>
            </div>
        </div>
    </form>
    <contact-form-flash ref="contactFlash"></contact-form-flash>
</div>

</template>

<script>
    import Vue from "vue";
    import { required, email, minLength, maxLength } from "vuelidate/lib/validators";
    import Vuelidate from "vuelidate";
    import contactFormFlashComponent from "./contactFormFlashComponent";

    Vue.use(Vuelidate)

    export default {
        name: 'contactForm',
        data() {
            return {
                submitted: false,
                isLoading: false,
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                firstname: '',
                lastname: '',
                email: '',
                reason: '',
                message: ''
            }
        },
        components: {
            contactFormFlashComponent
        },
        methods: {
            sendContactForm: function() {
                this.submitted = true
                this.$v.$touch()

                if(this.$v.$error) {
                    return
                } else {
                    this.isLoading = true
                    axios.post('/message/store', {
                        firstname: this.firstname,
                        lastname: this.lastname,
                        email: this.email,
                        reason: this.reason,
                        message: this.message
                    }).then(response => {
                        this.isLoading = false
                        this.$refs.contactFlash.showConfirm = true
                        this.firstname = '',
                        this.lastname = '',
                        this.email = '',
                        this.reason = '',
                        this.message = ''
                        this.submitted = false
                        setTimeout(()=>{
                            this.$refs.contactFlash.showConfirm = false;
                        },5000);
                    }).catch(err => {

                    });
                }
            }
        },
        validations: {
            firstname: {
                required,
                maxLength: maxLength(50)
            },
            lastname: {
                required,
                maxLength: maxLength(50)
            },
            email: {
                required,
                email,
            },
            reason: {
                required
            },
            message: {
                required,
                minLength: minLength(32)
            }
        }
    }
</script>

<style>
    .slide-fade-enter-active {
        transition: all .2s ease;
    }
    .slide-fade-leave-active {
        transition: all .5s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }
    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */ {
        transform: translateX(10px);
        opacity: 0;
    }
</style>
