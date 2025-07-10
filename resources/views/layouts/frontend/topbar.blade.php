 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      @php
      $data = App\Models\setting::first();
    @endphp
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:{{$data->email}}">{{$data->email}}</a>
        <i class="bi bi-phone"></i> <a href="tel:{{$data->number}}">{{$data->number}}</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="{{$data->twitter_url}}"><i class="bi bi-twitter"></i></a>
        <a href="#" class="{{$data->fb_url}}"><i class="bi bi-facebook"></i></a>
        <a href="#" class="{{$data->insta_url}}"><i class="bi bi-instagram"></i></a>
        <a href="#" class="{{$data->youtube_url}}"><i class="bi bi-youtube"></i></i></a>
      </div>
    </div>
  </div>
