@extends('layouts.app')

@section('title', 'Login - Smart Trip Sumedang')

<link rel="shortcut icon" type="image/icon" href="{{ asset('img/logo2.png') }}" sizes="40x40" />

@section('content')
<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Back button -->
                <div class="float-left">
                    <a href="/" class="btn btn-link">
                      <i class="fas fa-arrow-left"></i> {{ __('Back') }}
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="text-center">
                    <a href="/">
                        <img src="images/logo/logo1.png" alt="" width="250px">
                    </a>
                </div>
                <div class="login-brand">
                    Smart Trip Sumedang
                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h4 style="color: #3644d6">{{ __('Login') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                
                                <!-- Move the Forgot Password link to the right -->
                                    <a href="{{ route('password.request') }}" class="float-right mt-2">
                                        {{ __('Forgot Your Password?') }}
                                    </a>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4" style="background: #5bb638">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block" tabindex="4" style="background: #3644d6">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="simple-footer">
                    Copyright &copy; Smart Trip 2023 - Present. <br>
                    Powered by &copy; PT PLN Icon Plus
                </div>

                
            </div>
        </div>
    </div>
</section>
@endsection
