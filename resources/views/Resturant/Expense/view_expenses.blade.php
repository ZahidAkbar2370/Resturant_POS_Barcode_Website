@extends('Resturant.layout')
@section('content')


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Expenses</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- <a href="{{ url('resturant/add-user') }}"><button class="btn btn-primary">Add New</button></a> --}}
                            <a href="#" data-toggle="modal" data-target="#add-category"
                                class="btn btn-lg btn-success">
                                <i class="fa fa-plus"></i> Create New
                            </a>
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        @if (Session::has('message'))
                                            <p class="alert alert-info">{{ Session::get('message') }}</p>
                                        @endif
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Tital</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($expenses))
                                                    @foreach ($expenses as $key => $expense)
                                                        <tr>
                                                            <td>{{ $expense->expense_title }}</td>
                                                            <td>{{ $expense->expense_date }}</td>
                                                            <td>{{ $expense->description }}</td>
                                                            <td>
                                                                {{-- <a href="edit-expense/{{ $expense->id }}"
                                                                    class="btn btn-info">Edit</a> --}}
                                                                    <a href="delete-expense/{{ $expense->id }}"
                                                                        class="btn btn-danger deleteConfirm">Delete</a>
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




    <!-- Modal Add Category -->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                    <h4 class="modal-title">
                        <strong>Add a Expense </strong>
                    </h4>
                </div>
                <div class="modal-body">
                    <form action="{{ URL::to('resturant/save-expense') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Title</label>
                                <input class="form-control form-white" placeholder="Enter title" type="text"
                                    name="expense_title" required />
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Date</label>
                                <input class="form-control form-white" placeholder="Enter title" type="date"
                                    name="expense_date" required />
                            </div>

                            <div class="col-md-6">
                                <label class="control-label">Description</label>
                                <input class="form-control form-white" placeholder="Enter Description" type="text"
                                    name="description" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <!-- END MODAL -->


@endsection
