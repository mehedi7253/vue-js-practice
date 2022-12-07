import './bootstrap';
import { createApp } from 'vue';
import AppComponent from './App.vue'
import router from './route'
import Toaster from '@meforma/vue-toaster'
import VueImageZoomer from 'vue-image-zoomer'
import 'vue-image-zoomer/dist/style.css'


const app = createApp({
    components: {
        AppComponent,
    }
});

app.use(router)
app.use(Toaster, {
  // One of the options
  position: "top-right",
});
app.use(VueImageZoomer)
app.mount('#app')

