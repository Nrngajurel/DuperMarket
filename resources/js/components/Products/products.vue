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
        props:{
          take: Number,
        },
        data(){
            return {
                products:null,
                loading:true,
            }
        },
        created() {

            const request = axios.get(`/api/products?per_page=${this.take}`)
                .then( response=> {
                    this.products =response.data.data;
                    this.loading =false;
                    console.log(this.products);
                }) .catch(function (error) {
                    console.log(error);
                }).finally(function () {
                    // always executed
                });

        }
    }
</script>

<style scoped>

</style>
