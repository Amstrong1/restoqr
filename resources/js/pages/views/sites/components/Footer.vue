<template>
	<footer v-if="restaurant" class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
		<div class="container relative">
			<div class="grid grid-cols-12">
				<div class="col-span-12">
					<div class="py-[60px] px-0">
						<div class="grid lg:grid-cols-3 md:grid-cols-2 justify-center gap-[30px]">
							<div class="text-center">
								<a href="/site/rating"
									class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-50 hover:bg-gray-100 border-gray-50 hover:border-gray-100 text-slate-900 rounded-md inline-flex items-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
										stroke-linejoin="round" class="fill-current w-4 h-4 mr-2 feather feather-star">
										<polygon
											points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
										</polygon>
									</svg>
									<span>Laisser votre avis</span>
								</a>

							</div>

							<div class="text-center">
								<h5 class="tracking-[1px] text-gray-100 font-semibold mb-4">Reservation</h5>
								<p class="mb-2"><a :href="'tel:'+restaurant.tel" class="text-gray-200">{{restaurant.tel}}</a>
								</p>
								<p class="mb-0"><a :href="'mailto:'+restaurant.email"
										class="text-gray-200">{{restaurant.email}}</a></p>
							</div>

							<div class="text-center">
								<h5 class="tracking-[1px] text-gray-100 font-semibold mb-4">Addresse</h5>
								<p class="mb-2">{{ restaurant.name }}</p>
								<p class="mb-0">{{restaurant.address}}</p>
							</div>
						</div>
						<!--end grid-->


						<div class="grid grid-cols-1 mt-12">
							<div class="text-center">
								<img :src="'/' + restaurant.logo" class="block mx-auto w-16 h-16" alt="">
								<p class="max-w-xl mx-auto mt-6">Nos reseaux sociaux
								</p>
							</div>

							<ul class="list-none text-center mt-6">
								
								<li class="inline" v-if="restaurant.social  && restaurant.social['facebook']"><a :href="restaurant.social['facebook']" target="_blank"
										class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
											class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
								<li v-if="restaurant.social  && restaurant.social['instagram']" class="inline"><a :href="restaurant.social['instagram']" target="_blank"
										class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
											class="uil uil-instagram align-middle" title="instagram"></i></a></li>
								<li v-if="restaurant.social  && restaurant.social['x']" class="inline"><a :href="restaurant.social['x']" target="_blank"
										class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
											class="uil uil-twitter align-middle" title="twitter"></i></a></li>
								<li v-if="restaurant" class="inline"><a :href="'mailto:'+restaurant.email"
										class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
											class="uil uil-envelope align-middle" title="email"></i></a></li>
								
							</ul><!--end icon-->
						</div><!--end grid-->
					</div>
				</div>
			</div><!--end grid-->
		</div><!--end container-->

		<!-- <div class="py-[30px] px-0 border-t border-slate-800">
			<div class="container relative text-center">
				<div class="grid md:grid-cols-1">
					<p class="mb-0">©
						<script>document.write(new Date().getFullYear())</script>2024 Techwind. Design with <i
							class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank"
							class="text-reset">Shreethemes</a>.
					</p>
				</div>
			</div>
		</div> -->
	</footer>
</template>

<script setup>
import { useRoute } from 'vue-router'
import router from "../../../../router/index.js"
import { ref, onMounted } from "vue";


const route = useRoute()

const tableId = ref(route.params.tableId)
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