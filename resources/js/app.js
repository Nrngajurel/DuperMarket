import router from "./routes";
import VueRouter from  'vue-router'
require('./bootstrap');
window.Vue = require('vue');
Vue.component('product-component', require('./components/Products/products').default);

Vue.use(VueRouter);
const app = new Vue({
    el: '#app',
    router,
});

