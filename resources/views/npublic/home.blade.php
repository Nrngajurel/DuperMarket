@extends('layouts.default')

@section('title', 'Home')


@section('main')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
{{--                <home-component/>--}}

                <router-view></router-view>
            </div>
        </div>
    </div>

@endsection
