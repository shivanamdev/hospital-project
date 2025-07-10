@extends('layouts.admin')

@section('content')


{{--  --}}

<div class="row mb-10">
    <div class="col-sm-12 col-10 m-b-10">
        <h4 class="page-title">Sub Category</h4>
       
    </div>
</div>
<div class="row m-1">
    <div class="col-sm-12 col-10  card-header">
        <h4 class="page-title float-left mt-2">Add Sub Category</h4>
        @if (session('status8'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status8') }}
        </div>
        @endif
    </div>
  
    <div class="col-md-12 col-12 text-center m-b-20  mx-10  py-2 card">
      
       
        <form action="{{route('admin.addsubcategory')}}" method="post" enctype="multipart/form-data">
            @csrf
           
           
            <div class="form-group row py-1">
                <div class="col-sm-4">
                    <label class="float-left">Category</label>
                    <select class="form-control select select2-hidden-accessible" name="category" tabindex="-1" aria-hidden="true">
                        <option>Select</option>
                        @foreach ($data as $item)
                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                        @endforeach  
                        @if($errors->has('category'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('category') }}</strong>
                        </p>
                        @endif 
                    </select>
                </div>
                
                
                <div class="col-sm-5">
                    <label class="float-left">Sub Category</label>
                    <input class="form-control" type="text" name="subcategory" value="{{ old('subcategory') }}">
                @if($errors->has('subcategory'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('subcategory') }}</strong>
                </p>
                @endif
                        
                      </div>
                      
              
           
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary submit-btn" style="margin-top: 34px">Add Sub Category</button>
                </div>
            </div>
            
           
        </form>


    </div>
 
</div>





{{--  --}}

<div class="row"> 
<div class="col-sm-12 col-8">
    @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
</div>
</div>
<div class="row mt-2">
   
    <div class="col-sm-4 col-3">
        <h4 class="page-title">Sub Category List</h4>
       
    </div>
    <div class="col-sm-8 col-9 text-right m-b-20">
        {{-- <a href="{{ route('admin.categoryaddview') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Sub Category</a> --}}
       
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-border table-striped custom-table datatable mb-0">
                <thead>
                    <tr>
                      
                        <th class="text-center">SNo</th>
                        {{-- <th  class="text-center">Category</th> --}}
                        <th  class="text-center">Sub Category</th>
                        <th  class="text-center">Created</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                   @foreach ($subdata as $item) 
                 
                    <tr>
                        <td class="text-center">{{$i++}}</td>
                        {{-- <td  class="text-center"><img width="28" height="28" src="" class="rounded-circle m-r-5" alt=""></td> --}}
                       {{-- <td  class="text-center">{{$item->title ,$item->category}}</td> --}}
                        <td  class="text-center">{{$item->subcategory}}</td>
                       
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
                <h3 class="page-title btn-light py-2 text-dark"> Edit Sub Category</h3>
                </div>
                
                <form action="{{ route('admin.subcategoryupdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id">
                    <div class="form-group">
                        @php
                        $cate = App\Models\category::get();
                      @endphp
                        <label class="float-left">Category Name</label>
                        <select class="form-control select select2-hidden-accessible" name="title" tabindex="-1" aria-hidden="true">
                            <option>Select</option>
                            @foreach ($cate as $data)
                            <option value="{{ $data->id }}">{{ $data->category }}</option>
                            @endforeach  
                            @if($errors->has('title'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                            </p>
                            @endif 
                        </select>
                    </div>


                    <div class="form-group">
                      
                      
                                <label class="float-left">Sub Category Name</label>
                               
                                <input class="form-control" type="text" name="subname" value="{{$item->subcategory}}">
                                @if($errors->has('subname'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('subname') }}</strong>
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
                <h3>Are you sure want to delete this Sub Category?</h3>
                <form action="{{ route('admin.subcategorydelete') }}" method="POST">
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