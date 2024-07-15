@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Setting</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Setting</li>
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
                                <h3 class="card-title">Add New Setting</h3>
                            </div>
                            <form id="settingForm" method="POST" action="{{ route('admin.setting.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="key_name">Key Name</label>
                                        <input type="text" name="key_name" class="form-control" id="key_name"
                                            placeholder="Enter key Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="key_name">Value type</label>
                                        <select name="value_type" id="value_type" class="form-select form-control">
                                            <option value="1" selected>Text</option>
                                            <option value="2">Image</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="value">Value</label>
                                        <input type="text" name="value" class="form-control" id="value"
                                            placeholder="Enter value Name">
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
        $('body').on('change', '#value_type', function() {
            var value = $(this).val();
            if (value == 1) {
                $('#value').attr('type', 'text');
            } else {
                $('#value').attr('type', 'file');
            }
        });
        $('.swalDefaultSuccess').click(function() {
            toastr.success('Category Added Successfully.')
        });
        $(function() {
            $.validator.setDefaults({
                submitHandler: function() {
                    form.submit();
                }
            });
            $('#settingForm').validate({
                rules: {
                    key_name: {
                        required: true,
                    },
                    value: {
                        required: true,
                    },
                },
                messages: {
                    key_name: {
                        required: "Please enter key name",
                    },
                    value: {
                        required: "Please enter value",
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
