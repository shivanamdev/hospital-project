@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 card-header" >
        <h4 class="page-title pt-3">Edit Department</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2  py-2 card" >
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.departmentupdate')}}" method="post" enctype="multipart/form-data">
            @csrf

           
               
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <input class="form-control" type="text" name="title" value="{{$data->title}}">
                    @if($errors->has('title'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                    </p>
                    @endif
                </div>
               
               
                    <div class="form-group">
                        <label>Image</label>
                        <div class="profile-upload">
                            <div class="mr-2">
                                <img alt="doctor image"  id="blah" src="{{ asset($data->image) }}" style="height: 53px;
                                width: 65px;">
                            </div>
                            <div class="upload-input">
                                <input class="form-control btn btn-primary" accept="image/*" type='file' id="imgInp" name="image" value="{{$data->image}}">
                               
                            </div>
                        </div>
                    </div>
               
           





            {{-- <div class="form-group">
                <label>Name</label>
                <input type="hidden" value="{{$data['id']}}" name="id">
                <input class="form-control" type="text" name="title" value="{{$data['title']}}">
                @if($errors->has('title'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
                </p>
                @endif
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input class="form-control" accept="image/*" type='file' id="imgInp" name="image" value="{{$data['image']}}">
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
                       
                        <div class="img-thumbnail float-right"><img src="{{ asset($data->image) }}" id="blah" class="img-fluid" alt="Logo" width="100" height="100"></div>

                    </div>
                </div>
            </div> --}}
            <div class="form-group">
                <label>Description</label>
                <textarea cols="15" rows="3" class="form-control" name="des" id="des">{!! $data['description'] !!}</textarea>
                @if($errors->has('des'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('des') }}</strong>
                </p>
                @endif
            </div>
            <div class="form-group">
                <label>Short Description</label>
                <textarea cols="15" rows="3" class="form-control" name="short_des" id="short_des">{{$data['short_des']}}</textarea>
                @if($errors->has('short_des'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('short_des') }}</strong>
                </p>
                @endif
            </div>
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Update Department</button>
            </div>
        </form>
    </div>
</div>

<!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('des');
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