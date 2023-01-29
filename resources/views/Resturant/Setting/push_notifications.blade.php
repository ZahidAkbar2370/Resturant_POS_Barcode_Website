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
                
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="card">
                                <h4><i class="ti-sms"></i> Order Pending Message</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_pending_message">  Active <br><br>
                                                        <input type="radio" name="order_pending_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
                                <h4><i class="ti-sms"></i>Order Confirm Message</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_confirm_message">  Active <br><br>
                                                        <input type="radio" name="order_confirm_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
                                <h4><i class="ti-sms"></i>Order Processing Message</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_processing_message">  Active <br><br>
                                                        <input type="radio" name="order_processing_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
                                <h4><i class="ti-sms"></i>Order Out For Delivery</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_out_of_delivery_message">  Active <br><br>
                                                        <input type="radio" name="order_out_of_delivery_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
                                <h4><i class="ti-sms"></i>Order Delivered Message</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_out_of_delivery_message">  Active <br><br>
                                                        <input type="radio" name="order_out_of_delivery_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
                                <h4><i class="ti-sms"></i>Deliverman Assign Message</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form>
                                            <div class="row">

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="radio" name="order_out_of_delivery_message">  Active <br><br>
                                                        <input type="radio" name="order_out_of_delivery_message">  Inactive
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <input type="text" class="form-control" name="user_name">
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
