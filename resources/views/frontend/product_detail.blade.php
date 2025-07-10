@extends('layouts.frontend')

@section('content')

<main id="main">
    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services mt-5">

        <div class="container pt-5">
          <div class="col-md-10">
            @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>{{ session('status') }}</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             @endif
          </div>
        
          
             <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="{{ asset($Details->image) }}"  onerror="this.src={{ asset('assets/img/product-img1.jpg') }}" width="100%;" class="img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h3 class="box-title mt-5"><b>{{ $Details->name }} ({{ $Details->net_quantity }})</b></h3>
                    <p class="mt-2"><a href="{{ route('productcategory',$Details->category)}}">{{ $Details->category }}</a></p>
                    <div class="mb-3" style="borader-top:2px;">
                      <small>Ratings</small>
                      <span class="fa fa-star checked Ratings"></span>
                      <span class="fa fa-star checked Ratings"></span>
                      <span class="fa fa-star checked Ratings"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                    <p>{{ $Details->shortdescription }}</p>
                    <h4 class="mt-4">
                     <small>Price :</small>  <b class="mt-1"> ₹{{ $Details->sellingprice }} <del> ₹{{ $Details->mrp }}</del></b> 
                     
                    </h4>
                   
                    {{-- <h4 class="mt-1">
                      <small> M.R.P. :</small> <b class="mt-1"><del class="text-muted"> ₹{{ $Details->mrp }}</del></b>
                    </h4> --}}

                    {{-- <div class="row mt-5"> --}}
                      {{-- <div class=" col-md-3 mt-1 mb-2" style="borader-top:2px;">
                        <small>Ratings</small>
                        <span class="fa fa-star checked Ratings"></span>
                        <span class="fa fa-star checked Ratings"></span>
                        <span class="fa fa-star checked Ratings"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                      </div> --}}
                      
                        <button class="btn product-btn btn-rounded mt-5" style="width: 50%; padding: 20px 0px 20px 0px; margin-left: 0px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Now</button>

                      
                    {{-- </div> --}}
                    <div class="mb-5 mt-3" style="cursor: pointer;">

                    
                        {{-- <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                        <input type="number" id="number" class="qty" value="0" />
                        <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div> --}}

                        {{-- <button class="btn product-btn btn-rounded mt-5" style="width: 40%;" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Now</button> --}}
                    </div>
                  
                </div>
                <h5 class="box-title mt-5 mb-3"><b>Product Description</b></h5>
                    <p style="text-align: justify;">{!! $Details->description !!}</p>
                    {{-- <ul class="">
                        <li>Sugar Free</li>
                        <li>Becosules Syrup</li>
                        <li>Vitamin B Complex With Vitamin B12 And Folic Acid</li>
                    </ul> --}}
            </div>
        </div>
       
    </section><!-- End Services Section -->

   
  </main><!-- End #main -->

  <!----======Product Model========---->
  
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send Your Query</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="{{ route('product_query') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $Details->id }}">
          <div class="row">
            <div class="col-lg-6 mb-3">
              <label class="mb-1" for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="" placeholder="Enter Your Name" required>
              @if($errors->has('name'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('name') }}</strong>
              </p>
              @endif
            </div>
            <div class="col-lg-6 mb-3">
              <label class="mb-1" for="">Mobile Number</label>
              <input type="number" class="form-control" name="number"  value="{{ old('number') }}" id="" placeholder="Enter Your Mobile Number" required>
              @if($errors->has('number'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('number') }}</strong>
              </p>
              @endif
            </div>
            <div class="col-lg-6 mb-3">
              <label class="mb-1" for="">Email Address</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="" placeholder="Enter Your Email Address" required>
              @if($errors->has('email'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('email') }}</strong>
              </p>
              @endif
            </div>
            <div class="col-lg-6 mb-3">
              <label class="mb-1" for="quantity">Quantity</label><br>
              <!-- <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" max="10"> -->
              <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
              <input type="number" name="qty" id="number" class="qty" value="0" />
              <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
              @if($errors->has('qty'))
              <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
              <strong>{{ $errors->first('qty') }}</strong>
              </p>
              @endif
            </div>
            <div class="col-lg-12 mb-3">
              <label class="mb-1" for="">Message (Optional)</label>
              <textarea name="msg" class="form-control" id="" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn product-btn">Send Query</button>
        </div>
      </form>
      </div>
    </div>
  </div>



  <!----======Product Model========---->


@endsection