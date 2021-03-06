import Vue from 'vue'
import App from './components/App.vue';
import VueRouter from 'vue-router';
import { routes } from './routes';

const router = new VueRouter({
    mode: 'history',
    routes: routes,
});

Vue.use(VueRouter);

new Vue({ router, render: h => h(App) }).$mount('#app')

export default {}