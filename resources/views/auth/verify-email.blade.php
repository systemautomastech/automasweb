@extends('backend.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center align-items-center" style="min-height: calc(100vh - 160px);">
        <div class="col-12 col-md-10 col-lg-7 col-xl-6">
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-body p-4 p-md-5">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold mb-1">{{ __('Verify Email') }}</h4>
                        <p class="text-muted mb-0">
                            {{ __('Thanks for signing up. Please verify your email address before continuing.') }}
                        </p>
                    </div>

                    @if (session('status') == 'verification-link-sent')
                        <div class="alert alert-success mb-4" role="alert">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </div>
                    @endif

                    <div class="d-flex flex-column flex-md-row gap-3 justify-content-between align-items-stretch align-items-md-center">
                        <form method="POST" action="{{ route('verification.send') }}" class="d-grid flex-grow-1">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('Resend Verification Email') }}</button>
                        </form>

                        <form method="POST" action="{{ route('logout') }}" class="d-grid flex-grow-1">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary btn-lg">{{ __('Log Out') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
