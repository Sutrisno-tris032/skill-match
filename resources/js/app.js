// import './bootstrap'; // Baris ini bisa di-uncomment jika Anda memerlukannya

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
//import VueApexCharts from "vue3-apexcharts"; // Import vue3-apexcharts
import VueApexCharts from "vue3-apexcharts";

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    // Buat instance aplikasi Vue
    const app = createApp({ render: () => h(App, props) });

    // Gunakan plugin Inertia.js
    app.use(plugin);

    // Gunakan plugin VueApexCharts secara terpisah
    app.use(VueApexCharts);

    // Mount aplikasi ke elemen DOM
    app.mount(el);
  },
})