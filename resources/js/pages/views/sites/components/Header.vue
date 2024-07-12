<template>
   <!-- Start Navbar -->
   <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container relative flex justify-between items-center py-8">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="/assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="/assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="/assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
                </a>

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
                        <li><a href="#" class="sub-menu-item">Accueil</a></li>
                        <li><a href="#" class="sub-menu-item">Menu</a></li>
                        <li><a href="/site/rating" class="sub-menu-item">Laissez votre avis </a></li>
                        <!-- <li><a href="#" class="sub-menu-item">Menu</a></li> -->
                    </ul><!--end navigation menu-->
                </div>
				<!--end navigation-->
                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="#">
                            <span class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i data-feather="settings" class="size-4"></i></span></span>
                            <span class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="size-4"></i></span></span>
                        </a>
                    </li>
            
                    <li class="inline ps-1 mb-0">
                        <a href="/site/cart" target="_blank">
                            <div class="login-btn-primary"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="size-4"></i></span></div>
                            <div class="login-btn-light"><span class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="shopping-cart" class="size-4"></i></span></div>
                        </a>
                    </li>
                </ul>
                <!--Login button End-->

               
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

		 
</template>