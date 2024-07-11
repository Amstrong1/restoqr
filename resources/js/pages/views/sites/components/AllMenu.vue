<template>
  
        <section class="relative md:py-24 py-16 md:pt-12 bg-[url('../..//assets/images/food/food-menu.html')] bg-no-repeat bg-top bg-cover">
            <div class="container relative">

                <h2 class="text-4xl mb-10 font-bold font-['Montserrat'] text-center leading-snug tracking-wide md:text-5xl lg:text-6xl xl:text-7xl xxl:text-8xl text-dark bg-gradient-to-r from-[#FFC107] to-[#FF9700] bg-clip-text">Nos menus</h2>
                <div class="grid grid-cols-1 items-center gap-[30px]">
                    <div class="filters-group-wrap text-center">
                        <div class="filters-group">
                            <ul class="mb-0 list-none container-filter-border-bottom filter-options space-x-3">
                                <li class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500 active" data-group="all">All</li>
                                <li class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="break">Breakfast</li>
                                <li class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="lunch">Lunch</li>
                                <li class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="dinner">Dinner</li>
                                <li class="inline-block text-sm uppercase font-semibold mb-3 cursor-pointer relative border-b border-transparent text-slate-400 duration-500" data-group="tea">Tea &amp; Coffee</li>
                            </ul>
                        </div>
                    </div>
                </div><!--grid-->
            </div><!--end container-->

            <div class="container relative mt-8">   
                <div id="grid" class="md:flex justify-center shuffle" style="position: relative; overflow: hidden; height: 1580px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1);">
                    <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6 shuffle-item shuffle-item--visible" data-groups="[&quot;break&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <img src="/assets/images/food/1.jpg" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

                        <div class="mt-4 text-center">
                            <a href="#" class="text-lg font-medium block hover:text-indigo-600 duration-500">Black bean dip</a>
                            <span class="text-slate-400 mt-2 block">A reader will be distracted by the readable</span>

                            <h5 class="text-indigo-600 font-medium mt-4">$25.00</h5>
                            <button class="py-2 px-5 mb-4 mt-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md">Add to cart</button>
                        </div>
                    </div>
                    <!--end col-->
                    
                    <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6 shuffle-item shuffle-item--visible" data-groups="[&quot;lunch&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(245px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <img src="/assets/images/food/2.jpg" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

                        <div class="mt-4 text-center">
                            <a href="#" class="text-lg font-medium block hover:text-indigo-600 duration-500">Onion Pizza</a>
                            <span class="text-slate-400 mt-2 block">A reader will be distracted by the readable</span>

                            <h5 class="text-indigo-600 font-medium mt-4">$25.00</h5>
                            <button class="py-2 px-5 mb-4 mt-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md">Add to cart</button>

                        </div>
                    </div><!--end col-->
                    
                    <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6 shuffle-item shuffle-item--visible" data-groups="[&quot;break&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(491px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <img src="/assets/images/food/3.jpg" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

                        <div class="mt-4 text-center">
                            <a href="#" class="text-lg font-medium block hover:text-indigo-600 duration-500">Chicken Breast</a>
                            <span class="text-slate-400 mt-2 block">A reader will be distracted by the readable</span>

                            <h5 class="text-indigo-600 font-medium mt-4">$25.00</h5>
                            <button class="py-2 px-5 mb-4 mt-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md">Add to cart</button>

                        </div>
                    </div><!--end col-->
                    
                    <div class="group lg:w-1/5 md:w-1/3 picture-item p-3 mt-6 shuffle-item shuffle-item--visible" data-groups="[&quot;dinner&quot;]" style="position: absolute; top: 0px; visibility: visible; will-change: transform; left: 0px; opacity: 1; transform: translate(0px, 316px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <img src="/assets/images/food/4.jpg" class="rounded-full size-32 mx-auto group-hover:animate-[spin_10s_linear_infinite]" alt="">

                        <div class="mt-4 text-center">
                            <a href="#" class="text-lg font-medium block hover:text-indigo-600 duration-500">Veg Pizza</a>
                            <span class="text-slate-400 mt-2 block">A reader will be distracted by the readable</span>

                            <h5 class="text-indigo-600 font-medium mt-4">$25.00</h5>
                            <button class="py-2 px-5 mb-4 mt-2 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-gray-800 hover:bg-gray-950 border-gray-800 hover:border-gray-950 text-white rounded-md">Add to cart</button>

                        </div>
                    </div><!--end col-->
                    
                  
                </div>
            </div><!--end container-->
        </section>
</template>