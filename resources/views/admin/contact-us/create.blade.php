@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Contact Us Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Add Contact Us</li>
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
                                <h3 class="card-title">Add New Contact Us Data</h3>
                            </div>
                            <form id="indexPageForm" method="POST" action="{{ route('admin.contact.page.store') }}"
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
                                            <option value="3">Active & Deactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="input-value">
                                        <label for="value">Value</label>
                                        <input type="text" name="value" class="form-control" id="value"
                                            placeholder="Enter value Name">
                                    </div>
                                    <div class="form-group d-none" id="select-value" style="display: none">
                                        <label for="value">Select Value</label>
                                        <select name="value_select" id="value" class="form-control">
                                            <option value="0">Hide</option>
                                            <option value="1">Show</option>
                                        </select>
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
                $('#input-value').removeClass('d-none');
                $('#select-value').addClass('d-none');
                $('#select-value').hide();
            } else if (value == 2) {
                $('#value').attr('type', 'file');
                $('#input-value').removeClass('d-none');
                $('#select-value').addClass('d-none');
                $('#select-value').hide();
            } else {
                $('select[name="value_select"]').attr('name', 'value');
                $('#input-value').addClass('d-none');
                $('#select-value').removeClass('d-none');
                $('#select-value').show();
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
            $('#indexPageForm').validate({
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
