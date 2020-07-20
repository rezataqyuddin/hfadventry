@extends('auth.layout')

@section('content')
<div>
    <div class="uk-flex uk-flex-middle">
        <div class="uk-align-center uk-padding-small">
            <div class="uk-panel uk-dark uk-margin-top uk-width-large">
                <h3 class="uk-card-title">{{ __('Reset Password')}}</h3>

                @if (session('status'))
                <div class="uk-alert uk-alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="uk-margin">
                        <label class="uk-form-label" for="email">{{ __('E-Mail Address') }}</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                        <a href="{{ route('login') }}" class="uk-button uk-button-default">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection