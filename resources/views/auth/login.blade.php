@extends('layouts.app')

@section('title', 'Login')
@section('content')
<section>
    <div class="container-login">
        <div class="form-login">
            <div class="user">
              <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img1.jpg" alt="" /></div>
              <div class="formBx">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <h2>Sign In</h2>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>

                    <div class="d-block mt-3">
                        <button type="submit" class="btn btn-primary btn-login rounded-0">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <p class="signup">
                    Don't have an account ?
                    @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                  </p>
                </form>
              </div>
            </div>
          </div>
    </div>
  </section>
@endsection
