<template>
    <Header />

    <section class="bg-gray-100 py-16" style="margin-top:5rem;">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8 animate-fadeIn">Laissez Votre Avis</h2>
            <div class="bg-white shadow-md rounded-lg p-8 animate-slideInUp">
                <form @submit.prevent="submitFeedback">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nom:</label>
                        <input type="text" id="name" v-model="feedback.name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Numéro de Téléphone:</label>
                        <input type="tel" id="phone" v-model="feedback.phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required>
                    </div>
                    
                    <div v-for="(question, index) in feedback.questions" :key="index" class="mb-4">
                        <div class="flex items-center">
                            <label :class="['block text-gray-700 font-bold mb-2', index === 0 ? 'mr-4' : 'mr-6']">{{ question.text }}</label>
                            <div class="star-rating mb-2">
                                <template v-for="n in 5" :key="n">
                                    <label @click="question.rating = n" class="cursor-pointer">
                                        <span :class="{'text-yellow-500 animate-bounce': n <= question.rating, 'text-gray-400': n > question.rating}">★</span>
                                    </label>
                                </template>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="comment" class="block text-gray-700 font-bold mb-2">Commentaire:</label>
                        <textarea id="comment" v-model="feedback.comment" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-transform transform hover:scale-105">Envoyer</button>
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
import { ref } from 'vue';


const feedback = ref({
    name: '',
    phone: '',
    comment: '',
    questions: [
        { text: 'Qualité du Service', rating: 0 },
        { text: 'Propreté', rating: 0 },
        { text: 'Rapport Qualité/Prix', rating: 0 }
    ]
});

const submitFeedback = async () => {
    try {
        const response = await axios.post('https://example.com/api/feedback', {
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
                questions: [
                    { text: 'Qualité du Service', rating: 0 },
                    { text: 'Propreté', rating: 0 },
                    { text: 'Rapport Qualité/Prix', rating: 0 }
                ]
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
    0%, 20%, 50%, 80%, 100% {
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
