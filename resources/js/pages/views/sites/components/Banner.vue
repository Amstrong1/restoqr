<template>
    <!-- Start Hero -->
    <section   v-if="restaurant && restaurant.banner" class="relative  flex md:h-screen py-36 items-center bg-no-repeat bg-fixed bg-center bg-cover animate-fadeInBackground" 
    :style="{ 'background-image': `url(/${restaurant.banner['image']})` }" >
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container relative z-10">
            <div class="grid grid-cols-1 justify-center text-center">
                <div  class="text-white">
                    <h1 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-6xl mt-16 mb-5 animate-slideInDown">
                        {{restaurant.banner['title']}}
                    </h1>
                    <p v-html="restaurant.banner['description']" class="text-white/70 text-lg max-w-xl mx-auto animate-slideInUp"> </p>
                    <div class="mt-8 animate-bounceIn">
                        <a href="#table" class="py-3 px-6 inline-block font-semibold tracking-wide border duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md shadow-lg">
                            <i class="uil uil-restaurant"></i> Commander
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
     
</template>
<script setup>
import {ref,onMounted} from 'vue';   

const props = defineProps({
    restaurant: {
        type: Object,
        default: () => ({}),
    },
    tableId: {
        type: String,
        default: '',
    }
}); 

</script>
<style scoped>
@keyframes fadeInBackground {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideInDown {
    from { transform: translateY(-100%); }
    to { transform: translateY(0); }
}

@keyframes slideInUp {
    from { transform: translateY(100%); }
    to { transform: translateY(0); }
}

@keyframes bounceIn {
    0%, 20%, 40%, 60%, 80%, 100% {
        -webkit-transform: translateY(0); 
        transform: translateY(0);
    }
    50% {
        -webkit-transform: translateY(-20px); 
        transform: translateY(-20px);
    }
}

.animate-fadeInBackground {
    animation: fadeInBackground 5ès ease-in-out;
}

.animate-fadeIn {
    animation: fadeIn 5ès ease-in-out;
}

.animate-slideInDown {
    animation: slideInDown 3s ease-out;
}

.animate-slideInUp {
    animation: slideInUp 3s ease-out;
}

.animate-bounceIn {
    animation: bounceIn 3s ease-in-out;
}
</style>

<script setup>
</script>
