<template>
   <!-- Start Navbar -->
   <nav id="topnav" class="defaultscroll is-sticky" v-if="restaurant">
            <div class="container relative flex justify-between items-center py-8">
                <!-- Logo container-->
                <router-link :to="{name: 'site', params:{name: tableId} }" class="logo" >
                    <span class="inline-block dark:hidden" v-if="restaurant">
                        <img :src="'/storage/'+restaurant.logo" class="l-dark w-16 h-16" alt="">
                        <img :src="'/storage/'+restaurant.logo" class="l-light w-16 h-16" alt="">
                    </span>
                 
                    <img :src="'/storage/'+restaurant.logo" height="16" class="hidden dark:inline-block" alt="">

                </router-link>

                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
				<div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-light">
                        <li><router-link :to="{name: 'site', params:{name: tableId} }"  class="sub-menu-item">Accueil</router-link></li>
                        <li><router-link :to="{name: 'site', params:{name: tableId} }" class="sub-menu-item">Menu</router-link></li>
                        <li><router-link :to="{name: 'Rating', params:{name: tableId} }" class="sub-menu-item">Laissez votre avis </router-link></li>
                        <!-- <li><a href="#" class="sub-menu-item">Menu</a></li> -->
                    </ul><!--end navigation menu-->
                </div>
				<!--end navigation-->
                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0" v-if="order">
                        <router-link :to="{name: 'StatusOrder', params:{name: tableId} }">
                            <span class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"> <i class="fas fa-utensils size-4"></i></span></span>
                            <span class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"> <i class="fas fa-utensils size-4"></i></span></span>
                        </router-link>
                    </li>
            
                    <li class="inline ps-1 mb-0">
                        <router-link :to="{name: 'Cart', params:{name: tableId} }">
                            <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="size-4"></i>({{ data.countCartItems }})</span></div>
                            <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="size-4"></i>({{ data.countCartItems }})</span></div>
                        </router-link>
                    </li>
                </ul>
                <!--Login button End-->

               
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

		 
</template>

<script setup>
import {ref,onMounted} from 'vue';   
import { useShoppingStore } from '../../../../stores/pinia';

const data = useShoppingStore();

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
const order = ref([])


const getTableOrderInfo = async () => {
    try {
         const response = await axios.get(`/api/get_table_order_info/${props.tableId}`);
        order.value = response.data.order;
        console.log('orders', response.data.order);
    } catch (error) {
        console.error('Error fetching menu and orders info:', error);
    }
}

onMounted (async()=>{
await getTableOrderInfo()

})


</script>