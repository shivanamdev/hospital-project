@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 card-header">
        <h4 class="page-title pt-3" >Edit Banner</h4>
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
        <form action="{{route('admin.banner_update')}}" method="post" enctype="multipart/form-data">
            @csrf

          
              
                <div class="form-group">
                    <label>Banner Name</label>
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <input class="form-control" type="text" name="name" value="{{$data->banner_name}}">
                    @if($errors->has('name'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                    </p>
                    @endif
                </div>
               
               
                    <div class="form-group">
                        <label>Banner Image</label>
                        <div class="profile-upload">
                            <div class="mr-2">
                                <img alt="doctor image" class="img-fluid" id="blah" src="{{ asset($data->banner_image) }}" style="height: 53px;
                                width: 65px;">
                            </div>
                            <div class="upload-input">
                                <input class="form-control btn btn-primary" accept="image/*" type='file' id="imgInp" name="image" value="{{$data->banner_image}}">
                                <small>Select image only 1920 to 846 px</small>

                                @if($errors->has('image'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                                 </p>
                                 @endif
                            </div>
                        </div>
                    </div>
                
          
            

            {{-- <div class="form-group">
                <label>Clint Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
                </p>
                @endif
            </div> --}}
            

            {{-- <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input class="form-control" type="file" name="image">
                        <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                    </div>
                    @if($errors->has('image'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                     </p>
                     @endif
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                       <label>Preview</label>
                       
                        <div class="img-thumbnail float-right"><img src="{{ asset('assets/img/settings/') }}" class="img-fluid" alt="Logo" width="100" height="100"></div>

                    </div>
                </div>
            </div> --}}
            <div class="form-group">
                <label>Banner Description</label>
                <textarea cols="10" rows="2" class="form-control" name="banner_description" id="testi">{{$data->banner_description}}</textarea>
                @if($errors->has('banner_description'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('banner_description') }}</strong>
                </p>
                @endif
            </div>
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary btn-block submit-btn"  type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('testi');
    </script>
<!-- ckeditor -->

<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>



@endsection