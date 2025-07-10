@extends('layouts.admin')

@section('content')

<div class="row mb-10">
    <div class="col-sm-12 col-10 m-b-10">
        <h4 class="page-title">Gallery</h4>
        @if (session('status4'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status4') }}
        </div>
        @endif
    </div>

<div class="row ml-2">
    <div class="col-sm-12 col-10 m-b-2 card-header">
        <h5 class="card-title float-left mt-2">Add Gallery</h5>
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
    </div>
   
   
     
    <div class="col-md-12 col-12 text-center m-b-20  mx-10  py-2 card">
      
       
        <form action="{{ route('admin.Addphoto') }}" method="post" enctype="multipart/form-data">
            @csrf
           
           
            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="float-left">Title</label>
                    <input class="form-control" value="{{ old('title') }}" type="text" name="title">
                    @if($errors->has('title'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
                </p>
                @endif
                </div>
                
                
                <div class="col-sm-5">
                    <label class="float-left">Image</label>
                    <div class="input-group hdtuto control-group lst increment" >
                        <input type="file" name="image" class="myfrm form-control">
                        @if($errors->has('image'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                        </p>
                        @endif
                        
                      </div>
                      
                </div>
                
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary submit-btn" style="margin-top: 34px">Add</button>
                </div>
               
            </div>
           
        </form>


        {{-- <a href="add-doctor.html" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a> --}}
    </div>
  </div>
</div>

{{-- table --}}
<div class="row mt-4">
    <div class="col-sm-5 col-5 m-b-10">
        <h4 class="page-title pt-2">Gallery Title List</h4>
    </div>
    <div class="col-sm-7 col-7 text-right m-b-30">
        {{-- <a href="add-department.html" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Department</a> --}}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table mb-0 datatable">
                <thead>
                    <tr>
                        <th class="text-center">SNo</th>
                        <th class="text-center">Gallery Title</th>
                        <th class="text-center">Created Time</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                @endphp
              @foreach ($data as $item)
                    <tr>
                        <td class="text-center">{{$i++}}</td>
                        <td class="text-center"><img width="38" height="38" src="{{ asset($item->gicon) }}" class="rounded-circle m-r-5" alt="">{{$item->title}}</td>
                        <td  class="text-center">{{$item->created_at->format('m/d/Y')}}</td>
                        <td class="text-right">
                            <div class="row float-right">
                                <span class="mr-2"><a class="btn btn-success btn-block" href="{{ route('admin.gallery.edit',$item->id) }}" ><i class="fa fa-pencil m-r-5 "></i></a></span>  
                                <span class="mr-2"><a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#delete_doctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i></a></span>
                              </div>
                           
                           
                            {{-- <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('admin.gallery.edit',$item->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_doctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                    {{-- delete --}}
                    <div id="delete_doctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <img src="{{ asset('assets/img/sent.png')}}" alt="" width="50" height="46">
                                    <h3>Are you sure want to delete Title?</h3>
                                    <form action="{{ route('admin.titledelete') }}" method="POST">
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

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- table --}}










  
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