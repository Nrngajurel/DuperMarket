<template>
    <div class="row">
        <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
            <Products :take="9"/>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
            <ProductSidebar />
        </div>

    </div>
</template>

<script>
    // import Product from "./Products/Product";
    import Products from "./Products/products";
    import ProductSidebar from "./Sidebar/ProductSidebar";
    export default {
        name: "HomeComponent",
        components:{
            Products,
            // Product,
            ProductSidebar
        }
    }
</script>

<style scoped>

</style>
