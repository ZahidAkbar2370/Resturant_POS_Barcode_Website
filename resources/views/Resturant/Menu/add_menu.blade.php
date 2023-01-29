@extends('Resturant.layout')
@section('content')


<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                {{-- <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Add New</h1>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <h4>Create Menu</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('resturant/save-menu') }}" method="post">
                                            @csrf
                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Menu Name</label>
                                                        <input type="text" class="form-control" name="menu_name" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select class="form-control" name="menu_category" required>
                                                            <option value="">Select Menu Category</option>
                                                            @if(!empty($categories))
                                                                @foreach($categories as $key => $category)
                                                                    <option value="{{ $category->id }}">{{ $category->menu_category_name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sub Category</label>
                                                        <select class="form-control" name="menu_sub_category" required>
                                                            <option value="">Select Sub Category</option>
                                                            @if(!empty($sub_categories))
                                                                @foreach($sub_categories as $key => $sub_category)
                                                                    <option value="{{ $sub_category->id }}">{{ $sub_category->sub_category_name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Menu Price</label>
                                                        <input type="number" class="form-control" min="0" value="0" name="menu_price" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Menu Discount Price</label>
                                                        <input type="number" class="form-control" name="menu_discount_price" value="0" min="0">
                                                    </div>
                                                </div>

                                                {{-- <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Available Start Time</label>
                                                        <input type="time" class="form-control" name="menu_available_start_time" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Available End Time</label>
                                                        <input type="time" class="form-control" name="menu_availale_end_time" required>
                                                    </div>
                                                </div> --}}

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Image 1</label>
                                                        <input type="file" class="form-control" name="menu_image_1" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Image 2 <small>(Optional)</small></label>
                                                        <input type="file" class="form-control" name="menu_image_2">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Publication Status</label>
                                                        <select class="form-control" name="publication_status">
                                                            <option value="active">Active</option>
                                                            <option value="inactive">In-Active</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Short Description</label>
                                                        <textarea name="short_description" class="form-control" cols="30" rows="20" style="height: 120px"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4>Add Extra Fields</h4>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6 add_extra_fields">

                                                </div>
                                            </div>
                        
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input type="button" class="form-control add_form_field" value="+ Add More">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Create Menu">
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
    var max_fields = 10;
    var wrapper = $(".add_extra_fields");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="row"><div class="col-md-5"><div class="form-group"><label>Field Name</label><input type="text" class="form-control" name="menu_extra_field_name[]" required/></div></div><div class="col-md-5"><div class="form-group"><label>Field Value</label><input type="text" class="form-control" name="menu_extra_field_value[]" required/></div></div><a href="#" class="delete mt-5"><i class="ti ti-trash text-danger"></i>Delete</a></div>'); //add input box
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
    </script>
@endsection
