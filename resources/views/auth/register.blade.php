@extends('front.header')

@section('content')





<section class="bg-light p-0">

    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-md-8 col-lg-7 col-xl-5">

                <!-- Form -->
                <div class="card p-2-0 p-sm-2-5 my-2-0">

                    <div class="mb-4 text-center">
                        <h2 class="font-weight-normal mb-0"><span class="text-primary">Register</span></h2>
                        <p class="mb-0">Register to your account.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">

                            <!-- Input -->
                            <div class="col-12">

                                <div class="form-group">
                                    <label>Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
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
                                    <label>Email</label>
                                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="name" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
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
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            </div>
                            <!-- End Input -->

                        </div>

                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms-condition">
                                    <label class="custom-control-label display-30" for="terms-condition">I agree to the <a href="#!">Terms &amp; Conditions</a></label>
                                </div>
                            </div>

                            <div class="col-md-12 center">
                                <button type="submit" class="butn style-one fill d-block w-100 mt-4 mb-0">Register</button>
                            </div>
                        </div>

                        <div class="text-center text-small mt-4">
                            <span>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></span>
                        </div>

                    </form>

                </div>
                <!-- End Form -->

            </div>
        </div>
    </div>

</section>

@endsection
