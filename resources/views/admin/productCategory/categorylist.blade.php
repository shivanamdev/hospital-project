@extends('layouts.admin')

@section('content')
<div class="row mb-10">
    <div class="col-sm-12 col-10 m-b-10 ">
        <h4 class="page-title">Category</h4>
        
    </div>
</div>

{{-- dumi --}}

<div class="row mb-12 py-3 ml-1">
    <div class="col-sm-12 col-10 m-b-5 card-header">
        <h4 class="page-title float-left mt-2">Add Category</h4>
        @if (session('status1'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status1') }}
        </div>
        @endif
       
    </div>
  

    <div class="col-lg-12 col-12 text-center m-b-5 card">
       
        <form action="{{route('admin.addcategory')}}" method="post" enctype="multipart/form-data">
            @csrf
           
            <div class="form-group row">
               
                <input type="hidden" name="" value="">   
            </div>
            <div class="form-group row">
               
                <label class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-6">
                  
                    <input class="form-control" type="text" name="category" value="{{ old('category') }}">
                @if($errors->has('category'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
                </p>
                @endif
                      
                </div>
               
                <div class="col-sm-3  text-center">
                    <button type="submit" class="btn btn-primary submit-btn" style="margin-top: 0px">Add Category</button>
                </div>
            </div>
           
        </form>


    </div>
</div>



{{-- dumi --}}
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
            <label class="col-sm-2">Category </label>
            <div class="col-sm-6">
                
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







<div class="row"> 
<div class="col-sm-12 col-8">
    @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
</div>
</div>



<div class="row mt-3">
   
    <div class="col-sm-4 col-3">
        <h4 class="page-title">Category List</h4>
       
    </div>
    <div class="col-sm-8 col-9 text-right m-b-20">
       
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-border table-striped custom-table datatable mb-0">
                <thead>
                    <tr>
                      
                        <th class="text-center">SNo</th>
                        <th  class="text-center">Category</th>
                        {{-- <th  class="text-center">Sub Category</th> --}}
                        <th  class="text-center">Created</th>
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
                        {{-- <td  class="text-center"><img width="28" height="28" src="" class="rounded-circle m-r-5" alt=""></td> --}}
                        <td  class="text-center">{{$item->category}}</td>
                        {{-- <td  class="text-center"></td> --}}
                        <td  class="text-center">{{$item->created_at->format('m/d/Y')}}</td>
                        <td class="text-right">
                              <div class="row float-right">
                                <span class="mr-2"><a class="btn btn-success btn-block" href="#" data-toggle="modal" data-target="#edit_doctor{{$item->id}}"><i class="fa fa-pencil m-r-5 "></i></a></span>  
                                <span class="mr-2"><a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#deletedoctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i></a></span>
                              </div>

                        </td>
                    </tr>


{{-- edit --}}
<div id="edit_doctor{{ $item->id }}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="col-sm-12 col-10 mb-4">
                <h3 class="page-title btn-light py-2 text-dark"> Edit Category</h3>
                </div>
                
                <form action="{{ route('admin.categoryupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                      
                      
                                <label class="float-left">Category Name</label>
                                <input type="hidden" value="{{$item->id}}" name="id">
                                <input class="form-control" type="text" name="name" value="{{$item->category}}">
                                @if($errors->has('name'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                                </p>
                                @endif
                       
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









                    {{-- delete Modal --}}
<div id="deletedoctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{ asset('assets/img/sent.png')}}" alt="" width="50" height="46">
                <h3>Are you sure want to delete this Category?</h3>
                <form action="{{ route('admin.categorydelete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->id}}">

                <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>	  
                </div>
            </div>
        </div>
    </div>
    
</div>



@endforeach  
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection