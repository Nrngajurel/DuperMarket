<template>
    <div class="col-md-4 mb-2 d-flex align-items-stretch w-100">
        <div class="card">
            <div class="card-body">
                <router-link :to="{ name: 'product', params: { id } }"> <h5 class="card-title">{{ name }}</h5> </router-link>

                <p class="card-text"> {{ description }} </p>
                <span class="round"><b>Rs.</b> <s>{{ max_price }}</s>  {{min_price}}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: {
            "name": String,
            "description":String,
            "price": String,
            "id":Number,
            "max_price":String,
            "min_price":String,
            "onsale":Number,
            "slug":String,
            "stock":Number,
            "stock_qty":String,
        },
    }
</script>

<style scoped>

</style>
