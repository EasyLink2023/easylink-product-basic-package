@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Page Seo Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Page Seo Data</li>
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
                                <h3 class="card-title">Edit Page Seo Data</h3>
                            </div>
                            <form id="menuForm" method="POST" action="{{ route('admin.seo.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="page_url">Page Url</label>
                                        <input type="text" name="page_url" class="form-control" id="page_url"
                                            placeholder="Enter Page Url" value="{{ $pageData->page_url ?? $url }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            placeholder="Enter title" value="{{ $pageData->title ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <input type="text" name="description" class="form-control" id="description"
                                            placeholder="Enter description" value="{{ $pageData->description ?? '' }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="keyword">Keyword</label>
                                        <input type="text" name="keyword" class="form-control" id="keyword"
                                            placeholder="Enter Keyword" value="{{ $pageData->keyword ?? '' }}">
                                    </div>

                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" value="{{ $pageData->id ?? '' }}" name="id">
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
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#menuForm').validate({
                rules: {
                    page_url: {
                        required: true,
                    },
                    title: {
                        required: true,
                    },
                    description: {
                        required: true
                    },
                    keyword: {
                        required: true,
                    },
                },
                messages: {
                    page_url: {
                        required: "Please enter page url",
                    },
                    title: {
                        required: "Please enter title",
                    },
                    description: {
                        required: "Please enter description",
                    },
                    keyword: {
                        required: "Please enter Keyword",
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
