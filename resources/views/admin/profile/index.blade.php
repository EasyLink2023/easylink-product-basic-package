@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
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

            @if ($user->is_password_changed == 0)
                <div class="alert alert-danger mb-1">
                    Note: Change Default Password
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <!-- Update Email and Name Form -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Profile</h3>
                            </div>
                            <form id="profileForm" method="POST" action="{{ route('admin.profile.update') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter your name" value="{{ old('name', $user->name) }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter your email" value="{{ old('email', $user->email) }}"
                                            required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Change Password Form -->
                    <div class="col-md-6">
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Change Password</h3>
                            </div>
                            <form id="passwordForm" method="POST" action="{{ route('admin.password.update') }}">
                                @csrf
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label for="old_password">Old Password</label>
                                        <input type="password" name="old_password" class="form-control" id="old_password"
                                            placeholder="Enter old password"
                                            value="{{ $user->is_password_changed == 0 ? 'Pa$$w0rd!' : '' }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" name="new_password" class="form-control" id="new_password"
                                            placeholder="Enter new password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                            id="confirm_password" placeholder="Confirm new password" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-danger">Change Password</button>
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
            // Validation for Profile Form
            $('#profileForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    name: {
                        required: "Please enter your name",
                        minlength: "Your name must be at least 3 characters long"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    }
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

            // Validation for Password Form
            $('#passwordForm').validate({
                rules: {
                    old_password: {
                        required: true
                    },
                    new_password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        equalTo: "#new_password"
                    }
                },
                messages: {
                    old_password: {
                        required: "Please enter your old password"
                    },
                    new_password: {
                        required: "Please enter a new password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    confirm_password: {
                        required: "Please confirm your new password",
                        equalTo: "Password confirmation does not match"
                    }
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
