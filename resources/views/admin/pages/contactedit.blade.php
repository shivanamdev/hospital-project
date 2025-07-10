
@extends('layouts.admin')

@section('content')


<div class="row">

    <div class="col-lg-8 offset-lg-2 card-header">
        
        <h4 class="page-title pt-3">Edit Contact </h4>
     
        @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
    </div>
    
</div>
<div class="row" >
    <div class="col-lg-8 offset-lg-2 py-2 card">
        
        <form action="{{ route('admin.updatecontact') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="hidden" name="id" value="{{ $data->id }}">
                <input class="form-control" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" value="{{ $data->email }}">
            </div>
         
            <div class="form-group">
                <label>Query</label>
                <textarea cols="15" rows="3" class="form-control" name="msg" id="msg">{{ $data->msg }}</textarea>
            </div>
          
           
            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Update Contact</button>
            </div>
        </form>
    </div>
</div>





{{-- <!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('des');
    </script>
<!-- ckeditor --> --}}


@endsection