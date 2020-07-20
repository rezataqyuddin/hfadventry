@extends('auth.password')

@section('content')
<div>
    <div class="uk-flex uk-flex-middle">
        <div class="uk-align-center uk-padding-small">
            <div class="uk-panel uk-dark uk-margin-top uk-width-large">
                <h3 class="uk-card-title">{{ __('Confirm Password')}}</h3>

                @if (session('status'))
                <div class="uk-alert uk-alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                {{ __('Please confirm your password before continuing.') }}

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="uk-margin">
                        <label for="password" class="uk-form-label">{{ __('Password') }}</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="uk-button uk-button-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection