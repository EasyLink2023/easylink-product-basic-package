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
                        <h1 class="m-0">Add Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Blog</li>
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
                                <h3 class="card-title">Add New Blog</h3>
                            </div>
                            <form id="menuForm" method="POST" action="{{ route('admin.blog.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" name="meta_title" class="form-control" id="meta_title"
                                            placeholder="Enter Meta Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_description">Meta Description</label>
                                        <input type="text" name="meta_description" class="form-control"
                                            id="meta_description" placeholder="Enter Meta Description">
                                    </div>
                                    <div class="form-group">
                                        <label for="meta_keyword">Meta Keyword</label>
                                        <input type="text" name="meta_keyword" class="form-control" id="meta_keyword"
                                            placeholder="Enter Meta Keyword">
                                    </div>
                                    <div class="form-group">
                                        <label for="cover_image">Cover Image</label>
                                        <input type="file" name="cover_image" class="form-control" id="cover_image"
                                            placeholder="Enter Select Cover Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Tags</label>
                                        <input type="text" name="tags" class="form-control" id="tags"
                                            placeholder="Enter Select Tags">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Enter Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea id="summernote" name="content" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="created_by">Created By</label>
                                        <input type="text" name="created_by" class="form-control" id="created_by"
                                            value="Admin" placeholder="Enter created by">
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
                    meta_title: {
                        required: true,
                    },
                    meta_description: {
                        required: true,
                    },
                    meta_keyword: {
                        required: true,
                    },
                    cover_image: {
                        required: true,
                    },
                    tags: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    content: {
                        required: true,
                    },
                    created_by: {
                        required: true,
                    },
                },
                messages: {
                    meta_title: {
                        required: "Please enter meta title",
                    },
                    meta_description: {
                        required: "Please enter meta description",
                    },
                    meta_keyword: {
                        required: "Please enter meta keyword",
                    },
                    cover_image: {
                        required: "Please select cover image",
                    },
                    tags: {
                        required: "Please enter tags",
                    },
                    title: {
                        required: "Please enter title",
                    },
                    content: {
                        required: "Please enter content",
                    },
                    created_by: {
                        required: "Please enter created by",
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
