<template>
    <form @submit.prevent="sendContactForm"  class="submit-contact" id="contact-form">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                    Voornaam
                </label>
                <input v-model="firstname" name="firstname" class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="firstname" type="text" placeholder="John">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Achternaam
                </label>
                <input v-model="lastname" name="lastname" class=" appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="lastname" type="text" placeholder="Doe">
            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    E-mail
                </label>
                <input v-model="email" name="email" class="appearance-none block rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="email" type="text" placeholder="Example@outlook.com">
            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Reden voor contact
                </label>
                <div class="relative">
                    <select v-model="reason" name="reason" class="appearance-none w-full bg-gray-200 border border-gray-200 focus:bg-gray-300 focus:border-gray-300 text-gray-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none" id="reason">
                        <option value="">Selecteer een reden...</option>
                        <option value="talk">Hoi zeggen</option>
                        <option value="request">Een opdracht</option>
                        <option value="other">Anders, namelijk</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <div class="w-full p-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                    Bericht
                </label>
                <textarea v-model="message" name="message" rows="4" class="appearance-none block resize-none rounded-lg w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-indigo-600" id="message" placeholder="Waar zit je aan te denken?" type="text"></textarea>
            </div>
            <div class="w-full p-3">
                <button type="submit" id="" class="g-recaptcha submit-contact-button inline-flex items-center rounded-lg px-4 py-2 border border-transparent text-base leading-6 rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                <span class="button-loader hidden">
                   <svg class="animate-spin mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </span>
                <span class="button-success hidden">
                    <svg class="mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </span>
                <span class="submit-button-text">Versturen</span>
                </button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        name: 'contactForm',
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                firstname: '',
                lastname: '',
                email: '',
                reason: '',
                message: ''
            }
        },
        methods: {
            sendContactForm: function() {
                axios.post('/message/store', {
                    firstname: this.firstname,
                    lastname: this.lastname,
                    email: this.email,
                    reason: this.reason,
                    message: this.message
                }).then(response => {

                }).catch(err => {

                });
            }
        },
    }
</script>
