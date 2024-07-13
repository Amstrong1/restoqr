import './bootstrap';
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import App from './pages/app.vue'
import router from './router/index'
import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/dist/sweetalert2.css'

window.Swal = Swal
const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timeProgressBar: true,
})
import Alpine from 'alpinejs';
window.toast = toast
const pinia = createPinia()
const app = createApp(App)


app.use(router)
app.use(pinia)
app.mount('#app')

window.Alpine = Alpine;

Alpine.start();
