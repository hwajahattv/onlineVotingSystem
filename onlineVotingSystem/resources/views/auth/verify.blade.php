@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark text-white">
                    <img src={{ asset('img/image_overlay.jpg') }} class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-center">Almost there...</h5>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="card-text">Before proceeding, please check your email ({{ Auth::user()->email }}) for a
                            verification link.</p>
                        <p class="card-text">Did not receive the email?</p>
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('You can always request a new one...') }}</button>.
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
