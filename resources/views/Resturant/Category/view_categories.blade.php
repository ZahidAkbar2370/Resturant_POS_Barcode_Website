@extends('Resturant.layout')
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Categories</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        
                     
                        <div class="col-lg-12">
                            <a href="{{ url('resturant/add-category') }}"><button class="btn btn-primary">Add New</button></a>
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
                                                    {{-- <th>Thumbnail</th> --}}
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($menu_categories))
                                                    @foreach ($menu_categories as $key => $menu_category)
                                                        <tr>
                                                            <td>{{ $key+1 }}</td>
                                                            <td>{{ $menu_category->menu_category_name }}</td>
                                                            {{-- <td>{{ $menu_category->email }}</td> --}}
                                                            {{-- <td>{{ $menu_category->role }}</td> --}}
                                                            <td>
                                                                <a href="edit-category/{{ $menu_category->id }}"
                                                                    class="btn btn-info"><i class="ti ti-pencil-alt"></i></a>
                                                                    <a href="delete-category/{{ $menu_category->id }}"
                                                                        class="btn btn-danger deleteConfirm"><i class="ti ti-trash"></i></a>
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
