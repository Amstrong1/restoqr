import { createRouter, createWebHistory } from 'vue-router'
import index from '../pages/views/index.vue'
import Site from '../pages/views/sites/Index.vue'

const routes = [
    {
        path: '/',
        component: index,
    },
    {
        path: '/site/resto',
        component: Site,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})
export default router
