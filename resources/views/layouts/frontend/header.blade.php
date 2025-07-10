 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      @php
      $setting = App\Models\setting::first();
    @endphp
      <h1 class="logo me-auto">
        <a href="{{ url('/') }}">
          <img src="{{asset ($setting->web_logo) }}"  onerror="this.src={{ asset('/frontend/assets/img/kalp_logo.png') }}" alt="">
        </a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class=""><a class="nav-link scrollto {{ '/' == request()->path() ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ 'about' == request()->path() ? 'active' : '' }}" href="{{ route('frontend.about') }}">About Us</a></li>
          <li><a class="nav-link scrollto {{ 'department' == request()->path() ? 'active' : '' }}" href="{{ route('frontend.department') }}">Departments</a></li>
          <li><a class="nav-link scrollto {{ 'product' == request()->path() ? 'active' : '' }}" href="{{ route('frontend.product') }}">Products</a></li>
          <li><a class="nav-link scrollto {{ 'doctor' == request()->path() ? 'active' : '' }}" href="{{ route('frontend.doctor') }}">Doctors</a></li>
          <li><a class="nav-link scrollto {{ 'contact' == request()->path() ? 'active' : '' }}" href="{{ route('frontend.contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{ route('frontend.appointment') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->