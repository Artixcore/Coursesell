@extends('front.header')

@section('content')



    <!-- LOGIN
        ================================================== -->
        <section class="bg-light p-0">
            <div class="container d-flex flex-column">

                <div class="row align-items-center justify-content-center min-vh-100">
                    <div class="col-sm-11 col-md-8 col-lg-7 col-xl-5">

                        <div class="card p-2-0 p-sm-2-5 my-2-0">

                            <div class="mb-4 text-center">
                                <h2 class="font-weight-normal mb-0">Welcome to <span class="text-primary">Amava</span></h2>
                                <p class="mb-0">Login to your account.</p>
                            </div>

                            <!-- Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf


                                <div class="row">

                                    <!-- Input -->
                                    <div class="col-12">

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- End Input -->

                                    <!-- Input -->
                                    <div class="col-12">

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- End Input -->

                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-6 mb-2 mb-sm-0">
                                        <div class="custom-control custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label display-30" for="login-remember">Keep me signed in</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-start text-sm-end">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    </div>

                                    <div class="col-md-12 center">
                                        <button type="submit" class="butn style-one fill d-block w-100 mt-4 mb-0">Login</button>
                                    </div>
                                </div>

                                <div class="text-center text-small mt-4">
                                    <span>Don't have an account yet? <a href="{{ route('register') }}" class="text-primary">Register</a></span>
                                </div>

                            </form>
                            <!-- End Form -->

                        </div>

                    </div>
                </div>

            </div>
        </section>


@endsection
