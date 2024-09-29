<template>
    <section class="section-faq bg-gray-50">
      <div class="relative z-10 overflow-hidden">
        <!-- Section Space -->
        <div class="section-space">
          <!-- Section Container -->
          <div class="container-default">
            <!-- Section Content Wrapper -->
            <div class="mb-[60px] xl:mb-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_timingfunction="ease" data-jos_duration="0.7" data-jos_delay="0.5" data-jos_counter="1">
              <!-- Section Content Block -->
              <div class="mx-auto max-w-[625px]">
                <h2 class="text-center">
                  Principaux avantages de RestoQR pour votre restaurant
                </h2>
              </div>
              <!-- Section Content Block -->
            </div>
            <!-- Section Content Wrapper -->
            <!-- FAQ Area -->
            <div class="jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_timingfunction="ease" data-jos_duration="0.7" data-jos_delay="0.5" data-jos_counter="1">
              <!-- Accordion List -->
              <ul class="mx-auto max-w-[1076px] rounded-[10px] border border-ColorBlack">
                <!-- Accordion Item -->
                <li
                  v-for="(item, index) in faqItems"
                  :key="index"
                  class="accordion-item overflow-hidden border-b border-ColorBlack p-[30px] last:border-b-0"
                  :class="{ 'active': activeIndex === index }"
                >
                  <!-- Accordion Header -->
                  <div class="accordion-header flex justify-between items-center gap-6 text-xl font-semibold text-ColorBlack">
                    <button class="flex-1 text-left" @click="toggleAccordion(index)">
                      {{ item.question }}
                    </button>
                    <div class="accordion-icon-1 relative flex h-5 w-5 items-center justify-center rounded-[50%] bg-ColorBlue" @click="toggleAccordion(index)">
                      <span class="inline-block h-0.5 w-[10px] rounded-sm bg-white"></span>
                      <span class="absolute inline-block h-[10px] w-0.5 rounded-sm bg-white" :class="{ 'rotate-90': activeIndex === index }"></span>
                    </div>
                  </div>
                  <!-- Accordion Header -->
                  <!-- Accordion Body -->
                  <div :class="{ 'h-auto': activeIndex === index, 'h-0 overflow-hidden': activeIndex !== index }" class="accordion-body max-w-[826px] opacity-80 transition-all duration-300 ease-in-out">
                    <ul class="pt-5">
                      <li v-for="(bullet, bulletIndex) in item.answerBullets" :key="bulletIndex">
                        {{ bullet }}
                      </li>
                    </ul>
                  </div>
                  <!-- Accordion Body -->
                </li>
                <!-- Accordion Item -->
              </ul>
              <!-- Accordion List -->

              <!-- <div class="mt-[60px] flex justify-center xl:mt-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_timingfunction="ease" data-jos_duration="0.7" data-jos_delay="0.5" data-jos_counter="1">
                <a class="btn is-blue is-rounded btn-animation is-large group" href="contact.html"><span>Vous avez encore des questions ? Contactez-nous</span></a>
              </div> -->
            </div>
            <!-- FAQ Area -->
          </div>
          <!-- Section Container -->
        </div>
        <!-- Section Space -->


      </div>
    </section>
  </template>

  <script setup>
  import { ref } from 'vue'

  const activeIndex = ref(null)

  const faqItems = [
    {
      question: "1. Expérience client améliorée",
      answerBullets: [
        "-Menus digitalisés via QR code pour une consultation facile et rapide",
        "-Commandes en ligne réduisant les erreurs et le temps d'attente",
        "-Suivi en temps réel du statut des commandes",
        "-Possibilité pour les clients de laisser des avis et des notes"
      ]
    },
    {
      question: "2. Augmentation de la productivité du personnel",
      answerBullets: [
        "-Moins de tâches répétitives de prise de commande manuelle",
        "-Gestion centralisée des commandes facilitant la coordination",
        "-Libération du temps du personnel pour se concentrer sur l'accueil et le service"
      ]
    },
    {
      question: "3. Réduction des coûts opérationnels",
      answerBullets: [
        "-Moins de coûts d'impression et de mise à jour des menus physiques",
        "-Optimisation des stocks grâce aux analyses de ventes",
        "-Diminution du gaspillage alimentaire"
      ]
    },
    {
      question: "4. Adaptabilité et personnalisation",
      answerBullets: [
        "-Menus dynamiques faciles à mettre à jour",
        "-Création d'offres spéciales et de promotions sur mesure",
        "-Intégration des réseaux sociaux et des programmes de fidélité"
      ]
    },
    {
      question: "5. Sécurité et hygiène",
      answerBullets: [
        "-Réduction des contacts physiques avec les menus",
        // "-Options de paiement sans contact pour plus de sécurité"
      ]
    },
    {
      question: "6. Flexibilité et évolutivité",
      answerBullets: [
        "-Adaptation à différents types de restaurants",
        "-Possibilité d'ajouter de nouvelles fonctionnalités au fur et à mesure"
      ]
    },
    {
      question: "7. Rapports et analyses détaillés",
      answerBullets: [
        "-Statistiques de vente pour identifier les tendances",
        "-Aide à la prise de décision pour optimiser les commandes"
      ]
    }
  ]

  const toggleAccordion = (index) => {
    if (activeIndex.value === index) {
      activeIndex.value = null
    } else {
      activeIndex.value = index
    }
  }
  </script>
