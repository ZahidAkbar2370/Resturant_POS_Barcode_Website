@extends('Resturant.layout')
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Orders</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <a href="{{ url('resturant/add-user') }}"><button class="btn btn-primary">Add New</button></a> --}}
                            {{-- <a href="#" data-toggle="modal" data-target="#add-category"
                                class="btn btn-lg btn-success">
                                <i class="fa fa-plus"></i> Create New
                            </a> --}}
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        @if (Session::has('message'))
                                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                                        @endif
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Category Name</th>
                                                    <th>Sub Category Name</th>
                                                    <th>Menu Name</th>
                                                    <th>Images</th>
                                                    <th>Price</th>
                                                    <th>Publication Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($menus))
                                                    @foreach ($menus as $key => $menu)
                                                        <tr>
                                                            <td>{{ $key }}</td>
                                                            <td>{{ $menu->menu_category_id  }}</td>
                                                            <td>{{ $menu->menu_sub_category_id  }}</td>
                                                            <td>{{ $menu->menu_name }}</td>
                                                            <td><img src="{{ $menu->menu_image1 }}" style="width: 50px;height: 50px;"></td>
                                                            <td>{{ $menu->menu_price }}</td>
                                                            <td>{{ $menu->publication_status }}</td>    
                                                            <td>
                                                                <a href="edit-menu/{{ $menu->id }}"
                                                                    class="btn btn-info">Edit</a>
                                                                    <a href="delete-menu/{{ $menu->id }}"
                                                                        class="btn btn-danger deleteConfirm">Delete</a>
                                                            </td>

                                                            {{-- @if ($user->status == '1')
                                                                <td>Active</td>
                                                            @else
                                                                <td>In-Active</td>
                                                            @endif

                                                            @if ($user->status == '1')
                                                                <td><a href="update-user-status/{{ $user->id }}/0"
                                                                        class="btn btn-danger">InActive</a></td>
                                                            @else
                                                                <td><a href="update-user-status/{{ $user->id }}/1"
                                                                        class="btn btn-success">Active</a></td>
                                                            @endif --}}
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </section>
            </div>
        </div>
    </div>
@endsection
