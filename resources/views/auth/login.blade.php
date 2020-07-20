@extends('auth.layout')

@section('content')
<div>
    <div class="uk-card uk-card-body uk-dark uk-padding-large">
        <h3 class="uk-card-title">{{ __('Login')}}</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
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
                    <input class="uk-input @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password">
                    @error('password')
                    <div uk-alert>
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-grid uk-grid-small" uk-grid>
                    <div class="uk-width-auto">
                        <label class="uk-switch" for="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <div class="uk-switch-slider uk-switch-big"></div>
                        </label>
                    </div>
                    <div class="uk-width-expand">
                        <small> {{ __('Remember Me') }}</small>
                    </div>
                </div>
            </div>
            <div class="uk-margin">
                <button type="submit" class="uk-button uk-button-primary uk-width-1-1">
                    {{ __('Login') }}
                </button>
            </div>
            <div class="uk-margin uk-text-center">
                @if (Route::has('password.request'))
                <a class="uk-button uk-button-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection