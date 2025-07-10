@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card">
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.setting_update')}}" method="post" enctype="multipart/form-data">
         @csrf
            <h3 class="page-title">Website Settings</h3>



            <div class="row ">
                <div class="col-md-12" style="margin-bottom:20%;">
                    
                <div class="profile-img-wrap" style="margin-left:40%; border-radius:30%;">
                    @if(!empty($data->web_logo))    
                    <img alt="logo" class="inline-block ml-2" id="blah" src="{{ asset($data->web_logo) }}">
                    @else
                 <img alt="logo" class="inline-block ml-2" src="{{ asset('assets/img/logo.png')}}">
                 @endif
                  <div class="fileupload btn">
                 <span class="btn-text"><i class="fa fa-plus"></i></span>
                 <input class="upload btn btn-outline-info" accept="image/*" type='file' id="imgInp" value="{{ $data->web_logo }}" name="web_logo">
                 @if($errors->has('image'))
                 <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                 <strong>{{ $errors->first('image') }}</strong>
                  </p>
                  @endif
                </div>
               </div>
             </div>
            </div>


            <div class="row pt-2">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Website Name <span class="text-danger">*</span></label>
                        <input type="hidden" class="form-control" name="id" value="{{$data->id}}" >
                        <input class="form-control" type="text" name="webtitle" value="{{$data->title}}" >
                    </div>
                </div>

                <div class="col-sm-4">
                <div class="form-group">
                    <label>Favicon</label>
                    <div class="profile-upload">
                        <div class="mr-2">
                            @if(!empty($data->web_favicon))
                            <img alt="favicon image"  id="favicon" src="{{ asset($data->web_favicon) }}" style="height: 53px;
                            width: 65px;">
                            @else
                            <img class="inline-block"  src="{{asset('assets/img/favicon.png')}}" alt="favicon" style="height: 53px;
                            width: 65px;">
                            @endif

                        </div>
                        <div class="upload-input">
                            <input class="form-control btn btn-primary" accept="image/*" type='file' id="faviInp" name="faviconimage" value="{{$data->web_favicon}}">
                            @if($errors->has('faviconimage'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('faviconimage') }}</strong>
                             </p>
                             @endif
                        </div>
                    </div>
                </div>
                </div>



            </div>

            {{-- <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Website-logo</label>
                        <input class="form-control btn btn-outline-info" accept="image/*" type='file' id="imgInp" value="{{ $data->web_logo }}" name="web_logo">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                       <label>Preview</label>
                       
                        <div class="col-sm-6 img-thumbnail" style="width: fit-content; margin: auto;"><img src="{{ asset($data->web_logo) }}" class="img-fluid"  id="blah"  alt="Logo" width="100" height="100"></div>

                    </div>
                </div>
            </div> --}}
            <div class="row ">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="{{ $data->email }}" >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input class="form-control"  type="text" name="number" value="{{ $data->number }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea cols="10" rows="2" type="text" class="form-control" name="address">{{ $data->address }}</textarea>
                    </div>
                </div>
                
                <div class="col-sm-8 col-md-8 col-lg-4">
                    <div class="form-group">
                        <label>City</label>
                        <input class="form-control" type="text" name="city" value="{{ $data->city }}" >
                    </div>
                </div>

                <div class="col-sm-8 col-md-8 col-lg-4">
                    <div class="form-group">
                        <label>State</label>
                        <select class="form-control select" name="state" value="{{ $data->state }}" >
                            <option>Uttar Pradesh</option>
                            <option>Mp</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-4">
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input class="form-control" value="{{ $data->postal_code }}" type="number" name="postal_code">
                    </div>
                </div>
            </div>
            <br> 

            
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-12 mb-1 card-header border border-success">
                    <h4 class="card-title pt-1">Website Social Media Links</h4>
                    </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Facebook Url</label>
                        <input class="form-control" value="{{ $data->fb_url }}" type="text" name="fb_url">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Instagrame Url</label>
                        <input class="form-control" value="{{ $data->insta_url }}" type="text" name="insta_url">
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Youtube Url</label>
                        <input class="form-control" value="{{ $data->youtube_url }}" type="text" name="youtube_url">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Twitter Url</label>
                        <input class="form-control" value="{{ $data->twitter_url }}" type="text" name="twitter_url">
                    </div>
                </div>
            </div>

            <br> 
            <div class="row">
                <div class="col-sm-12 col-md-10 col-lg-12 mb-1 card-header border border-success">
                    <h3 class="card-title pt-1">Website Meta Tags</h3>
                    </div>
                <div class="col-sm-12 ">
                    <div class="form-group">
                        <label>Meta title</label>
                        <input class="form-control" value="{{ $data->meta_title }}" type="text" name="meta_title">
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Meta Discription</label>
                        <textarea cols="10" rows="2" type="text" class="form-control" name="meta_discription">{{ $data->meta_discription }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input class="form-control" value="{{ $data->meta_keywords }}" type="text" name="meta_keywords">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center m-t-20">
                <button type="submit" class="btn btn-primary btn-block submit-btn">Save</button>
            </div>
        </form>
    </div>
</div>




<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>




<script>
    faviInp.onchange = evt => {
  const [file] = faviInp.files
  if (file) {
    favicon.src = URL.createObjectURL(file)
  }
}
</script>


@endsection