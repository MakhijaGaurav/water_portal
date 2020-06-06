@extends('layouts.base')
@section('page-content')
    <div class="container-fluid">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add New Family
                    </h3>
                </div>
            </div>
        </div>
        <form method="POST" action="/admin/family">
            @csrf
            <div class="family_details">
                <div class="row">
                    <div class="col-xl-5">

                        <div class="form-group">
                            <label for="">Family Surname</label>
                            <input type="text" class="form-control" name="surname">
                        </div>

                        <div class="form-group">
                            <label for="">Address Line 1</label>
                            <input type="text" class="form-control" name="address_line_1">
                        </div>

                        <div class="form-group">
                            <label for="">Address Line 2</label>
                            <input type="text" class="form-control" name="address_line_2">
                        </div>

                        <div class="form-group">
                            <label for="">Landmark</label>
                            <input type="text" class="form-control" name="landmark">
                        </div>

                        <div class="form-group">
                            <input type="button" class="btn btn-primary" value="Proceed" id="proceed">
                        </div>

                    </div>

                    <div class="col-xl-5">

                        <div class="form-group">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="city">
                        </div>

                        <div class="form-group">
                            <label for="">State</label>
                            <input type="text" class="form-control" name="state">
                        </div>

                        <div class="form-group">
                            <label for="">Zip</label>
                            <input type="text" class="form-control" name="zip">
                        </div>

                    </div>
                </div>
            </div>

            <div class="family_users" hidden>
                <div class="row">

                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="surname">
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="surname">
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="surname">
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
@section('custom-script')
    <script src="{{asset('/js/family/create.js')}}"></script>
@endsection
