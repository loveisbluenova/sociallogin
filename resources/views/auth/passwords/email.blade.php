@extends('auth.layouts.auth')

@section('content')
    <div class="m-login__forget-password">
        <div class="m-login__head">
            <h3 class="m-login__title">
                Forgotten Password ?
            </h3>
            <div class="m-login__desc">
                Enter your email to reset your password:
            </div>
        </div>
        {{ Form::open(['route' => 'password.request', 'class' => 'm-login__form m-form']) }}
            <div class="form-group m-form__group">
                <input class="form-control m-input" type="text" name="email" id="m_email" value="{{ old('email') }}" placeholder="{{ __('views.auth.passwords.reset.input_0') }}" required autofocus>
            </div>
            <div class="m-login__form-action">
                <button id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
                    Request
                </button>
                &nbsp;&nbsp;
                
            </div>
            <div class="m-login__form-sub col m--align-center m-login__form-center">
                <a href="{{ route('login') }}" id="m_login_signup" class="m-link">
                    {{ __('views.auth.passwords.reset.message') }}
                </a>
            </div>
        </form>
    </div>
@endsection
