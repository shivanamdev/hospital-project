
<!DOCTYPE html>
<html lang="en">


<!-- forgot-password24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico')}}">
    <title>Kalp First Clinic- Medical & Hospital</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{ asset('assets/js/html5shiv.min.js')}}"></script>
		<script src="{{ asset('assets/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
                <div class="account-box">
                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                      {{ session('status') }}
                    </div>
                    @endif
                   
                        
                    <form class="form-signin" method="POST" action="{{ route('password.email') }}">
						@csrf
                        <div class="account-logo">
                            <a href="index-2.html"><img src="{{ asset('assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Enter Your Email</label>
                            <input type="text" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">{{ __('Email Password Reset Link') }}</button>
                        </div>
                        <div class="text-center register-link">
                            <a href="{{ route('login') }}">Back to Login</a>
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


<!-- forgot-password24:03-->
</html>






















{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
