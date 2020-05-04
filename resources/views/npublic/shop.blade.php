@extends('layouts.sidebarnpublic')

    @section('title', 'Shop')

    @section('main')


        @foreach($products as $product)

            {{ $product->name }} </br>

        @endforeach
{{ $products->links() }}



    @endsection
