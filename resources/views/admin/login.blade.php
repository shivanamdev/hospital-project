<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    <title>Kalp First Clinic</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    @if (session('status'))
                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                         {{ session('status') }}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
        
                
                    <form method="POST" action="{{ route('login') }}" class="form-signin">
                        @csrf
						<div class="account-logo">
                            <a href="index-2.html"><img src="{{ asset('assets/img/favicon.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label for="email" value="{{ __('Email') }}">Username or Email</label>
                            <input  autofocus="" class="form-control" type="email" name="email" :value="old('email')" required autofocus>
                        </div>
                        <div class="form-group">
                            <label  for="password" value="{{ __('Password') }}">Password</label>
                            <input type="password" id="key" class="form-control" name="password" required autocomplete="current-password">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox" onclick="showPassword()"> Show password
                            </label>
                        </div>
                        {{-- <div class="form-group text-right">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                            @endif
                        </div> --}}
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">{{ __('Log in') }}</button>
                        </div>
                        {{-- <div class="text-center register-link">
                            Don’t have an account? <a href="{{ route('form.registertion') }}">Register Now</a>
                        </div> --}}
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <script type="text/javascript">
        function showPassword() {
  
      var key_attr = $('#key').attr('type');
  
      if(key_attr != 'text') {
  
          $('.checkbox').addClass('show');
          $('#key').attr('type', 'text');
  
      } else {
  
          $('.checkbox').removeClass('show');
          $('#key').attr('type', 'password');
  
      }
  
  }
      </script>

</body>


<!-- login23:12-->
</html>



