
@extends('layouts.admin')

@section('content')


<div class="row" >

    <div class="col-lg-8 offset-lg-2 card-header">
        
        <h4 class="page-title pt-3">Edit Page</h4>
     
        @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
    </div>
    
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card">
        
        <form action="{{ route('admin.updatepage') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label>Page Name</label>
                <input class="form-control" type="hidden" name="id" value="{{ $pagedata->id }}">
                <input class="form-control" type="text" name="page_name" value="{{ $pagedata->page_name }}">
            </div>
           
            <div class="form-group">
                <label>Page Description</label>
                <textarea cols="20" rows="5" class="form-control" name="des" id="des">{{ $pagedata->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Meta Title </label>
                <input class="form-control" type="text" name="mtitle" value="{{ $pagedata->meta_title }}">
            </div>
            <div class="form-group">
                <label>Meta Description</label>
                <textarea cols="10" rows="2" class="form-control" name="metades">{!! $pagedata->meta_description !!}</textarea>
            </div>
            <div class="form-group">
                <label>Meta Keywords <small>(separated with a comma)</small></label>
                <input type="text" placeholder="Enter your tags" data-role="tagsinput" value="{{ $pagedata->meta_keywords }}" name="metakey" class="form-control">
            </div>
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Update Page</button>
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