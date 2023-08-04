@extends('layouts.app')

@section('title', 'Register')
@section('content')
<section>
    <div class="container-login">
        <div class="form-login">
            <div class="user">
              <div class="formBx">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                      <h2>Create an account</h2>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                        <button type="submit" class="btn btn-primary btn-login d-block rounded-0 mt-3">
                            {{ __('Register') }}
                        </button>

                        <p class="signup">
                        Already have an account ?
                        @if (Route::has('login'))
                            <a style="font-style: normal;" href="{{ route('login') }}">{{ __('Sign in.') }}</a>
                        @endif
                      </p>
                    </form>
              </div>
              <div class="imgBx"><img src="https://raw.githubusercontent.com/WoojinFive/CSS_Playground/master/Responsive%20Login%20and%20Registration%20Form/img2.jpg" alt="" /></div>
            </div>
          </div>
    </div>
  </section>
@endsection
