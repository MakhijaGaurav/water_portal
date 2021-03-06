@extends('layouts.base')

@section('custom-css')
    <link rel="stylesheet" href="{{asset('/assets/vendor/datatables/datatables.css')}}">
@endsection
@section('page-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Complains</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-bordered" id="users-table">
                    <thead>
                    <tr>
                        <td>Sr. No</td>
                        <td>Name</td>
                        <td>Message</td>
                        <td>Images</td>
                        <td>Date</td>
                        <td>Status</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($complains as $complain)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$complain->complainant}}</td>
                            <td>{{$complain->msg}}</td>
                            <td><a href="#" class="btn btn-primary">view</a></td>
                            <td>{{$complain->created_at}}</td>
                            @if($complain->status=='0')
                                <td><button class="btn btn-danger">Resolve Now!</button></td>
                            @else
                                <td><button class="btn btn-success">Solved</button></td>
                            @endif
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
