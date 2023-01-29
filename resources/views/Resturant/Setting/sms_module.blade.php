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
                {{-- <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <h4><i class="ti-sms"></i> Twilio SMS</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="radio" name="twilio_sms"> Active <br>
                                                        <input type="radio" name="twilio_sms"> Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sid</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Messaging Service Sid</label>
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
                                                        <label>Token</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Otp template</label>
                                                        <input type="email" class="form-control" name="password">
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
                </section> --}}

                {{-- end row --}}


                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card">
                                <h4><i class="ti-sms"></i> Twilio SMS</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="twilio_sms">  Active <br><br>
                                                        <input type="radio" name="twilio_sms">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sid</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Messaging Service Sid</label>
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
                                                        <label>Token</label>
                                                        <input type="number" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>From</label>
                                                        <input type="text" class="form-control" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Otp template</label>
                                                        <input type="email" class="form-control" name="password">
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

                        <div class="col-lg-6">
                            <div class="card">
                                <h4><i class="ti-sms"></i> Branded SMS PK</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="branded_sms_pk">  Active <br><br>
                                                        <input type="radio" name="branded_sms_pk">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Key</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Secrit</label>
                                                        <input type="text" class="form-control" name="user_name">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mask</label>
                                                        <input type="text" class="form-control" name="email">
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
