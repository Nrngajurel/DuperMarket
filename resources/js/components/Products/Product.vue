<template>
    <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="product-thumbnail">
            <div class="product-img-head">
                <div class="product-img">
                    <img src="assets/images/eco-product-img-3.png" alt="" class="img-fluid"></div>
                <div class="ribbons bg-brand"></div>
                <div class="ribbons-text">Offer</div>
                <div class=""><a href="#" class="product-wishlist-btn active"><i class="fas fa-heart"></i></a></div>
            </div>
            <div class="product-content">
                <div class="product-content-head">
                    <router-link :to="{ name: 'product', params: { id } }"> <h3 class="product-title">{{ name }}</h3> </router-link>
                    <div class="product-rating d-inline-block">
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                    </div>
                    <div class="product-price">$49.00
                        <del class="product-del">$69.00</del>
                    </div>
                </div>
                <div class="product-btn">
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                    <a href="#" class="btn btn-outline-light">Details</a>
                    <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                </div>
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
