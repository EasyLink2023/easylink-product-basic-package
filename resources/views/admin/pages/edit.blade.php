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
                        <h1 class="m-0">Edit {{ $page->page_name }} Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit {{ $page->page_name }} Page</li>
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
                                <h3 class="card-title">Edit {{ $page->page_name }} Page</h3>
                            </div>
                            <form id="menuForm" method="POST" action="{{ route('admin.page.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="page_name">Menu Name</label>
                                        <input type="text" name="page_name" class="form-control" id="page_name"
                                            placeholder="Enter Page Name" value="{{ $page->page_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sec_1_text">Sec 1 Text</label>
                                        <input type="text" name="sec_1_text" class="form-control" id="sec_1_text"
                                            placeholder="Enter sec_1_text" value="{{ $page->sec_1_text }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="sec_1_description">Sec 1 Descriptions</label>
                                        <input type="text" name="sec_1_description" class="form-control"
                                            id="sec_1_description" placeholder="Enter sec_1_description"
                                            value="{{ $page->sec_1_description }}">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('asset/pages') . '/' . $page->cover_image }}"
                                            alt="{{ $page->cover_image }}" class="img-fluid"
                                            onerror="this.src='{{ asset('frontend/default-images/default-image-1920x560.jpg') }}'" />
                                    </div>
                                    <label for="cover_image">Cover Image</label>
                                    <input type="file" name="cover_image" class="form-control" id="cover_image"
                                        placeholder="Enter cover_image" value="{{ $page->cover_image }}">
                                </div>
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea id="summernote" name="content" class="form-control">{{ $page->content }}</textarea>
                                </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="hidden" value="{{ $page->id }}" name="id">
                        <button type="submit" class="btn btn-primary">Update</button>
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
            $('#summernote').summernote()
        })
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
                    page_name: {
                        required: true,
                    },
                    content: {
                        required: true,
                    },
                    content: {
                        required: true,
                    },
                    sec_1_description: {
                        required: true,
                    },
                    sec_1_text: {
                        required: true,
                    },
                },
                messages: {
                    page_name: {
                        required: "Please enter page name",
                    },
                    content: {
                        required: "Please enter content",
                    },
                    sec_1_description: {
                        required: "Please enter section 1 description",
                    },
                    sec_1_text: {
                        required: "Please enter section 1 text",
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
