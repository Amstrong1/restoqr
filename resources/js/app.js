import './bootstrap';
import { createApp } from 'vue'
import App from './pages/app.vue'
import router from './router/index'
import Alpine from 'alpinejs';

const app = createApp(App)
app.use(router)
app.mount('#app')

window.Alpine = Alpine;

Alpine.start();
