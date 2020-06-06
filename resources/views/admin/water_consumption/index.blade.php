@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" href="{{asset('/assets/vendor/datatables/datatables.css')}}">
@endsection
@section('page-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Water Consumption</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <td>Sr. No</td>
                        <td>Family</td>
                        <td>RFID</td>
                        <td>Address</td>
                        <td>Consumption</td>
                        <td>Unit</td>
                        <td>Type</td>
                        <td>Start Time</td>
                        <td>End Time</td>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($consumptions as $consumption)
                        <tr>
                            <td>{{$count++}}</td>
                            <td>{{$consumption->surname}}</td>
                            <td>{{$consumption->tag_number}}</td>
                            <td>{{$consumption->address_first_line}}</td>
                            <td>{{$consumption->litres_consumed}}</td>
                            <td>{{$consumption->unit_no}}</td>
                            <td>{{$consumption->unit_type}}</td>
                            <td>{{$consumption->start_time}}</td>
                            <td>{{$consumption->end_time}}</td>
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
    <script src="{{asset('/js/user/index.js')}}"></script>
@endsection
