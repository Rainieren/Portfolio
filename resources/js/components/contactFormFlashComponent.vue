<template>
    <transition name="slide-fade">
        <div v-if="showConfirm" class="bg-white rounded-lg shadow-lg p-5 fixed bottom-0 right-0 m-10 flex">
            <div class="w-2/12 flex justify-center items-center">
                <svg class="h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="w-10/12">
                <p class="font-bold">Bericht verzonden!</p>
                <p class="text-gray-600">Je bericht is succesvol verzonden. Ga ondertussen anders een lekker ijsje eten <i class="em em-icecream" aria-role="presentation" aria-label="SOFT ICE CREAM"></i> </p>
            </div>
        </div>
    </transition>
</template>

<script>
    // import projectCardModalComponent from "./projectCardModalComponent";
    export default {
        data: function(){
            return {
                showConfirm: false
            }
        },
    }
</script>
