@extends('layouts.admin')

@section('content')
<div class="col-sm-12 col-6">
    <h4 class="page-title">Gallery</h4>
    @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
</div>








{{-- add images with title --}}

<div class="row mb-12 py-2 ml-1">
    <div class="col-sm-12 col-10 m-b-2 card-header">
        <h5 class="card-title mt-2">Update Gallery Title </h5>
        @if (session('status2'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status2') }}
        </div>
        @endif
    </div>
    <div class="col-lg-12 col-12 text-center m-b-2 card">
        <form action="{{ route('admin.titleupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
            <input type="hidden" name="id" value="{{ $title->id }}">
            </div>
            <div class="form-group row">
                
                
                <div class="col-sm-4">
                    <label class="float-left">Title</label>
                   <input class="form-control" value="{{ $title->title }}" type="text" name="title">
                    @if($errors->has('title'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                    </p>
                    @endif
                </div>
                
                <div class="col-sm-4">
                    <label class="float-left">Image</label>
                    <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="image" class="myfrm form-control" value="{{ $title->gicon }}">
                        @if($errors->has('image'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                        </p>
                        @endif
                        
                      </div>
                      
                </div>
                
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary submit-btn text-light" style="margin-top: 34px">Update</button>
                </div>
            </div>

            
        </form>
      

    </div>
</div>

<br>
<div class="row mb-12 py-3 ml-1">
    <div class="col-sm-12 col-10 m-b-5  card-header">
        <h3 class="card-title float-left mt-2">Add Images</h3>
        @if (session('status5'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status5') }}
        </div>
        @endif
    </div>
   <br>

    <div class="col-lg-12 col-12 text-center m-b-5 card">
       
        <form action="{{ route('admin.addphotos') }}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group row">
               
                <input type="hidden" name="id" value="{{ $title->id }}">   
            </div>
            <div class="form-group row">
               
                <label class="col-sm-2 col-form-label">Upload Images</label>
                <div class="col-sm-6">
                  
                    <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="files[]" multiple class="myfrm form-control">
                        @if($errors->has('files'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('files') }}</strong>
                        </p>
                        @endif
                      </div>
                      
                </div>
               
                <div class="col-sm-3  text-center">
                    <button type="submit" class="btn btn-primary submit-btn" style="margin-top: 0px">Add</button>
                </div>
            </div>
           
        </form>


        {{-- <a href="add-doctor.html" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a> --}}
    </div>
</div>
<br>
{{-- add images with title --}}











<div class="col-sm-12 col-8 my-3 card-header">
    <h4 class="page-title py-1">Image's List : {{ $title->title }} </h4>
    @if (session('status3'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status3') }}
    </div>
    @endif
</div>


<div class="row doctor-grid">
   
    @foreach ($data as $item)
    <div class="col-md-6 col-sm-6  col-lg-3">
       <div class="profile-widget">
          <div id="lightgallery" class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b-12">
                <a  href="{{ asset($item->images) }}">
                    <img class="img-thumbnail" alt="" src="{{ asset($item->images) }}" style="width:100%; height:100%;">
                </a>
             </div>
          </div>
            {{-- <div class="dropdown profile-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_doctor{{$item->id}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                </div>
            </div> --}}
            <div class="row ml-5 mt-3">
              <span class="widget-title3"><a class="mr-2 btn btn-success btn-block" href="#" data-toggle="modal" data-target="#edit_doctor{{$item->id}}"><i class="fa fa-pencil m-r-5 "></i></a></span>  
              <span class="widget-title3"><a class="ml-2 btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#delete_doctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i></a></span>
            </div>
        </div>
{{-- delete --}}
        <div id="delete_doctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="{{ asset($item->images) }}" alt="" width="80" height="60">
						<h3>Are you sure want to delete photo?</h3>
                        <form action="{{ route('admin.photodelete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                           
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>	
						</div>
					</div>
				</div>
			</div>
		</div>
{{-- delete --}}


{{-- edit --}}
<div id="edit_doctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                {{-- <img src="{{ asset('assets/img/sent.png') }}" alt="" width="50" height="46"> --}}
                <div class="col-sm-12 col-10 mb-4">
                <h3 class="page-title btn-light py-2 text-dark"> Edit Photo</h3>
                </div>
                
                <form action="{{ route('admin.photoupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">

                    <div class="form-group row">
                       
                    </div>
                    <div class="form-group row">
               
                        <label class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-7">
                            <input class="form-control" value="{{$item->images}}" type="file" name="image">
                        </div>
                        @if($errors->has('image'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                        </p>
                        @endif
                        {{-- <div class="col-sm-2">
                            <div class="img-thumbnail float-right"><img src="{{ asset('assets/img/logo-dark.png') }}" class="img-fluid" alt="" width="80" height="80"></div>
                        </div> --}}
                    </div>

                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-primary submit-btn text-light">Update</button>
                  </form>
                
                    
                </div>
            </div>
        </div>
    </div>
</div>
{{-- edit --}}




    </div>
    @endforeach
</div>



 
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
  

@endsection