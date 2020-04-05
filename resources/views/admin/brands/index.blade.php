@extends('layouts.admindefault')
@section('title', 'All Brands')
@section('header_scripts')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    @endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <x-admin.show-table-component :dataList="$data"/>

    </div>
@endsection

@section('footer_scripts')
{{--    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>--}}
{{--    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>--}}

@endsection
