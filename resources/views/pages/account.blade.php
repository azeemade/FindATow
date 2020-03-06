@extends('base.auth')

@section('title')
	Login/Register - FindATow
@stop


@section('section-a')
	<div class="accountBtns">
		<div class="container d-flex justify-content-around">
			<button class="accountLink btn" onclick="openPage('Login')" id="defaultOpen">Login</button>
			<button class="accountLink btn" onclick="openPage('Register')">Register</button>
		</div>
	</div>	
	<div id="Login" class="accountContent">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<h1 class="card-title">{{__('Login')}}</h1>
							<p class="card-greeting">Welcome back</p>
						</div>
						<div class="card-body">
							<form method="POST" action="{{route('login') }}">@csrf
								<div class="form-group row">
									<label for="email" class="col-md-4 col-form-label text-md-right">{{__('E-mail Address')}}</label>
									<div class="col-md-6">
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
										 @error('email')
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>{{ $message }}</strong>
	                                    </span>
	                                	@enderror
									</div>
								</div>

								<div class="form-group row">
                            		<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
									<div class="col-md-6">
		                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
                            		</div>
                        		</div>

                        		<div class="form-group row">
		                            <div class="col-md-6 offset-md-4">
		                                <div class="form-check">
		                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

		                                    <label class="form-check-label" for="remember">
		                                        {{ __('Remember Me') }}
		                                    </label>
                                		</div>
                            		</div>
                        		</div>
                        		<div class="form-group row mb-0">
                            		<div class="col-md-8 offset-md-4">
		                                <button type="submit" class="btn btn-default">
		                                    {{ __('Login') }}
		                                </button>

		                                @if (Route::has('password.request'))
		                                    <a class="btn btn-link" href="{{ route('password.request') }}">
		                                        {{ __('Forgot Your Password?') }}
		                                    </a>
		                                @endif
                            		</div>
                       			</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="Register" class="accountContent">
		<div class="container">
		    <div class="row justify-content-center">
		        <div class="col-md-8">
		            <div class="card">
		                <div class="card-header">
		                	<h1 class="card-title">{{ __('Register') }}<h1>
		                	<p class="card-greeting">Get your vehicle towed to your preferred destination.</p>
		                </div>

		                <div class="card-body">
		                    <form method="POST" action="{{ route('register') }}">
		                        @csrf

		                        <div class="form-group row">
		                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Userame') }}</label>

		                            <div class="col-md-6">
		                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="" required autofocus>

		                                @error('username')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                        	<label for="phnum" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
		                        	<div class="col-md-6">		                        	
		                                <input id="phnum" type="" class="form-control @error('phnum') is-invalid @enderror" name="phnum" required >

		                                @error('phnum')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

		                            <div class="col-md-6">
		                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

		                                @error('email')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

		                            <div class="col-md-6">
		                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

		                                @error('password')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

		                            <div class="col-md-6">
		                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
		                            </div>
		                        </div>
		                        <div class="form-group row section-agreement form-inline">
		                        	<div class="col-form-label text-md-right">
		                        		<input type="checkbox" name="agreement" id="mycheck" onclick="Agreement()">	
		                        	</div>		                       			                        	
		                        	<label for="chkbxagreement" id="chkbxagreement">I agree to FindATow <a href="{{ url('TandC#tandc') }}">Terms & Conditions</a></label>
		                        </div>

		                        <div class="form-group row mb-0">
		                            <div class="col-md-6 offset-md-4">
		                                <button type="submit" class="btn btn-default" id="registerBtn" style="display: none;">
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
	</div>
@stop



