@extends('layouts.default')

@section('title', 'Home')


@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Feature Items</h1>
                <form action="">
                    <select name="brands" id="" class="btn btn-outline-dark text-uppercase">
                        <option value="">Brands</option>
                        <option value="">Dell</option>
                        <option value="">Apple</option>
                        <option value="">Mobile</option>
                    </select>
                </form>
                <p class="text-justify">
                </p>
                <product-component :take="10" :itemPerRow="10"></product-component>
            </div>
        </div>
    </div>

@endsection
