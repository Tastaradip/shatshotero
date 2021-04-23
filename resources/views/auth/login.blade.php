@extends('auth.common.master')

@section('content-own')   
        <!-- Start content -->
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5">
                <div class="card card-pages shadow-none mt-4">
                    <div class="card-body">
                        <div class="text-center mt-0 mb-3">
                            <a href="index.html" class="logo logo-admin">
                                <img src="assets/images/logo-dark.png" class="mt-3" alt="" height="26"></a>
                            <p class="text-muted w-75 mx-auto mb-4 mt-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form class="form-horizontal mt-4" method="POST" action="{{ route('admin.login.check') }}">
                        @csrf
    
                            <div class="form-group">
                                <label for="email" class="col-12 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                                <div class="col-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-12 col-form-label text-md-left">{{ __('Password') }}</label>
                                <div class="col-12">                                    
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-12">
                                    <div class="checkbox checkbox-primary">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" value="{{ old('remember') ? 'checked' : '' }}">
                                            <label class="custom-control-label" for="customCheck1">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center mt-3">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __('Login') }}</button>
                                </div>
                            </div>
                            <div class="form-group text-center mt-4">
                                <div class="col-12">
                                    <div class="float-left">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock mr-1"></i> Forgot your password?</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
        <!-- end row -->

@endsection
