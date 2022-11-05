@extends('layouts.eVotingApp')
@section('links')
    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>

    {{-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main1.css') }}">

    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('vendor/tilt/tilt.jquery.min.js') }}"></script>
@endsection
@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <a href="{{ route('registerAsVoter') }}">
                        <img src="images/img-01.png" alt="IMG">
                        <h4 class="txt2 text-center">Click here to register as a voter</h4>
                    </a>
                </div>

                <form class="login100-form validate-form " method="POST" action="{{ route('register') }}">
                    @csrf
                    <span class="login100-form-title">Register as an admin</span>
{{--                    <div class="row mb-3">--}}
{{--                        <div class="wrap-input100 validate-input" placeholder="Email"--}}
{{--                             data-validate="Valid email is required: ex@abc.xyz">--}}

{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-8">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"--}}
{{--                                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="wrap-input100 validate-input"
                         data-validate="Valid email is required: ex@abc.xyz">
                        <input id="name" type="text" placeholder="Name" class="input100 @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa-regular fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input"
                         data-validate="Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" placeholder="Email" class="input100 @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" class=" input100 @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" class=" input100 @error('password') is-invalid @enderror"
                               name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script defer
            src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
            integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
            data-cf-beacon='{"rayId":"75dfb72cb93ad1e4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.10.3","si":100}'
            crossorigin="anonymous"></script>
@endsection
