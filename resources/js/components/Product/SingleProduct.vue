<template>
    <div>
        <div class="row" v-if="loading">
            loading...
        </div>
        <div class="row" v-else>
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                            <div class="product-slider">
                                <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item">
                                            <img class="d-block" src="assets/images/eco-slider-img-1.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block" src="assets/images/eco-slider-img-2.png" alt="Second slide">
                                        </div>
                                        <div class="carousel-item active">
                                            <img class="d-block" src="assets/images/eco-slider-img-3.png" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                            <div class="product-details">
                                <div class="border-bottom pb-3 mb-3">
                                    <h2 class="mb-3">T-Shirt Product Title</h2>
                                    <div class="product-rating d-inline-block float-right">
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                        <i class="fa fa-fw fa-star"></i>
                                    </div>
                                    <h3 class="mb-0 text-primary">$49.00</h3>
                                </div>
                                <div class="product-colors border-bottom">
                                    <h4>Select Colors</h4>
                                    <input type="radio" class="radio" id="radio-1" name="group">
                                    <label for="radio-1"></label>
                                    <input type="radio" class="radio" id="radio-2" name="group">
                                    <label for="radio-2"></label>
                                    <input type="radio" class="radio" id="radio-3" name="group">
                                    <label for="radio-3"></label>
                                </div>
                                <div class="product-size border-bottom">
                                    <h4>Size</h4>
                                    <div class="btn-group" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-outline-light">SM</button>
                                        <button type="button" class="btn btn-outline-light">L</button>
                                        <button type="button" class="btn btn-outline-light">XL</button>
                                        <button type="button" class="btn btn-outline-light">XXl</button>
                                    </div>
                                    <div class="product-qty">
                                        <h4>Quantity</h4>
                                        <div class="quantity">
                                            <input type="number" min="1" max="9" step="1" value="1"><div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <h4 class="mb-1">Descriptions</h4>
                                    <p>Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                                    <a href="#" class="btn btn-primary btn-block btn-lg">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
                            <div class="simple-card">
                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">Descriptions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="product-tab-2" aria-selected="false">Reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
                                        <p>Praesent et cursus quam. Etiam vulputate est et metus pellentesque iaculis. Suspendisse nec urna augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubiliaurae.</p>
                                        <p>Nam condimentum erat aliquet rutrum fringilla. Suspendisse potenti. Vestibulum placerat elementum sollicitudin. Aliquam consequat molestie tortor, et dignissim quam blandit nec. Donec tincidunt dui libero, ac convallis urna dapibus eu. Praesent volutpat mi eget diam efficitur, a mollis quam ultricies. Morbi eu turpis odio.</p>
                                        <ul class="list-unstyled arrow">
                                            <li>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Donec ut elit sodales, dignissim elit et, sollicitudin nulla.</li>
                                            <li>Donec at leo sed nisl vestibulum fermentum.
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="product-tab-2">
                                        <div class="review-block">
                                            <p class="review-text font-italic m-0">“Vestibulum cursus felis vel arcu convallis, viverra commodo felis bibendum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin non auctor est, sed lacinia velit. Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus.”</p>
                                            <div class="rating-star mb-4">
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                            </div>
                                            <span class="text-dark font-weight-bold">Virgina G. Lightfoot</span><small class="text-mute"> (Company name)</small>
                                        </div>
                                        <div class="review-block border-top mt-3 pt-3">
                                            <p class="review-text font-italic m-0">“Integer pretium laoreet mi ultrices tincidunt. Suspendisse eget risus nec sapien malesuada ullamcorper eu ac sapien. Maecenas nulla orci, varius ac tincidunt non, ornare a sem. Aliquam sed massa volutpat, aliquet nibh sit amet, tincidunt ex. Donec interdum pharetra dignissim.”</p>
                                            <div class="rating-star mb-4">
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                            </div>
                                            <span class="text-dark font-weight-bold">Ruby B. Matheny</span><small class="text-mute"> (Company name)</small>
                                        </div>
                                        <div class="review-block  border-top mt-3 pt-3">
                                            <p class="review-text font-italic m-0">“ Cras non rutrum neque. Sed lacinia ex elit, vel viverra nisl faucibus eu. Aenean faucibus neque vestibulum condimentum maximus. In id porttitor nisi. Quisque sit amet commodo arcu, cursus pharetra elit. Nam tincidunt lobortis augueat euismod ante sodales non. ”</p>
                                            <div class="rating-star mb-4">
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                                <i class="fa fa-fw fa-star"></i>
                                            </div>
                                            <span class="text-dark font-weight-bold">Gloria S. Castillo</span><small class="text-mute"> (Company name)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-10">
                            <h3> Related Products</h3>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="product-thumbnail">
                                <div class="product-img-head">
                                    <div class="product-img">
                                        <img src="assets/images/eco-product-img-1.png" alt="" class="img-fluid"></div>
                                    <div class="ribbons">New</div>
                                    <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-content-head">
                                        <h3 class="product-title">T-Shirt Product Title</h3>
                                        <div class="product-rating d-inline-block">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <div class="product-price">$49.00</div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                        <a href="#" class="btn btn-outline-light">Details</a>
                                        <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="product-thumbnail">
                                <div class="product-img-head">
                                    <div class="product-img">
                                        <img src="assets/images/eco-product-img-2.png" alt="" class="img-fluid"></div>
                                    <div class="ribbons bg-danger">Sold</div>
                                    <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-content-head">
                                        <h3 class="product-title">T-Shirt Product Title</h3>
                                        <div class="product-rating d-inline-block">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <div class="product-price">$49.00</div>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#" class="btn btn-primary">Add to Cart</a>
                                        <a href="#" class="btn btn-outline-light">Details</a>
                                        <a href="#" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="product-thumbnail">
                                <div class="product-img-head">
                                    <div class="product-img">
                                        <img src="assets/images/eco-product-img-3.png" alt="" class="img-fluid"></div>
                                    <div class="ribbons bg-brand">Offer</div>
                                    <div class=""><a href="#" class="product-wishlist-btn active"><i class="fas fa-heart"></i></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-content-head">
                                        <h3 class="product-title">T-Shirt Product Title</h3>
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
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "products",
        props:{
          id: Number,
        },
        data(){
            return {
                products:null,
                loading:true,
            }
        },
        created() {

            const request = axios.get(`/api/product/${this.id}`)
                .then( response=> {
                    this.products =response.data.data;
                    this.loading =false;
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
