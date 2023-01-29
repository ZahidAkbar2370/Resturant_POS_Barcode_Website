@extends('Resturant.layout')
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Sub Categories</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ url('resturant/add-sub-category') }}"><button class="btn btn-primary">Add New</button></a>
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
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($menu_sub_categories))
                                                    @foreach ($menu_sub_categories as $key => $menu_sub_category)
                                                        <tr>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $menu_sub_category->menu_category->menu_category_name }}</td>
                                                            <td>{{ $menu_sub_category->sub_category_name }}</td>
                                                            <td>
                                                                {{-- <a href="edit-sub-category/{{ $menu_sub_category->id }}"
                                                                    class="btn btn-info"><i class="ti ti-pencil-alt"></i></a> --}}
                                                                    <a href="delete-sub-category/{{ $menu_sub_category->id }}"
                                                                        class="btn btn-danger"><i class="ti ti-trash"></i></a>
                                                            </td>
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
