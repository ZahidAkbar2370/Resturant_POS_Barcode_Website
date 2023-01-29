@extends('Resturant.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <h4>Edit Category</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('resturant/update-category') }}" method="post">
                                            @csrf
                                            <div class="row category_field">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <input type="hidden" name="category_id" value="{{ $menu_category->id }}">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" name="menu_category_name"  value="{{ $menu_category->menu_category_name }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Update Category">
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
