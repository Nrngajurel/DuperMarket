<div {{ $attributes  }}>
    <div class="container pt-3">
        <div class="row">
            <div class="col-md-3">
                <h1 class="no-margin h3">
                    <a href="{{ route('home') }}" class="text-decoration-none no-margin">{{ config('app.name') }}</a>
                </h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur fuga illum perferendis quam! At culpa cupiditate dolorem explicabo quod ut.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis eius fugit in optio quis quisquam reprehenderit vel velit vero!
                </p>
            </div>
            <div class="col-md-3">
                <h1 class="no-margin h3">
                    <a href="{{ route('home') }}" class="text-decoration-none no-margin">Quick Links</a>
                </h1>
                <ul>
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Contact US</li>
                    <li>Support</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h1 class="no-margin h3">
                    <a href="{{ route('home') }}" class="text-decoration-none no-margin">Follow US</a>
                </h1>
                <div class="social-media">
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>

                </div>
            </div>
            <div class="col-md-3">
                <h1 class="no-margin h3">
                    <a href="{{ route('home') }}" class="text-decoration-none no-margin">{{ config('app.name') }}</a>
                </h1>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur fuga illum perferendis quam! At culpa cupiditate dolorem explicabo quod ut.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut blanditiis eius fugit in optio quis quisquam reprehenderit vel velit vero!
                </p>
            </div>

        </div>

    </div>
    <div class="container-fluid bg-dark text-white text-center py-2">
        <div class="container">

            <div class="row">
                <div class="col-md-12">copyright &copy; Alright reserved by {{ config('app.name') }}</div>
            </div>
        </div>
    </div>
</div>
