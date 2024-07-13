<template>
    <section class="relative md:py-24 py-16 md:pt-12 bg-[url('../..//assets/images/food/food-menu.html')] bg-no-repeat bg-top bg-cover">
      <div class="container relative">
        <h2 class="text-4xl mb-10 font-bold font-['Montserrat'] text-center leading-snug tracking-wide md:text-5xl lg:text-6xl xl:text-7xl xxl:text-8xl text-dark bg-gradient-to-r from-[#FFC107] to-[#FF9700] bg-clip-text">Nos menus</h2>
        <div class="grid grid-cols-1 items-center gap-[30px]">
          <div class="filters-group-wrap text-center">
            <div class="filters-group">
              <ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">
                <li 
                  class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500"
                  :class="{'active': selectedMenu === null}"
                  @click="filterArticles(null)">
                  Tout
                </li>
                <li 
                  v-for="menu in menus" 
                  :key="menu.id" 
                  class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" 
                  :class="{'active': selectedMenu === menu.id}" 
                  @click="filterArticles(menu.id)">
                  {{ menu.name }}
                </li>
              </ul>
            </div>
          </div>
        </div><!-- grid -->
      </div><!-- end container -->
  
      <div class="container relative mt-8">
          <div class="md:flex justify-center shuffle" style="position: relative; overflow: hidden;">
          
          <div 
            v-for="article in filteredArticles" 
            :key="article.id" 
            class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6 shuffle-item shuffle-item--visible" 
            style="position: relative;">
            <img  :src="'/storage/'+article.image" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">
  
            <div class="mt-4 text-center">
              <a href="#" class="text-lg font-medium block hover:text-indigo-600 duration-500">{{ article.name }} </a>
              <span class="text-slate-400 mt-2 block">{{ article.description }}</span>
              <h5 class="text-indigo-600 font-medium mt-4">{{ article.price }} F CFA</h5>
              <button @click="data.addToCart(article)" class="py-2 px-5 mb-4 mt-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md"><i class="uil uil-restaurant"></i>Ajouter au panier</button>
            </div>
          </div>
        </div>
      </div><!-- end container -->
    </section>
  </template>
  
  <script setup>
  import { ref, computed } from 'vue';
  import { useShoppingStore } from '../../../../stores/pinia';


  const data = useShoppingStore();
  
  const props = defineProps({
    menus: {
      type: Array,
      default: () => [],
    },
  });
  
  const selectedMenu = ref(null);
  
  const filteredArticles = computed(() => {
    if (selectedMenu.value === null) return props.menus.flatMap(menu => menu.articles);
    const menu = props.menus.find(menu => menu.id === selectedMenu.value);
    console.log('menu',menu.articles)
    return menu ? menu.articles : [];
  });
  
  const filterArticles = (menuId) => {
    selectedMenu.value = menuId;

    console.log('filteredArticles', filteredArticles.value);       
  };


  </script>
  
  <style>
  .active {
    border-bottom: 2px solid #FF9700;
  }
  </style>
