@extends('layouts.base')
@section('page-content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Users</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td>Sr. No</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Phone</td>
                        <td>View</td>
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    </thead>
                </table>
            </div>

            </div>
        </div>
@endsection
