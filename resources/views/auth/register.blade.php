@extends('layouts.app')
@section('title','Admin Registration')
@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                {{--   <div class="brand-logo">
                        <img src="../../assets/images/logo.svg">
                    </div>
                    --}}
                    <h4>New here?</h4>
                    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                    <form class="pt-3" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}" required autocomplete="name"
                                autofocus placeholder="Full Name">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" id="email"
                                placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" id="password"
                                placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password"
                                class="form-control form-control-lg"
                                name="password_confirmation" required autocomplete="new-password" id="password-confirm"
                                placeholder="Confirm Password">
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input"> I agree to all Terms &
                                    Conditions </label>
                            </div>
                        </div>
                        <div class="mt-3">
                            
                        <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                            {{ __('Register') }}
                        </button>
                        </div>
                        <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                href="{{ route('login') }}" class="text-primary">{{ __('Login') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endsection