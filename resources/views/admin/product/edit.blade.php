@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 card-header">
        <h4 class="page-title pt-3">Edit Product</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card">
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.productupdate')}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="{{$data->id}}" name="id">
           
             

                
               <div class="row">
                <div class="col-md-12" style="margin-bottom:15%;">
                   <div class="profile-img-wrap" style="margin-left:40%; border-radius:30%;">
                    @if(!empty($data->image))    
                    <img alt="product logo" class="inline-block" id="blah" src="{{ asset($data->image) }}" style="border-radius:50%;">
                    @else
                 <img alt="product logo" class="inline-block" src="{{ asset('assets/img/ddlogo.png')}}" style="border-radius:50%;">
                 @endif   
                     <div class="fileupload btn">
                    <span class="btn-text"><i class="fa fa-plus"></i></span>
                    <input class="upload btn btn-outline-info" accept="image/*" type='file' id="imgInp" name="image" value="{{ $data->image }}">
                    @if($errors->has('image'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                     </p>
                     @endif
                   </div>
                  </div>
                </div>
               </div>

          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
                <label>Product Name</label>
                <input class="form-control" type="text" name="pname" value="{{ $data->name }}">
                @if($errors->has('pname'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('pname') }}</strong>
                </p>
                @endif
            </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Net Qty</label>
                    <input class="form-control" type="text" name="net_quantity" value="{{ $data->net_quantity }}">
                    @if($errors->has('net_quantity'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('net_quantity') }}</strong>
                    </p>
                    @endif
                </div>
                </div>
          </div>
                  
               
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                      <label>Category</label>
                      <select class="form-control select select2-hidden-accessible" id="pcategory" name="category" tabindex="-1" aria-hidden="true" onchange="val()">
                          <option>Select</option>
                          @foreach ($cate as $item)
                          <option value="{{ $item->id }}" @if($item->id==$data->category_id)
                            selected
                          @endif >{{ $item->category }}</option>
                          @endforeach  
                          @if($errors->has('category'))
                          <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                          <strong>{{ $errors->first('category') }}</strong>
                          </p>
                          @endif 
                      </select>
                     
                   </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                      <label>Sub Category</label>
                      <select class="form-control select select2-hidden-accessible"  id="subcategory" name="subcategory" tabindex="-1" aria-hidden="true">
                          <option value="{{ $sub->id }}">{{ $sub->subcategory }}</option>
                       </select>
                      @if($errors->has('subcategory'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('subcategory') }}</strong>
                    </p>
                    @endif
                   </div>
                </div>




                  {{-- <div class="col-md-6">
                      <div class="form-group">
                        <label>Sub Category</label>
                        <select class="form-control select select2-hidden-accessible" name="subcategory" tabindex="-1" aria-hidden="true" onchange="val()">
                            <option>Select</option>
                            @foreach ($sub as $subcate)
                          <option value="{{ $subcate->id }}" @if($subcate->id==$data->subcate_id)
                            selected
                @endif >{{ $subcate->category }}</option>
                          @endforeach  
                         </select>
                        @if($errors->has('subcategory'))
                      <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                      <strong>{{ $errors->first('subcategory') }}</strong>
                      </p>
                      @endif
                     </div>
                  </div> --}}
              </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>MRP</label>
                        <input class="form-control" type="number" name="mrp" value="{{ $data->mrp }}">
                        @if($errors->has('mrp'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('mrp') }}</strong>
                        </p>
                        @endif
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Selling Price</label>
                                <input class="form-control" type="number" name="sellingprice" value="{{ $data->sellingprice }}">
                                @if($errors->has('sellingprice'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('sellingprice') }}</strong>
                                </p>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Short Description</label>
                    <textarea cols="10" rows="2" class="form-control" name="short">{{ $data->shortdescription }}</textarea>
                    @if($errors->has('short'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('short') }}</strong>
                    </p>
                    @endif
                </div>


                <div class="form-group">
                    <label>Description</label>
                    <textarea cols="20" rows="4" class="form-control" name="description" id="des">{!! $data->description !!}</textarea>
                    @if($errors->has('description'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                    </p>
                    @endif
                </div>
               


            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit" >Update Product</button>
            </div>
        </form>
    </div>
</div>



<script>
	jQuery(document).ready(function()
	{
	jQuery('#pcategory').change(function(){

		let categoryid=jQuery(this).val();
		jQuery.ajax({
		url:'/fetchsubcategory',
		type:'post',
		data:'categoryid='+categoryid+'&_token={{csrf_token()}}',
		success:function(result){

		jQuery('#subcategory').html(result)

		}

		});

	});
	});
</script>




<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>



<!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('des');
    </script>
<!-- ckeditor -->

@endsection