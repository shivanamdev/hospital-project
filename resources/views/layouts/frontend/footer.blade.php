
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          {{-- <div class="text-center mt-0 mb-2">
            <a href="{{ route('frontend.appointment') }}" class="appointment-btn scrollto float-end"><span class="d-none d-md-inline"></span>Make an Appointment</a>
          </div> --}}
          @php
        $data = App\Models\setting::first();
      @endphp
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4><b>KALP FIRST CLINICS</b></h4>
            <p>{{$data->address}} 
            </p>
            <br>
            <p>
              <strong>Phone:</strong> <a class="" href="tel:{{$data->number}}"> {{$data->number}}</a><br>
              <strong>Email:</strong> <a class="" href="mailto:{{$data->email}}"> {{$data->email}}</a><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Departments</h4>
            @php
            $department = App\Models\department::get()->all();
            @endphp
            <ul>
              @foreach($department as $item)
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">{{$item->title}}</a></li>
              @endforeach
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">Cardiology</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">Neurology</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">Hepatology</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">Pediatrics</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.department') }}">Eye Care</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.product') }}">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.gallery') }}">Gallery</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.testimonial') }}">Testimonial</a></li> --}}
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="term-and-condition.html">Terms & policy</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('frontend.privacypolicy') }}">Privacy policy</a></li>
            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 footer-newsletter">
            
            <h4>Join Our Newsletter</h4>
            <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
          

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>KALP FIRST CLINICS</span></strong>. All Rights Reserved 
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bnextitsolutions.com/" target="_blank;">BNext-IT Solutions</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0 pb-3">
        <a href="{{$data->twitter_url}}" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{$data->fb_url}}" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="{{$data->insta_url}}" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{$data->youtube_url}}" class="google-plus"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->