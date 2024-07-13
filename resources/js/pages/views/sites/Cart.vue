<template>
    <Header />

        <!-- Start Hero -->
        <section  v-if="restaurant.banner" class="relative table w-full py-20 lg:py-24 bg-gray-50 bg-no-repeat bg-fixed bg-center bg-cover animate-fadeInBackground dark:bg-slate-800"   :style="{ 'background-image': `url(/${restaurant.banner['image']})` }">
        <div class="absolute inset-0 bg-black opacity-80"></div>
           
            <div class="container relative ">
                <div class="grid grid-cols-1 mt-16">
                    <h3 class="text-3xl text-white/70 mt-16  leading-normal font-semibold">Panier</h3>
                </div><!--end grid-->

                <div class="relative mt-3">
                    <ul class="tracking-[0.5px] mb-0 inline-block">
                        <li class="inline-block text-white/70  uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="#">Menu</a></li>
                        <li class="inline-block text-white/70  text-base text-slate-950 dark:text-white mx-0.5 ltr:rotate-0 rtl:rotate-180"><i class="uil uil-angle-right-b"></i></li>
                        <li class="inline-block text-white/70  uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Panier</li>
                    </ul>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Start -->
        <section class="relative md:py-24 py-16">
            <div class="container">
                <div class="grid lg:grid-cols-1">
                    <div class="relative overflow-x-auto shadow dark:shadow-gray-800 rounded-md">
                        <table class="w-full text-start">
                            <thead class="text-sm uppercase bg-slate-50 dark:bg-slate-800">
                                <tr>
                                    <th scope="col" class="p-4 w-4"></th>
                                    <th scope="col" class="text-start p-4 min-w-[220px]">Product</th>
                                    <th scope="col" class="p-4 w-24 min-w-[100px]">Prix</th>
                                    <th scope="col" class="p-4 w-56 min-w-[220px]">Qty</th>
                                    <th scope="col" class="p-4 w-24 min-w-[100px]">Total(F CFA)</th>

                                </tr>
                            </thead>
                            <tbody>
                              
                                <tr v-for="item in data.getCartItems" :key="item.id" class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800">
                                    <td class="p-4"><button @click="data.removeFromCart(item)"><i class="mdi mdi-window-close text-red-600"></i></button></td>
                                    <td class="p-4">
                                        <span class="flex items-center">
                                            <img :src="'/storage/'+item.image" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">{{ item.name }}</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="p-4 text-center">{{ item.price }} F CFA</td>
                                    <td class="p-4 text-center">
                                        <div class="qty-icons">
                                            <button @click="data.decreaseQuantity(item)" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                            <input min="0" name="quantity" :value="item.quantity" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                            <button  @click="data.increaseQuantity(item)" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                                        </div>
                                    </td>
                                    <td class="p-4  text-end">{{ item.price * item.quantity }} F CFA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                        <div class="lg:col-span-12">
                                        <label class="form-label font-semibold">Laissez un commentaire sur votre commande:</label>
                                        <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2"  id="firstname" name="name" required="">
                            </div>
                        <div class="lg:col-span-9 md:order-1 order-3">
                            <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Lancer commande</a>
                            <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Continuer l'achat</a>
                        </div>

                        <div class="lg:col-span-3 md:order-2 order-1">
                            <ul class="list-none shadow dark:shadow-gray-800 rounded-md">
                                <!-- <li class="flex justify-between p-4">
                                    <span class="font-semibold text-lg">Subtotal :</span>
                                    <span class="text-slate-400">$ 1500</span>
                                </li>
                                <li class="flex justify-between p-4 border-t border-gray-100 dark:border-gray-800">
                                    <span class="font-semibold text-lg">Taxes :</span>
                                    <span class="text-slate-400">$ 150</span>
                                </li> -->
                                <li class="flex justify-between font-semibold p-4 border-t border-gray-200 dark:border-gray-600">
                                    <span class="font-semibold text-lg">Total :</span>
                                    <span class="font-semibold"> {{ data.getCartTotal }} F CFA</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          
        </section><!--end section-->
        <!-- End -->
    <Footer />


</template>

<script setup>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'
import { useShoppingStore } from '../../../stores/pinia';
import { ref, onMounted } from "vue";
import { useRoute } from 'vue-router'
import router from "./../../../router/index.js"

const route = useRoute()

const tableId = ref(route.params.tableId)

const data = useShoppingStore();

const restaurant = ref([])

const getRestaurantInfo = async () => {
    try {
         const response = await axios.get(`/api/get_menu_and_restaurant_info/${tableId.value}`);
        restaurant.value = response.data.restaurant;
        console.log('restaurant', response.data.restaurant);
    } catch (error) {
        console.error('Error fetching menu and restaurant info:', error);
    }
}

onMounted (async()=>{
await getRestaurantInfo()
console.log('tableId',tableId.value)
})

</script>