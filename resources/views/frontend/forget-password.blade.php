@extends('layouts.frontend.app')
@section('content')
    <style>
        .forget_pass_sec {
            margin: 70px 0;
        }

        .forget_pass_form {
            width: 30%;
        }

        @media screen and (max-width: 900px) {
            .forget_pass_form {
                width: 80%;
            }
        }

        .forget_pass_sec .forget_pass_row {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .forget_pass_sec .card {
            border: 1px solid #e2e2e2;
            border-radius: 0;
        }

        .forget_pass_sec .card-header {
            background: #f5f5f5;
            border: 1px solid #e2e2e2;
            border-radius: 0;
            padding: 10px 20px;
            font-size: 18px;
            font-weight: 600;
        }

        .forget_pass_sec .card-body {
            padding: 20px;
        }

        .forget_pass_sec .card-body .form-group {
            margin-bottom: 0;
        }

        .forget_pass_sec .card-body .form-group label {
            font-size: 14px;
            font-weight: 600;
        }

        .forget_pass_sec .card-body .form-group input {
            height: 40px;
        }

        .reset_btn {
            margin-top: 20px;
        }
    </style>
    <div class="forget_pass_sec">
        <div class="forget_pass_row">
            <div class="col-md-12 forget_pass_form">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
                    <div class="card-body">
                        @include('partials.messages')
                        <form method="POST" action="{{ route('resetPasswordMail') }}">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" placeholder="Enter your registered email" required
                                        autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group
                                row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary reset_btn">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
