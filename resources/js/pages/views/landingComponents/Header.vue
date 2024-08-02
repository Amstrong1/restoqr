<script setup>
import { onMounted, ref, onBeforeMount } from 'vue'


</script>


<template>
    <!--...::: Header Start :::... -->
    <header class="site-header site-header--sticky mobile-sticky-enable is--white py-3" id="sticky-menu">
        <div class="container-default">
            <div class="flex items-center justify-between gap-x-8">
                <!-- Header Logo -->
                <a class href='/'>
                    <img src="/RESTOqrLogo.png" alt="logoRESTOqr" width="150" height="64" />
                </a>
                <!-- Header Logo -->

                <!-- Header Navigation -->
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa-solid fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item nav-item-has-children">
                                <a class='nav-link-item drop-trigger' href='/'>Accueil</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="/#feature" class="nav-link-item drop-trigger">Fonctionnalités</a>
                            </li>
                            <!-- <li class="nav-item nav-item-has-children">
                                    <a href="#interface" class="nav-link-item drop-trigger">Interfaces</a>
                                </li> -->
                            <li class="nav-item nav-item-has-children">
                                <a href="/#about" class="nav-link-item drop-trigger">A propos</a>
                            </li>
                            <!-- <li class="nav-item nav-item-has-children">
                                    <a href="#whychooseus" class="nav-link-item drop-trigger">Pourquoi nous choisir?</a>
                                </li> -->

                        </ul>
                    </nav>
                </div>
                <!-- Header Navigation -->

                <!-- Header User Event -->
                <div class="flex items-center gap-6">
                    <a class='btn-text hidden hover:text-ColorPurple sm:inline-block' href='/login'>Connexion</a>
                    <a class='btn is-lunar-green is-rounded btn-animation group hidden sm:inline-block'
                        href='/register'><span> Inscription</span></a>
                    <!-- Responsive Offcanvas Menu Button -->
                    <div class="block lg:hidden">
                        <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- Header User Event -->
            </div>
        </div>
    </header>
    <!--...::: Header End :::... -->
</template>