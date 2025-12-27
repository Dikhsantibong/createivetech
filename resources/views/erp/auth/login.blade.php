@extends('erp.layouts.app')

@section('content')

    <main class="auth-creative-wrapper d-flex align-items-center justify-content-center min-vh-100 bg-light">
        <div class="auth-creative-inner w-100" style="max-width:900px;">
            <div class="creative-card-wrapper">
                <div class="card my-4 overflow-hidden shadow" style="z-index: 1">
                    <div class="row flex-1 g-0">
                        <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50 d-none d-lg-block">
                            <img src="{{ asset('dashboard-template/duralux-php/assets/images/logo-abbr.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 h-100 my-auto order-1 order-lg-0 position-relative">
                            <div class="creative-card-body card-body p-sm-5 mt-lg-4">
                                <h2 class="fs-4 fw-bolder mb-4">Login</h2>
                                <h4 class="fs-6 fw-bold mb-2">Login to your account</h4>
                                <p class="fs-6 fw-medium text-muted">Thank you for coming back to <strong>Nelel</strong> web applications. Access your best recommendations here.</p>

                                <form method="POST" action="{{ route('erp.login.submit') }}" class="w-100 mt-4 pt-2">
                                    @csrf
                                    <div class="mb-4">
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email or Username" value="{{ old('email') }}" required autofocus>
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                        @error('password')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="fs-6 text-primary">Forgot password?</a>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                                    </div>
                                </form>

                                <div class="w-100 mt-5 text-center mx-auto">
                                    <div class="mb-4 border-bottom position-relative">
                                        <span class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute start-50 translate-middle">or</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <a href="#" class="btn btn-light flex-fill" title="Login with Facebook">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="#" class="btn btn-light flex-fill" title="Login with Twitter">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="#" class="btn btn-light flex-fill" title="Login with Github">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-5 text-muted text-center">
                                    <span>Don't have an account?</span>
                                    <a href="#" class="fw-bold">Create an Account</a>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger mt-3 mb-0 py-2 px-3">
                                        {{ $errors->first() }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 bg-primary order-0 order-lg-1 d-flex align-items-center justify-content-center p-4">
                            <img src="{{ asset('dashboard-template/duralux-php/assets/images/auth/auth-user.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('erp.dashboard.partials.theme-customizer')
    
@endsection