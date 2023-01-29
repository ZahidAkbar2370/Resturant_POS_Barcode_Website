@extends('Kitchen.layout')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello Zahid, <span>Welcome To Kitchen</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> --}}
                                <li class="breadcrumb-item active"><a href="#">Logout</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
               
                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-4">
                        <div class="card-title">
                            <h4>New/Pending Orders</h4>
                        </div>

                        @for($i=0; $i<20; $i++)

                        <div class="card">
                            <div class="card-body">
                                Table # 1
                            </div>
                            <div class="recent-comment m-t-15">
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading color-primary">Menu Name</h4>
                                        {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                        <p class="comment-date">Quantity</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading color-primary">Menu Name</h4>
                                        {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                        <p class="comment-date">Quantity</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="media-heading color-primary">Menu Name</h4>
                                        {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                        <p class="comment-date">Quantity</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="color-primary">Status:pending</h6>
                                        {{-- <p>Cras sit amet nibh libero, in gravida nulla.</p> --}}
                                        <a href="#" class="btn btn-success">Accept</a>
                                        {{-- <p class="comment-date">Quantity</p> --}}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                            @endfor
                        </div>
                    </div>

                        
                        <!-- /# card -->
                    </div>
                        <!-- /# card -->
                    </div>
                <!-- /# row -->



                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2022 © Online Layyah. - <a href="#">Code With Zahid</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection