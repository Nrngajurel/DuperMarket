<div {{ $attributes  }}>
    <div class="container-fluid pb-2 px-5">
        <div class="row pt-5">
            <div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
                <h1 class="no-margin h2">
                    <a href="{{ route('home') }}" class="text-decoration-none no-margin">{{ config('app.name') }}</a>
                </h1>
            </div>
            <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                <form class="d-flex">
                    <div>

                    <select class="custom-select border-0 border-radius-0 bg-gray" name="categories" id="categories">
                        <option value="">Select Categories</option>
                        <option value="">laptop</option>
                        <option value="">Desktop</option>
                        <option value="">Mobile</option>
                    </select>
                    </div>

                    <input  type="text" placeholder="Search Here..." class="form-control border-radius-0 w-75">
                    <input type="submit" value="Search" class="btn bg-warning border-radius-0">
                </form>
            </div>
            <div class="col">
                <ul class="list-inline d-flex justify-content-end">
                    <!-- Authentication Links -->
                    @guest
                        <li>
                            <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-sign-in-alt"></i>{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li >
                                <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-pen"></i>{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a class="nav-link" href="{{ route('account') }}">
                                <i class="fas fa-user"></i> Account
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endguest
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link" href="#" id="messagesDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="badge badge-warning badge-counter mb-3">2</span>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in w-25"
                                 aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Cart list
                                </h6>
                                hello product 10

                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12 d-flex">
                <form action="">
                    <select name="categories" id="" class="btn btn-outline-dark text-white text-uppercase">
                        <option value="">Categories</option>
                        <option value="">laptop</option>
                        <option value="">Desktop</option>
                        <option value="">Mobile</option>
                    </select>
                </form>

                <ul class="nav navbar clear-m-p">
                    <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li><a href="" class="nav-link">Track Order</a></li>
                    <li><a href="" class="nav-link">About Us</a></li>
                    <li><a href="" class="nav-link">Contact Us</a></li>
                </ul>
            </div>
            <div class="col">

            </div>
        </div>

    </div>
</div>
