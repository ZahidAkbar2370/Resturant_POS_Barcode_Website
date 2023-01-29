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
                                <h4>Create Category</h4>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form action="{{ URL::to('resturant/save-category') }}" method="post">
                                            @csrf
                                            <div class="row category_field">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <input type="text" class="form-control" name="category_name[]" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        {{-- <label>Category Name</label> --}}
                                                        <input type="button" class="form-control add_form_field" value="+ Add More">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-6">

                                                    <div class="form-group">
                                                        <input type="submit" class="btn btn-primary" value="Create">
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
    var wrapper = $(".category_field");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="col-lg-6"><div class="form-group"><label>Category Name</label><input type="text" class="form-control" name="category_name[]" required></div><a href="#" class="delete"><i class="ti ti-trash text-danger"></i>Delete</a></div>'); //add input box
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
