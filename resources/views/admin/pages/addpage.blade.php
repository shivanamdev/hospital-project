
@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-lg-8 offset-lg-2  card-header">
        <h4 class="page-title pt-1">Add Page</h4>
      
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
       
    </div>
    
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card">
      
        <form action="{{ route('admin.addPages') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Page Name</label>
                <input class="form-control" type="text" name="page_name" value="{{ old('page_name') }}">
                @if($errors->has('page_name'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('page_name') }}</strong>
                </p>
                @endif
            </div>
            {{-- <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" name="title">
                @if($errors->has('title'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
                </p>
                @endif
            </div> --}}
         
            <div class="form-group">
                <label>Page Description</label>
                <textarea cols="20" rows="5" class="form-control" name="des" id="des">{{ old('des') }}</textarea>
                @if($errors->has('des'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('des') }}</strong>
                </p>
                @endif
            </div>
            <div class="form-group">
                <label>Meta Title </label>
                <input class="form-control" type="text" name="mtitle" value="{{ old('mtitle') }}" >
                @if($errors->has('mtitle'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('mtitle') }}</strong>
                </p>
                @endif
            </div>
            <div class="form-group">
                <label>Meta Description</label>
                <textarea cols="10" rows="2" class="form-control" name="metades">{{ old('metades') }}</textarea>
                @if($errors->has('metades'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('metades') }}</strong>
                </p>
                @endif
            </div>
            <div class="form-group">
                <label>Meta Keywords <small>(separated with a comma)</small></label>
                <input type="text" placeholder="Enter your tags" data-role="tagsinput" name="metakey" class="form-control"  value="{{ old('metakey') }}" >
                @if($errors->has('metakey'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('metakey') }}</strong>
                </p>
                @endif
            </div>
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Add Page</button>
            </div>
        </form>
    </div>
</div>





<!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('des');
    </script>
<!-- ckeditor -->


@endsection