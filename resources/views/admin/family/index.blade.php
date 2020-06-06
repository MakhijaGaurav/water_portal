@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" href="{{asset('/assets/vendor/datatables/datatables.css')}}">
@endsection
@section('page-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Family</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-bordered" id="family-table">
                    <thead>
                    <tr>
                        <td>Sr. No</td>
                        <td>Surname</td>
                        <td>Address</td>
                        <td>Total Members</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($families as $family)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$family->surname}}</td>
                            <td>{{$family->address_first_line}} {{$family->address_city}}</td>
                            <td>{{$family->total_members}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('/assets/vendor/datatables/datatables.js')}}"></script>
    <script src="{{asset('/js/family/index.js')}}"></script>
@endsection
