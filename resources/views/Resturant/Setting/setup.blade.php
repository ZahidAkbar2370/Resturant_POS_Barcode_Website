@extends('Resturant.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Resturant Setup</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <h4><i class="ti-settings"></i> General settings form</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Owner Name</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Resturant Name</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Contact Number</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Opening Time</label>
                                                        <input type="time" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Closing Time</label>
                                                        <input type="time" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Pagination Setting</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Logo</label>
                                                        <input type="file" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                {{-- <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone Verification</label>
                                                        <input type="checkbox" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone Verification</label>
                                                        <input type="checkbox" class="form-control" name="password">
                                                    </div>
                                                </div> --}}

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <select class="form-control">
                                                            <option>Select City</option>
                                                            <option>Islamabad</option>
                                                            <option>Layyah</option>
                                                            <option>Lahore</option>
                                                        </select>
                                                        {{-- <input type="number" class="form-control" name="password"> --}}
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control">
                                                            <option>Select City</option>
                                                            <option>Pakistan</option>
                                                            <option>USA</option>
                                                            <option>Japan</option>
                                                        </select>
                                                        {{-- <input type="number" class="form-control" name="password"> --}}
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success" value="Save">
                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>

@endsection
