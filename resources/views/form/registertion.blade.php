
<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend/assets/img/favicon.png')}}">
    <title>Kalp First Clinic</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{ asset('assets/js/html5shiv.min.js')}}"></script>
		<script src="{{ asset('assets/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">

                   <form method="POST" action="{{ route('form.register') }}" class="form-signin">
                        @csrf
						<div class="account-logo">
                            @php
                            $setting = App\Models\setting::first();
                            @endphp
                            <a href=""><img src="{{asset ($setting->web_favicon) }}" onerror="this.src={{ asset('/frontend/assets/img/favicon.png') }}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="name" value="{{ __('Name') }}">Username</label>
                            <input type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name">
                            @if($errors->has('name'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Email Address</label>
                            <input type="email" class="form-control" name="email" :value="old('email')" required>
                            @if($errors->has('email'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password" value="{{ __('Password') }}">Password</label>
                            <input type="password" class="form-control" name="password" required autocomplete="new-password" >
                            @if($errors->has('password'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                       
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit"> {{ __('Register') }}</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="{{ route('login') }}">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
</body>


<!-- register24:03-->
</html>