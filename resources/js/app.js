import VueRouter from  'vue-router';
import router from "./routes";
require('./bootstrap');
window.Vue = require('vue');
Vue.component('home-component', require('./components/HomeComponent').default);


Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router,
});

