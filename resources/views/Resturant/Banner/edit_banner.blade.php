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
                                <h4>Edit Banner</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('resturant/update-banner') }}" method="post">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="hidden" name="banner_id" value="{{ $editBanner->id }}">
                                                        <input type="text" class="form-control" value="{{ $editBanner->banner_title }}" name="banner_title" required>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Banner Image <small>(select image to update it otherwise it will same)</small></label>
                                                        <input type="file" class="form-control" name="banner_image">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Expire Date <small>(select date to update it otherwise it will same)</small></label>
                                                        <input type="date" class="form-control" name="expire_date">
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-success" value="Update">
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
