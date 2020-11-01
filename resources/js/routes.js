import VueRouter from "vue-router";
import SingleProduct from './components/Product/SingleProduct';
import HomeComponent from "./components/HomeComponent";

const routes = [
    {
        path: '/',
        component: HomeComponent,
        name: "Home",
    },
    {
        path: '/Product/:id',
        component: SingleProduct,
        name: "product",
    },
];
const router = new VueRouter({
   routes,
    mode:'history'
});
export default router;
