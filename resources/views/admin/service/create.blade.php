@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Service</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Service</li>
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
                                <h3 class="card-title">Add Service</h3>
                            </div>
                            <form id="indexPageForm" method="POST" action="{{ route('admin.service.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Servicec Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter key Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="valucover_imagee">Value</label>
                                        <input type="file" name="cover_image" class="form-control" id="cover_image"
                                            placeholder="Enter value Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Servicec Name</label>
                                        <input type="text" name="description" class="form-control" id="description"
                                            placeholder="Enter service description">
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
    <script>
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#indexPageForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    cover_image: {
                        required: true,
                    },
                    description: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Please enter service name",
                    },
                    cover_image: {
                        required: "Please select cover image",
                    },
                    description: {
                        required: "Please enter service description",
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
