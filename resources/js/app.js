import VueRouter from  'vue-router';
import router from "./routes";
require('./bootstrap');
window.Vue = require('vue');
Vue.component('product-component', require('./components/Products/products').default);
Vue.component('best-seller', require('./components/Products/BestSeller').default);

Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router,
});

