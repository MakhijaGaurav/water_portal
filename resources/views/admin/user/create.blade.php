@extends('layouts.base')
@section('page-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5">
                <div class="kt-portlet">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Add New User
                            </h3>
                        </div>
                    </div>

                    <form action="/admin/user" method="POST">
                        @csrf

                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option value="" selected disabled>SELECT FAMILY</option>
                                @foreach($families as $family)
                                    <option value="{{$family->id}}">{{ $family->surname }}
                                        ( {{ $family->address_first_line }} )
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone</label>
                            <input type="number" class="form-control" id="exampleInputPassword1"
                                   placeholder="Mobile Number">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                   placeholder="Enter name">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Add User">
                        </div>
                    </form>
                </div>
            </div>
@endsection
