@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Contact Us Data</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Contact Us Data</li>
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
                                <h3 class="card-title">Edit Contact Us Data</h3>
                            </div>
                            <form id="settingForm" method="POST" action="{{ route('admin.contact.page.update') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="key_name">Key Name</label>
                                        <input type="text" name="key_name" class="form-control" id="key_name"
                                            placeholder="Enter key Name"
                                            value="{{ isset($contactUs) ? $contactUs->key : '' }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        @if ($contactUs->value_type == '2')
                                        <img src="{{ asset('asset/contact-us').'/'.$contactUs->value }}" alt="{{ $contactUs->value }}" class="mb-5" style="width: 100px !important;" onerror="this.src='{{ asset('frontend/default-images/default-image-358x436.jpg') }}'">
                                            <label for="value" class="mt-3">Value</label>
                                            <input type="file" name="value" class="form-control" id="value"
                                                placeholder="Enter value Name">
                                        @elseif($contactUs->value_type == '3')
                                            <div class="form-group" id="select-value">
                                                <label for="value">Select Value</label>
                                                <select name="value" id="value" class="form-control">
                                                    <option value="0" {{ $contactUs->value == '0' ? 'selected' : '' }}>Hide</option>
                                                    <option value="1" {{ $contactUs->value == '1' ? 'selected' : '' }}>Show</option>
                                                </select>
                                            </div>
                                        @else
                                            <label for="value">Value</label>
                                            <input type="text" name="value" class="form-control" id="value"
                                                placeholder="Enter value Name"
                                                value="{{ isset($contactUs) ? $contactUs->value : '' }}">
                                        @endif
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" name="id" value="{{ isset($contactUs) ? $contactUs->id : '' }}"">
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
            } else if (value == 2) {
                $('#value').attr('type', 'file');
                $('#input-value').removeClass('d-none');
                $('#select-value').addClass('d-none');
            } else {
                $('#input-value').addClass('d-none');
                $('#select-value').removeClass('d-none');
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
