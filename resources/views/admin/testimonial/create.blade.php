@extends('admin.layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
@endpush
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Testimonial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Testimonial</h3>
                            </div>
                            <form id="menuForm" method="POST" action="{{ route('admin.testimonial.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Meta Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter name">
                                    </div>
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input type="text" name="designation" class="form-control" id="designation"
                                            placeholder="Enter designation">
                                    </div>
                                    <div class="form-group">
                                        <label for="rating">Rating</label>
                                        <select name="rating" id="rating" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="profile_image">Cover Image</label>
                                        <input type="file" name="profile_image" class="form-control" id="cover_image"
                                            placeholder="Enter select profile image">
                                    </div>
                                    <div class="form-group">
                                        <label for="feedback">Feedback</label>
                                        <input type="text" name="feedback" class="form-control" id="feedback"
                                            placeholder="Enter feedback">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
@push('js')
    <script src="{{ asset('adminlte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('#summernote').summernote();
        });
    </script>
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#menuForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    designation: {
                        required: true,
                    },
                    rating: {
                        required: true,
                    },
                    profile_image: {
                        required: true,
                    },
                    feedback: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Please enter name",
                    },
                    designation: {
                        required: "Please enter designation",
                    },
                    rating: {
                        required: "Please enter rating",
                    },
                    profile_image: {
                        required: "Please select profile image",
                    },
                    feedback: {
                        required: "Please enter feedback",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endpush
