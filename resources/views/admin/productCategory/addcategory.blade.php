{{-- @extends('layouts.admin')

@section('content')

{{-- <div class="row mt-2">
    <div class="col-lg-8 offset-lg-2" style="background: gainsboro;">
        <h4 class="page-title pt-2">Add Category</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2" style="background: ghostwhite;">
        <br>
        @if (session('status1'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status1') }}
        </div>
        @endif
       
        <form action="{{route('admin.addcategory')}}" method="post" enctype="multipart/form-data">
            @csrf

           <div class="form-group row">
          
            <div class="col-sm-8">
                <label>Category </label>
            <input class="form-control" type="text" name="category" value="{{ old('category') }}">
                @if($errors->has('category'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
                </p>
                @endif
           
           </div>
            <div class="col-sm-3">
                <button class="btn btn-primary  submit-btn form-control" type="submit" style="margin-top:30px">Add Category</button>
            </div>
           
          </div>
            
        </form>
    </div>
</div> --}}


<br>

{{-- Add Sub Category --}}

<div class="row mt-2">
    <div class="col-lg-8 offset-lg-2" style="background: #b9dbb8;">
        <h4 class="page-title pt-2">Add Sub Category</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2" style="background: #e1ffce;">
        <br>
        @if (session('status2'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status2') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.addsubcategory')}}" method="post" enctype="multipart/form-data">
            @csrf



          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>Category</label>
                <select class="form-control select select2-hidden-accessible" name="category" tabindex="-1" aria-hidden="true">
                    <option>Select</option>
                    @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                    @endforeach  
                    @if($errors->has('category'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('category') }}</strong>
                    </p>
                    @endif 
                </select>
            </div>
            </div>
          </div>
                  
           
          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>Sub Category</label>
                <input class="form-control" type="text" name="subcategory" value="{{ old('subcategory') }}">
                @if($errors->has('subcategory'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('subcategory') }}</strong>
                </p>
                @endif
            </div>
            </div>
          </div>
                      
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit" >Add Sub Category</button>
            </div>
        </form>
    </div>
</div>




@endsection --}}