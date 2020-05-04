@extends('layouts.admindefault')
@section('title', 'All Category')
@section('header_scripts')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <x-admin.add-new/>
        <x-admin.show-table-component :dataList="$data"/>

    </div>
@endsection

@section('footer_scripts')

@endsection
