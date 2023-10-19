@extends('layouts.auth')

@section('title', 'Verify Email')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Please check your email for verification</h4>
        </div>

        @if (session('status') == 'verification-link-set')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new email verification link has been emailed to you!
            </div>
        @endif

        <div class="card-body">
            <form method="POST" action="" class="needs-validation" novalidate>
                @csrf

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        Resend Verification Email
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
@endpush
