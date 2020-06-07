@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="./css/styles.css">
<div class="container">
	<div class="container-title">
		<h3>Login to PoPay</h3>
	</div>

                <section class="container-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        <p>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your PIN" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </p>

                        <p>
                            <button type="submit" class="button">
                                {{ __('Login') }}
                            </button>
                        </p>

                        <p style="text-align:center;width:50%">
			                Don't have account?
			            </p>

			            <p>
			                <button  onclick="window.location.href='register'" class="button" >Sign Up</button>
			            </p>
                    </form>
                </section>
</div>
@endsection
