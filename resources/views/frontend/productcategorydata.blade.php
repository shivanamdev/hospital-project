 
 
 <div class="row">
    @if(!empty($data) && $data->count())
      @foreach($data as $item) 
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="icon-box">
                    <img src="{{ asset($item->image) }}"  onerror="this.src={{ asset('assets/img/product-img1.jpg') }}" width="200;" alt="">
                  <h4 class="mt-3"><a href="{{ route('productdetail',$item->url)}}">{{ $item->name }} <br>({{ $item->net_quantity }})</a></h4>
                  <p>{{ $item->shortdescription }}</p>
                  <p class="mt-3"><b style="font-size: large;">₹{{ $item->sellingprice }} <del> ₹{{ $item->mrp }}</del></b></p>
                  <a href="{{ route('productdetail',$item->url)}}" class="btn product-btn mt-3" type="submit">Buy Now</a>

                  {{-- <button class="btn product-btn mt-3" type="submit" data-bs-toggle="modal" data-bs-target="#exampleModal">Send Query</button> --}}
                </div>
              </div>
    
    
      {{-- <!----======Product Model========---->
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
                <input type="hidden" name="id" value="{{ $item->id }}">
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
      </div> --}}
    
    
    
    @endforeach  
              
              
    </div>
    
    <br>
    
    @else
    <p>no data found</p>
    @endif
    <div class="pagination justify-content-center">
    {!! $data->links() !!}
    </div>
    
    
    
    