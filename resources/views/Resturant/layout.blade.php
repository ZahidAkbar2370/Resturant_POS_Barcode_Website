<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resturant App</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    {{-- <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff"> --}}
    <!-- Retina iPad Touch Icon-->
    {{-- <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff"> --}}
    <!-- Retina iPhone Touch Icon-->
    {{-- <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff"> --}}
    <!-- Standard iPad Touch Icon-->
    {{-- <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff"> --}}
    <!-- Standard iPhone Touch Icon-->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff"> --}}
    <!-- Styles -->
    <link href="{{asset('assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{ url('/') }}">
                            <!-- <img src="assets/images/logo.png" alt="" /> -->
                            <span>Resturant App</span></a>
                    </div>
                    <li class="label">Main</li>
                    {{-- <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="badge badge-primary">2</span> <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Add User</a></li>
                            <li><a href="#">View Users</a></li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a href="{{'shop-panel'}}"><i class="ti-home"></i> Dashboard </a>
                    </li> --}}
                    <li><a href="{{ url('resturant/dashboard') }}"><i class="ti-dashboard"></i>Dashboard</a></li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i>Users</a>
                        <ul>
                            <li><a href="{{ url('resturant/add-user') }}">Add</a></li>
                            <li><a href="{{ url("resturant/users") }}">List</a></li>
                        </ul>
                    </li>

                    <li class="label">Product Section</li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-image"></i>Banner</a>
                        <ul>
                            <li><a href="{{ url('resturant/add-banner') }}">Add</a></li>
                            <li><a href="{{ url('resturant/banners') }}">List</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-dribbble"></i>Menu Category</a>
                        <ul>
                            <li><a href="{{ url('resturant/categories') }}">Category</a></li>
                            <li><a href="{{ url('resturant/sub-categories') }}">Sub Category</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-dropbox"></i>Menu</a>
                        <ul>
                            <li><a href="{{ url('resturant/add-menu') }}">Add New</a></li>
                            <li><a href="{{ url('resturant/menus') }}">List</a></li>
                            <li><a href="{{ url('resturant/export-menu') }}">Bulk Export</a></li>
                        </ul>
                    </li>

                    <li class="label">ORDER SECTION</li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-shopping-cart"></i>Orders</a>
                        <ul>
                            <li><a href="{{ url('resturant/orders') }}">All</a></li>
                            <li><a href="{{ url('resturant/orders?status=pending') }}">Pending</a></li>
                            <li><a href="{{ url('resturant/orders?status=confirm') }}">Confirm</a></li>
                            <li><a href="{{ url('resturant/orders?status=processing') }}">Processing</a></li>
                            <li><a href="{{ url('resturant/orders?status=out_of_delivery') }}">Out for Delivery</a></li>
                            <li><a href="{{ url('resturant/orders?status=delivered') }}">Delivered</a></li>
                            <li><a href="{{ url('resturant/orders?status=pending') }}">Returned</a></li>
                            <li><a href="{{ url('resturant/orders?status=returned') }}">Failed</a></li>
                            <li><a href="{{ url('resturant/orders?status=canceled') }}">Canceled</a></li>
                            <li><a href="{{ url('resturant/orders?status=scheduled') }}">Scheduled</a></li>
                        </ul>
                    </li>
                    {{-- <li><a href="#"><i class="ti-file"></i>Payments</a></li> --}}

                    <li class="label">BUSINESS SECTION</li>

                    <li><a href="{{ url('resturant/product-reviews') }}"><i class="ti-star"></i>Product Reviews</a></li>
                    <li><a href="{{ url('resturant/announcement') }}"><i class="ti-announcement"></i>Send Notification</a></li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-settings"></i>Settings</a>
                        <ul>
                            <li><a href="{{ url('resturant/setup') }}">Resturant Setup</a></li>
                            <li><a href="{{ url('resturant/location-setup') }}">Location Setup</a></li>
                            <li><a href="{{ url('resturant/mail-config') }}">Mail Setup</a></li>
                            <li><a href="{{ url('resturant/sms-module') }}">SMS Module</a></li>
                            <li><a href="{{ url('resturant/payment-methods') }}">Payment Method</a></li>
                            <li><a href="{{ url('resturant/push-notifications') }}">Push Notification</a></li>
                            <li><a href="{{ url('resturant/term-and-conditions') }}">Term and Conditions</a></li>
                            <li><a href="{{ url('resturant/about-us') }}">About us</a></li>
                            <li><a href="{{ url('resturant/map-api') }}">Map Api Setting</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('resturant/expenses') }}"><i class="ti-bar-chart"></i>Expenses</a></li>

                    <li class="label">DELIVERYMAN SECTION</li>
                    
                    <li><a href="#"><i class="ti-truck"></i>Register</a></li>
                    <li><a href="#"><i class="ti-list"></i>List</a></li>
                    <li><a href="#"><i class="ti-comment-alt"></i>Change Password</a></li>

                    <li class="label">REPORT SECTION</li>

                    <li><a class="sidebar-sub-toggle"><i class="ti-receipt"></i>Reports</a>
                        <ul>
                            <li><a href="{{ url('resturant/earning-report') }}">Earning Report</a></li>
                            <li><a href="{{ url('resturant/order-report') }}">Order Report</a></li>
                            <li><a href="{{ url('resturant/driver-report') }}">Driver Report</a></li>
                            <li><a href="{{ url('resturant/product-report') }}">Product Report</a></li>
                            <li><a href="{{ url('resturant/sale-report') }}">Sale Report</a></li>
                            <li><a href="{{ url('resturant/expense-report') }}">Expense Report</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="#"><i class="ti-unlock"></i>Change Password</a></li>

                   <li><a><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>

{{-- ////////////////////////////////////////////////////////////////////////////// --}}

                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

{{-- //////////////////////////////////////////////////////////////////////////////// --}}

                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="#">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                {{-- ///////////////////////////////////////////////////// --}}

                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Change Password</span>
                                                </a>
                                            </li>

                                            <li>

                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(".deleteConfirm").click(function(){
            if(confirm("Are you sure you want to delete this?")){
            }
            else{
                return false;
            }
        });
        </script>

    <!-- jquery vendor -->
    <script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{asset('assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('assets/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->

    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- bootstrap -->

    <script src="{{asset('assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/calendar-2/pignose.init.js')}}"></script>


    {{-- datatable --}}

    <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/datatables-init.js')}}"></script>

    <script src="{{asset('assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>
    <script src="{{asset('assets/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <!-- scripit init-->
    <script src="{{asset('assets/js/dashboard2.js')}}"></script>
</body>

</html>
