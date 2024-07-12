<template>
    

    <Header />

    


        <!-- Start Hero -->
        <section class="relative table w-full py-20 lg:py-24 bg-gray-50 bg-no-repeat bg-fixed bg-center bg-cover animate-fadeInBackground dark:bg-slate-800"  style="background-image: url('/assets/images/food/1.jpg');">
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
                                    <th scope="col" class="p-4 w-24 min-w-[100px]">Total($)</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white dark:bg-slate-900">
                                    <td class="p-4"><a href="#"><i class="mdi mdi-window-close text-red-600"></i></a></td>
                                    <td class="p-4">
                                        <span class="flex items-center">
                                            <img src="/assets/images/shop/items/s1.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">T-shirt (M)</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="p-4 text-center">$ 280</td>
                                    <td class="p-4 text-center">
                                        <div class="qty-icons">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                            <input min="0" name="quantity" value="3" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                                        </div>
                                    </td>
                                    <td class="p-4  text-end">$ 840</td>
                                </tr>

                                <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800">
                                    <td class="p-4"><a href="#"><i class="mdi mdi-window-close text-red-600"></i></a></td>
                                    <td class="p-4">
                                        <span class="flex items-center">
                                            <img src="/assets/images/shop/items/s2.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Bag</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="p-4 text-center">$ 160</td>
                                    <td class="p-4 text-center">
                                        <div class="qty-icons">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                            <input min="0" name="quantity" value="1" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                                        </div>
                                    </td>
                                    <td class="p-4  text-end">$ 160</td>
                                </tr>

                                <tr class="bg-white dark:bg-slate-900 border-t border-gray-100 dark:border-gray-800">
                                    <td class="p-4"><a href="#"><i class="mdi mdi-window-close text-red-600"></i></a></td>
                                    <td class="p-4">
                                        <span class="flex items-center">
                                            <img src="/assets/images/shop/items/s3.html" class="rounded shadow dark:shadow-gray-800 w-12" alt="">
                                            <span class="ms-3">
                                                <span class="block font-semibold">Watch (Men)</span>
                                            </span>
                                        </span>
                                    </td>
                                    <td class="p-4 text-center">$ 500</td>
                                    <td class="p-4 text-center">
                                        <div class="qty-icons">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                            <input min="0" name="quantity" value="1" type="number" class="h-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                                        </div>
                                    </td>
                                    <td class="p-4  text-end">$ 500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                        <div class="lg:col-span-12">
                                        <label class="form-label font-semibold">Laissez un commentaire sur votre commande:</label>
                                        <input type="text" class="form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0 mt-2" placeholder="donner des précisions sur votre commande" id="firstname" name="name" required="">
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
                                    <span class="font-semibold">$ 1650</span>
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


</script>