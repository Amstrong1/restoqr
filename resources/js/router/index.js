import { createRouter, createWebHistory } from 'vue-router'
import index from '../pages/views/index.vue'
import Site from '../pages/views/sites/Index.vue'
import Cart from '../pages/views/sites/Cart.vue'
import StatusOrder from '../pages/views/sites/StatusOrder.vue'
import Rating from '../pages/views/sites/Rating.vue'

const routes = [
    {
        path: '/',
        component: index,
    },
    {
        path: '/site/resto/:tableId',
        component: Site,
        name: 'site',
        props: true,
    },
    {
        path: '/site/cart/:tableId',
        component: Cart,
        name: 'Cart',
        props: true,
    },
    {
        path: '/site/order/:tableId',
        component: StatusOrder,
        name: 'StatusOrder',
        props: true,
    },
    {
        path: '/site/rating/:tableId',
        component: Rating,
        name: 'Rating',
        props: true,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
