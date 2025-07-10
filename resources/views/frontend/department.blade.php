@extends('layouts.frontend')

@section('content')

<main id="main">

 <!-- ======= Departments Section ======= -->
 <section id="departments" class="departments mt-5">
    <div class="container">

      <div class="section-title">
        <h2 class="mt-5">Departments</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="row gy-4">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            {{-- <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
            </li> --}}

            @foreach($department as $item)
            <li class="nav-item @if($item->id == 1) active @endif">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-{{$item->id}}">{{$item->title}}</a>
            </li>
            @endforeach

            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
            </li> --}}
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

             
              <!-----=====doctor======----->
              @php
              $ddata = App\Models\doctor::where('department_id',$item->id)->get();
              @endphp

             
              <div class="row doctors mt-5">
                 @foreach($ddata as $iitem)
                <div class="col-lg-6 pt-2">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset($iitem->image) }}"  onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>{{ $iitem->name }} ({{ $iitem->education }})</h4>
                      <span>{{ $item->title }}</span>
                      <p>{{ $iitem->experience }} Years of Experience</p>
                      <p>Doctor Fee : ₹ {{ $iitem->appointment_charge }}</p>
                    </div>
                  </div>
                </div>
           
                 @endforeach
             </div>
              
             
              <!-----====End doctors====--->
            </div>
            @endforeach
      
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Departments Section -->   
</main><!-- End #main -->



@endsection