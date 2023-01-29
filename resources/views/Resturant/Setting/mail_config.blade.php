@extends('Resturant.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Resturant Setting</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Registered Email</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email ?? "zahidjakhar2370@gmail.com" }}" name="user_email" required readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{-- <label></label> --}}
                                        <input type="submit" class="btn btn-primary mt-4 w-30" value="Verify">
                                    </div>
                                </div></div>
                            <div class="card">
                                <h4><i class="ti-email"></i> Smtp Mail Setup</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mailer Name</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Host Name</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Driver</label>
                                                        <input type="text" class="form-control" name="email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Port</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email Id</label>
                                                        <input type="email" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Encryption</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="text" class="form-control" name="password">
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
