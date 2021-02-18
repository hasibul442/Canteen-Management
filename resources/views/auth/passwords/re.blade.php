@extends('layouts.app')
@section('title', 'Reset Password')
@section('content')
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        {{-- <div class="brand-logo">
                        <img src="{{ asset('assets/images/logo.svg') }}">
                        </div>
                    
                    <h4>Hello! let's get started</h4>
                    <h6 class="font-weight-light">Sign in to continue.</h6> --}}
                        <form class="pt-3" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <input type="email" id="email"
                                    class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
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
                                    id="password" name="password" required autocomplete="new-password"
                                    placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="password-confirm"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">

                            </div>


                            <div class="mt-3 mb-3">
                                <button type="submit"
                                    class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                                    {{ __('Reset Password') }}
                                </button>
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
