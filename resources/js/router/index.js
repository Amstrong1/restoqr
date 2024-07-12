import { createRouter, createWebHistory } from 'vue-router'
import index from '../pages/views/index.vue'
import Site from '../pages/views/sites/Index.vue'
import Cart from '../pages/views/sites/Cart.vue'
import Rating from '../pages/views/sites/Rating.vue'

const routes = [
    {
        path: '/',
        component: index,
    },
    {
        path: '/site/resto',
        component: Site,
    },
    {
        path: '/site/cart',
        component: Cart,
    },
    {
        path: '/site/rating',
        component: Rating,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
