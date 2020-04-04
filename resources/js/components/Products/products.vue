<template>
    <div class="row" v-if="loading">
        loading...
    </div>
    <div class="row" v-else>
        <Product v-for="product in products"
                 v-bind="product" :key="product.id"
        ></Product>


    </div>
</template>

<script>
    import Product from "./Product";

    export default {
        name: "products",
        components: {
            Product,
        },
        data(){
            return {
                products:null,
                loading:true,
            }
        },
        created() {
            const request = axios.get('/products?take=10')
                .then( response=> {
                    this.products =response.data;
                    this.loading =false;
                });
        }
    }
</script>

<style scoped>

</style>
