import VueRouter from "vue-router";
import Products from './components/Products/products';

const routes = [
    {
        path: '/',
        component: Products,
        name: "products",
    },
    {
        path: '/Product/:id',
        component: Products,
        name: "product",
    },
];
const router = new VueRouter({
   routes,
    mode:'history'
});
export default router;
