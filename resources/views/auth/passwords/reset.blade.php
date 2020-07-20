@extends('auth.layout')

@section('content')
<div>
    <div class="uk-flex uk-flex-middle">
        <div class="uk-align-center uk-padding-small">
            <div class="uk-panel uk-dark uk-margin-top uk-width-large">
                <h3 class="uk-card-title">{{ __('Reset Password')}}</h3>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="uk-margin">
                        <label class="uk-form-label" for="email">{{ __('E-Mail Address') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-input @error('email') is-invalid @enderror" id="email" type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <div uk-alert>
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="password">{{ __('Password') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-input @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password">
                            @error('password')
                            <div uk-alert>
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                        <div class="uk-form-controls">
                            <input class="uk-input @error('email') is-invalid @enderror" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                            <div uk-alert>
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection