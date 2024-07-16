<template>
    <Header />
    <!-- Start Hero -->
    <section v-if="restaurant.banner"
        class="relative table w-full py-20 lg:py-24 bg-gray-50 bg-no-repeat bg-fixed bg-center bg-cover animate-fadeInBackground dark:bg-slate-800"
        :style="{ 'background-image': `url(/storage/${restaurant.banner['image']})` }">
        <div class="absolute inset-0 bg-black opacity-80"></div>

        <div class="container relative ">
            <div class="grid grid-cols-1 mt-16">
                <h3 class="text-3xl text-white/70 mt-16  leading-normal font-semibold">Laissez votre avis</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li
                        class="inline-block text-white/70  uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600">
                        <router-link :to="{name: 'site', params:{name: tableId} }">Menu</router-link></li>
                    <li
                        class="inline-block text-white/70  text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180">
                        <i class="uil uil-angle-right-b"></i></li>
                    <li class="inline-block text-white/70  uppercase text-[13px] font-bold text-indigo-600"
                        aria-current="page">Laissez votre avis</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->
    <section class="bg-gray-100 py-16" style="margin-top:5rem;">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 animate-fadeIn">Laissez Votre Avis</h2>
            <div v-if="loading" class="text-center">Chargement...</div>
            <div v-else class="bg-white shadow-md rounded-lg p-8 animate-slideInUp">
                <form @submit.prevent="submitFeedback">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nom:</label>
                        <input type="text" id="name" v-model="feedback.name"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Numéro de Téléphone:</label>
                        <input type="tel" id="phone" v-model="feedback.phone"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            required>
                    </div>

                    <div v-for="(question, index) in feedback.questions" :key="index" class="mb-4">
                        <div class="flex items-center">
                            <label :class="['block text-gray-700 font-bold mb-2', index === 0 ? 'mr-4' : 'mr-6']">{{
                                question.text }}</label>
                            <div class="star-rating mb-2">
                                <template v-for="n in 5" :key="n">
                                    <label @click="question.rating = n" class="cursor-pointer">
                                        <span
                                            :class="{ 'text-yellow-500 animate-bounce': n <= question.rating, 'text-gray-400': n > question.rating }">★</span>
                                    </label>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="comment" class="block text-gray-700 font-bold mb-2">Commentaire:</label>
                        <textarea id="comment" v-model="feedback.comment" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-transform transform hover:scale-105">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <Footer />
</template>


<script setup>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';
import Swal from 'sweetalert2';

const route = useRoute();
const tableId = ref(route.params.tableId);

const feedback = ref({
    name: '',
    phone: '',
    comment: '',
    questions: []
});
const restaurant = ref([]);
const loading = ref(true);

const submitFeedback = async () => {
    try {

        const response = await axios.post('/api/save_feedback/' + tableId.value, {
            name: feedback.value.name,
            phone: feedback.value.phone,
            comment: feedback.value.comment,
            questions: feedback.value.questions
        });

        if (response.status === 200) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Merci pour votre avis!',
                showConfirmButton: false,
                timer: 1500
            });

            feedback.value = {
                name: '',
                phone: '',
                comment: '',
                questions: feedback.value.questions.map(q => ({ ...q, rating: 0 }))
            };
        } else {
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'Une erreur est survenue, veuillez réessayer.',
                showConfirmButton: false,
                timer: 1500
            });
        }
    } catch (error) {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'Une erreur est survenue, veuillez réessayer.',
            showConfirmButton: false,
            timer: 1500
        });
    }
};

const getRestaurantInfo = async () => {
    try {
        const response = await axios.get(`/api/get_menu_and_restaurant_info/${tableId.value}`);
        restaurant.value = response.data.restaurant;
    } catch (error) {
        console.error('Error fetching menu and restaurant info:', error);
    }
};

const getRestaurantQuizzes = async () => {
    try {
        const response = await axios.get(`/api/get_quizzes_resto/${tableId.value}`);
        feedback.value.questions = response.data.quizzes.map(quiz => ({
            text: quiz.quiz,
            rating: 0
        }));
    } catch (error) {
        console.error('Error fetching menu and quizzes info:', error);
    } finally {
        loading.value = false;
    }
};

onMounted(async () => {
    await getRestaurantInfo();
    await getRestaurantQuizzes();
});

</script>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

@keyframes slideInUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }

    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.animate-fadeIn {
    animation: fadeIn 1s ease-in-out;
}

.animate-slideInUp {
    animation: slideInUp 1s ease-in-out;
}

.star-rating {
    display: flex;
    direction: ltr;
    font-size: 2rem;
    cursor: pointer;
}

.star-rating label {
    transition: color 0.3s;
}

@keyframes bounce {

    0%,
    20%,
    50%,
    80%,
    100% {
        transform: translateY(0);
    }

    40% {
        transform: translateY(-10px);
    }

    60% {
        transform: translateY(-5px);
    }
}

.animate-bounce {
    animation: bounce 1s;
}
</style>
