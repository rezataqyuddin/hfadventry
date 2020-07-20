@extends('auth.layout')

@section('content')
<div>
    <div class="uk-card uk-card-body uk-dark uk-padding-large">
        <h2>{{ __('Register') }}</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="uk-margin">
                    <label for="name" class="">{{ __('Name') }}</label>

                    <div class="uk-form-controls">
                        <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert" uk-alert>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>

                    <div class="uk-form-controls">
                        <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert" uk-alert>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label for="password" class="">{{ __('Password') }}</label>

                    <div class="uk-form-controls">
                        <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert" uk-alert>
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin">
                    <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                    <div class="uk-form-controls">
                        <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="uk-margin mb-0">
                    <div class="uk-form-controls offset-md-4">
                        <button type="submit" class="uk-button uk-button-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection