<template>
    <div>
        <div class="product-sidebar">
            <div class="product-sidebar-widget">
                <h4 class="mb-0">E-Commerce Filter</h4>
            </div>
            <div class="product-sidebar-widget">
                <h4 class="product-sidebar-widget-title">Category</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cat-1">
                    <label class="custom-control-label" for="cat-1">Categories #1</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cat-2">
                    <label class="custom-control-label" for="cat-2">Categories #2</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cat-3">
                    <label class="custom-control-label" for="cat-3">Categories #3</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cat-4">
                    <label class="custom-control-label" for="cat-4">Categories #4</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cat-5">
                    <label class="custom-control-label" for="cat-5">Categories #5</label>
                </div>
            </div>
            <div class="product-sidebar-widget">
                <h4 class="product-sidebar-widget-title">Size</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="size-1">
                    <label class="custom-control-label" for="size-1">Small</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="size-2">
                    <label class="custom-control-label" for="size-2">Medium</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="size-3">
                    <label class="custom-control-label" for="size-3">Large</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="size-4">
                    <label class="custom-control-label" for="size-4">Extra Large</label>
                </div>
            </div>
            <div class="product-sidebar-widget">
                <h4 class="product-sidebar-widget-title">Brand</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brand-1">
                    <label class="custom-control-label" for="brand-1">Brand Name #1</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brand-2">
                    <label class="custom-control-label" for="brand-2">Brand Name #2</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brand-3">
                    <label class="custom-control-label" for="brand-3">Brand Name #3</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brand-4">
                    <label class="custom-control-label" for="brand-4">Brand Name #4</label>
                </div>
            </div>
            <div class="product-sidebar-widget">
                <h4 class="product-sidebar-widget-title">Color</h4>
                <div class="custom-control custom-radio custom-color-blue ">
                    <input type="radio" id="color-1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="color-1">Blue</label>
                </div>
                <div class="custom-control custom-radio custom-color-red ">
                    <input type="radio" id="color-2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="color-2">Red</label>
                </div>
                <div class="custom-control custom-radio custom-color-yellow ">
                    <input type="radio" id="color-3" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="color-3">Yellow</label>
                </div>
                <div class="custom-control custom-radio custom-color-black ">
                    <input type="radio" id="color-4" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="color-4">Black</label>
                </div>
            </div>
            <div class="product-sidebar-widget">
                <h4 class="product-sidebar-widget-title">Price</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-1">
                    <label class="custom-control-label" for="price-1">$$</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-2">
                    <label class="custom-control-label" for="price-2">$$$</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="price-3">
                    <label class="custom-control-label" for="price-3">$$$$</label>
                </div>
            </div>
            <div class="product-sidebar-widget">
                <a href="#" class="btn btn-outline-light">Reset Filter</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ProductSidebar"
    }
</script>

<style scoped>

</style>
