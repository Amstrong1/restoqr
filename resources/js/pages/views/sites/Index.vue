<template>
    <Header :restaurant="restaurant" :tableId="tableId"/>
    <Banner :restaurant="restaurant"/>
    <AllMenu :menus="menus"/>
    <Footer :restaurant="restaurant"/>
    <!-- <TodayMenu />
     -->
</template>

<script setup>
import Header from './components/Header.vue'
import Banner from './components/Banner.vue'
import TodayMenu from './components/TodayMenu.vue'
import AllMenu from './components/AllMenu.vue'
import Footer from './components/Footer.vue'
import { ref, onMounted } from "vue";
import { useRoute } from 'vue-router'
import router from "./../../../router/index.js"


const route = useRoute()

const tableId = ref(route.params.tableId)

const restaurant = ref([])

const menus = ref([])

const getMenuAndRestaurantInfo = async () => {
    try {
         const response = await axios.get(`/api/get_menu_and_restaurant_info/${tableId.value}`);
        restaurant.value = response.data.restaurant;
        menus.value = response.data.menus;
        console.log('restaurant', response.data.restaurant);
        console.log('menus', response.data.menus);
    } catch (error) {
        console.error('Error fetching menu and restaurant info:', error);
    }
}

onMounted (async()=>{
await getMenuAndRestaurantInfo()
console.log('tableId',tableId.value)
})

</script>