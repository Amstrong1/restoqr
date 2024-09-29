<script setup>
import { onMounted, ref } from 'vue'

const isMenuOpen = ref(false)

onMounted(() => {
  const openBtn = document.getElementById('openBtn')
  const mobileMenu = document.querySelector('.menu-block')
  const mobileMenuClose = document.querySelector('.mobile-menu-close')
  const goBackBtn = document.querySelector('.go-back')

  openBtn.addEventListener('click', () => {
    mobileMenu.classList.add('active')
    document.body.classList.add('overflow-hidden')
    isMenuOpen.value = true
  })

  mobileMenuClose.addEventListener('click', () => {
    mobileMenu.classList.remove('active')
    document.body.classList.remove('overflow-hidden')
    isMenuOpen.value = false
  })

  goBackBtn.addEventListener('click', () => {
    mobileMenu.classList.remove('active')
    document.body.classList.remove('overflow-hidden')
    isMenuOpen.value = false
  })
})
</script>

<template>
  <!--...::: Header Start :::... -->
  <header class="site-header bg-white site-header--sticky mobile-sticky-enable is--white" >
    <div class="container-default">
      <div class="flex items-center justify-between gap-x-8">
        <!-- Header Logo -->
        <a class href='/'>
          <img src="/RESTOqrLogo.png" alt="logoRESTOqr" width="150" height="64" />
        </a>
        <!-- Header Logo -->

        <!-- Header Navigation -->
        <div class="menu-block-wrapper">
          <div class="menu-overlay" :class="{ 'active': isMenuOpen }"></div>
          <nav class="menu-block" :class="{ 'active': isMenuOpen }" id="append-menu-header">
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
              <li class="nav-item nav-item-has-children">
                <a href="/#about" class="nav-link-item drop-trigger">A propos</a>
              </li>
              <!-- Boutons de connexion et d'inscription dans le menu mobile uniquement -->
              <li class="nav-item-auth">
                <a class='btn-text block is-rounded hover:text-ColorPurple' href='/login'>Connexion</a>
              </li>
              <li class="nav-item-auth" >
                <a class='btn is-lunar-green is-rounded btn-animation group block'
                  href='/register'><span>Inscription</span></a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- Header Navigation -->

        <!-- Header User Event -->
        <div class="flex items-center gap-6">
          <!-- Boutons de connexion et d'inscription pour les grands écrans uniquement -->
          <a class='btn-text hover:text-ColorPurple hidden lg:block' href='/login'>Connexion</a>
          <a class='btn is-blue is-rounded btn-animation is-large  group hidden lg:block'
            href='/register'><span>Inscription</span></a>
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

<style scoped>
/* Ajoutez ici vos styles CSS spécifiques si nécessaire */
.menu-block.active {
  transform: translateX(0);
}

.menu-overlay.active {
  visibility: visible;
  opacity: 1;
}

@media (min-width: 768px) {
  .nav-item-auth {
    display: none;
  }
}
</style>
