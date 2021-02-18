@extends('layouts.app')
@section('title','Admin Login')
@section('content')
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    {{--  
                        <div class="brand-logo">
                        <img src="{{ asset('assets/images/logo.svg') }}">
                        </div>
                    
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6>
                    --}}
                    <form class="pt-3" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input type="email" id="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                id="password" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                         <div class="my-2 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input"> {{ __('Remember Me') }} </label>
                            </div>
                            @if (Route::has('password.request'))
                            <a class="auth-link text-black" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        
                        </div>
                        <div class="mt-3 mb-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                            {{ __('Login') }}
                        </button>
                        </div>
                        <div class="mb-2">
                            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
                        </div>
                        <div class="text-center mt-4 font-weight-light"> Don't have an account? 
                            @if (Route::has('register'))
                            <a class="text-primary" href="{{ route('register') }}">{{ __('Create') }}</a>
                             @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>

<!-- container-scroller -->
@endsection
        
