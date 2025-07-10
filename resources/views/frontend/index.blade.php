@extends('layouts.frontend')

@section('content')


{{-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"> --}}
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  {{-- <div class="carousel-inner">
    @foreach($banner as $item)
    <div class="carousel-item  @if($item->id == 1) active @endif">
      <section id="hero" class="d-flex align-items-center bg1">
        <img src="{{ asset($item->banner_image) }}"  onerror="this.src={{ asset('assets/img/hero-bg.jpg') }}" alt="" class="img-fluid">
        <div class="container" style="margin-left: -90%;">
          <div class="mt-5">
            <h1>{{ $item->banner_name }}</h1>
            <h2>{!! $item->banner_description !!}</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </section>
     
    </div>
    @endforeach --}}

    {{-- <div class="carousel-item">
      <section id="hero" class="d-flex align-items-center bg2">
        <div class="container">
          <div class="mt-5">
            <h1>Welcome to KALP FIRST CLINICS</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </section>
    </div>
    <div class="carousel-item">
      <section id="hero" class="d-flex align-items-center bg3">
        <div class="container">
          <div class="mt-5">
            <h1>Welcome to KALP FIRST CLINICS</h1>
            <h2>We are team of talented designers making websites with Bootstrap</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
      </section>
    </div> --}}
  {{-- </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}



<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <!-- <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div> -->
  <div class="carousel-inner">
    @foreach($banner as $item)
    <div class="carousel-item  @if($item->id == 1) active @endif ">
      <img src="{{ asset($item->banner_image) }}"  onerror="this.src={{ asset('assets/img/hero-bg.jpg') }}" class="bg1" alt="" >
    </div>
    @endforeach 
    {{-- <div class="carousel-item bg2">
    </div>
    <div class="carousel-item bg3">
    </div> --}}
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to KALP FIRST CLINICS</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section>
  <!-- End Hero---->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us" style="margin: -160px 0px 0px 0px;">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Kalp First Clinics ?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>{{ $about->page_name }}</h3>
            <p>{!! $about->description !!}</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          @foreach($department as $item)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-2">
            <div class="icon-box">
              <div class="icon"><i><img src="{{ asset($item->image) }}"  onerror="this.src={{ asset('assets/img/departments-2.jpg') }}" alt="" class="img-fluid">
              </i></div>
              <h4><a href="{{ route('frontend.department') }}">{{$item->title}}</a></h4>
              <p>{{$item->short_des}}</p>
            </div>
          </div>
          @endforeach
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-hospital-user"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-wheelchair"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-notes-medical"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Services Section -->

    

    <!-- ======= Departments Section ======= -->
    {{-- <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

              @foreach($department as $item)
              <li class="nav-item @if($item->id == 1) active @endif">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-{{$item->id}}">{{$item->title}}</a>
              </li>
              @endforeach

              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">


            @foreach($department as $item)
            <div class="tab-pane  @if($item->id == 1) active @endif" id="tab-{{$item->id}}">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>{{$item->title}}</h3>
                    <p class="fst-italic">{{$item->short_des}}</p>
                    {!! $item->description !!}
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="{{ asset($item->image) }}"  onerror="this.src={{ asset('assets/img/departments-2.jpg') }}" alt="" class="img-fluid">
                  </div>
                </div>


              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>


              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Et blanditiis nemo veritatis excepturi</h3>
                    <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                    <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Impedit facilis occaecati odio neque aperiam sit</h3>
                    <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                    <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Fuga dolores inventore laboriosam ut est accusamus laboriosam dolore</h3>
                    <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                    <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                    <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                    <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="frontend/assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>

      </div>
    </section> --}}
    <!-- End Departments Section -->


<!-- ======= Doctors Section ======= -->
{{-- <section id="doctors" class="doctors">
  <div class="container">

    <div class="section-title">
      <h2>Doctors</h2>
      <p>
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
      </p>
    </div>


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner row">
  @foreach($doctor as $row)
<div class="carousel-item  @if($loop->first) active @endif">
 
 
   
      <div class="col-lg-4 justify-content: center;">
<div class=" justify-content: center; ml-5">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="{{ asset($row->image) }}"  onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>{{ $row->name }} ({{ $row->education }})</h4>
            <span>{{ $row->title }}</span>
            <p>{{ $row->experience }}  Years of Experience</p>
            <p>Doctor Fee : ₹ {{ $row->appointment_charge }}</p>
          </div>
        </div>
        </a>
      </div>
      </div>



     
 
</div>

@endforeach --}}


{{-- <div class="carousel-item">
  <div class="d-flex">
      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>
  </div>
</div>
<div class="carousel-item">
  <div class="d-flex">
      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>
  </div>
</div> --}}
{{-- 
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div> --}}

    <!-- <div class="row">

      <div class="col-lg-6">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Walter White (M.B.B.S)</h4>
            <span>Cardiologist</span>
            <p>5 Years of Experience</p>
            <p>Doctor Fee : ₹ 600</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Sarah Jhonson (MD MS)</h4>
            <span>Ayurvedic Surgeon</span>
            <p>25 Years of Experience</p>
            <p>Doctor Fee : ₹ 500</p>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>Cardiology</span>
            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Neurosurgeon</span>
            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
      </div>

    </div> -->
{{-- 
  </div>
</section> --}}
<!-- End Doctors Section -->


{{-- self add --}}

<section id="doctors" class="doctors">
  <div class="container">

    <div class="section-title">
      <h2>Doctors</h2>
      <p>
      </p>
    </div>
<div class="row">
  <div class="large-12 columns">
    <div class="owl-carousel owl-theme">
      @foreach($doctor as $row)
      <div class="item mb-1">
       
       
          <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}">
            <div class="member d-flex align-items-start" style="padding: 14px;">
              <div class="pic"><img src="{{ asset($row->image) }}" style="display: block" width="100%" height="145" onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}"  alt=""></div>
              <div class="member-info">
              <h4>{{ $row->name }} ({{ $row->education }})</h4>
              <span>{{ $row->title }}</span>
              <p>{{ $row->experience }}  Years of Experience</p>
              <p>Doctor Fee : ₹ {{ $row->appointment_charge }}</p>
            </div>
          </div>
          </a>
      


      </div>

      
      @endforeach

      
    </div>
    <a class="btn btn-outline-success float-end" href="{{ route('frontend.doctor') }}">view more</a>
  </div>
</div>



<!---=======Doctor detail Model=======----->
@foreach($doctor as $row)
<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

              <div class="col-lg-12 doctors">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="{{ asset($row->image) }}" onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ $row->name }} ( {{ $row->education }} )</h4>
                    <span>{{ $row->title }}</span>
                    <p>{{ $row->experience }} Years of Experience</p>
                    <p>Doctor Fee : ₹ {{ $row->appointment_charge }}</p>
                  </div>
                </div> 
              </div>
            
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
@endforeach
<!-----======end model=======----->


  </div>

</section>




    <!-- ======= Doctors Section ======= -->
    {{-- <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Doctors</h2>
        </div>

        <div class="row" id="awards_list_id">
          @foreach($doctor as $row)
          <div class="col-lg-6 mt-2 awards_list" style="display: none;">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $row->id }}">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="{{ asset($row->image) }}"  onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $row->name }} ({{ $row->education }})</h4>
                <span>{{ $row->title }}</span>
                <p>{{ $row->experience }} Years of Experience</p>
                <p>Doctor Fee : ₹ {{ $row->appointment_charge }}</p>
              </div>
            </div>
            </a>
          </div> --}}

<!---=======Doctor detail Model=======----->
{{-- 
<div class="modal fade" id="exampleModal{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

              <div class="col-lg-12 doctors">
                <div class="member d-flex align-items-start">
                  <div class="pic"><img src="{{ asset($row->image) }}" onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>{{ $row->name }} ( {{ $row->education }} )</h4>
                    <span>{{ $row->title }}</span>
                    <p>{{ $row->experience }} Years of Experience</p>
                    <p>Doctor Fee : ₹ {{ $row->appointment_charge }}</p>
                  </div>
                </div> 
              </div>
            
      </div>
    
    </div>
  </div>
</div> --}}

<!-----======end model=======----->





          {{-- @endforeach

          <p class="text-center">
            <div class="text-center">
            
            <a id="loadMore" class="btn btn-success">Load More <i class="bx bx-chevron-down"></i></a>
             
          </div>
          </p>

        </div>

      </div>
</section> --}}
<!-- End Doctors Section -->

    

    

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">
        <div class="section-title">
          <h2>Gallery</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0" id="gallery_list_id">
          @foreach($gallery as $row)
          <div class="col-lg-3 col-md-4 gallery_list" style="display: none;">
            <div class="gallery-item">
              <a href="{{ asset($row->gicon) }}" class="galelry-lightbox">
                <img src="{{ asset($row->gicon) }}" onerror="this.src={{ asset('/frontend/assets/img/gallery/gallery-1.jpg') }}" alt="" width="100%" height="350"  >
              </a>
            </div>
          </div>
          @endforeach
          <p class="text-center">
            <div class="text-center">
              <a class="btn btn-outline-success btn-md float-end" id="viewphotos" href="{{ route('frontend.gallery') }}">view more</a>


            </div>
            <div class="text-center">
            <a id="galleryloadMore" class="btn btn-success">Load More <i class="bx bx-chevron-down"></i></a>
            </div>
          </p>
        </div>
       

      </div>
    </section><!-- End Gallery Section -->
    


<!-- ======= testimonials Section ======= -->
 <section id="doctors" class="gallery">
  <div class="container">

    <div class="section-title">
      <h2>Testimonials</h2>
      <p>
      </p>
    </div>

    <div class="row">
      
        <div id="testimonial-slider" class="owl-carousel">
          @foreach($testimonial as $row)
          <div class="testimonial">
            <div class="pic">
              <img src="{{ asset($row->image) }}" onerror="this.src={{ asset('/frontend/assets/img/testimonialuser.jpg') }}" alt="">
            </div>
            <p class="description">
              {!! $row->testimonials ?? 'data is not found' !!}
            </p>
            <h3 class="title">Name</h3>
            <small class="post">- {{  $row->name ?? 'data is not found'  }}</small>
          </div>
          @endforeach
        </div>
      
    </div>



  </div>
 </section>

<!-- ======= testimonials Section ======= -->

    
  </main><!-- End #main -->


  

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



  {{-- <!---=======Doctor detail Model=======----->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Doctor Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <div class="col-lg-12 doctors">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="frontend/assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>Walter White (M.B.B.S)</h4>
                      <span>Cardiologist</span>
                      <p>5 Years of Experience</p>
                      <p>Doctor Fee : ₹ 600</p>
                    </div>
                  </div> 
                </div>
              
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>
  
  <!-----======end model=======-----> --}}

{{-- Doctors load More --}}
  {{-- <script type="text/javascript">
  $(document).ready(function() {
        var size_li = $("#awards_list_id .awards_list").length;
        x = 2;
        $('#awards_list_id .awards_list:lt(' + x + ')').show();
        $('#loadMore').click(function() {
            $('#loadMore').hide();
            $('#awards_list_id .awards_list').show();
        });

    });
  </script> --}}
{{-- Doctors load More --}}

{{-- gallery images load More --}}
<script type="text/javascript">

  $(document).ready(function() {
        var size_li = $("#gallery_list_id .gallery_list").length;
        x = 4;
        $('#gallery_list_id .gallery_list:lt(' + x + ')').show();
        $('#viewphotos').hide();
        $('#galleryloadMore').click(function() {
            $('#galleryloadMore').hide();
            $('#gallery_list_id .gallery_list').show();
            $('#viewphotos').show();
        });

    });
  </script>
{{-- gallery images load More --}}




{{-- self add --}}

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>



<script>
  var owl = $('.owl-carousel');
  owl.owlCarousel({
    margin: 10,
    loop: true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })

</script>

{{-- testimonial --}}

<script>
  $(document).ready(function() {
    $("#testimonial-slider").owlCarousel({
      items: 2,
   
      itemsDesktop: [1000, 2],
      itemsDesktopSmall: [990, 2],
      itemsTablet: [768, 1],
      pagination: true,
      navigation: false,
      navigationText: ["", ""],
      slideSpeed: 1000,
      autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    });
  });
</script>


  @endsection
