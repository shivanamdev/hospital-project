@extends('layouts.admin')

@section('content')


<div class="row"> 
<div class="col-sm-12 col-8">
    @if (session('status'))
    <div class="alert alert-success" id="successMessage">
    <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
    </div>
    @endif
</div>
</div>
<div class="row">
   
    <div class="col-sm-4 col-3">
        <h4 class="page-title">Doctors List</h4>
       
    </div>
    <div class="col-sm-8 col-9 text-right m-b-20">
        <a href="{{ route('admin.doctorview') }}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
       
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-border table-striped custom-table datatable mb-0">
                <thead>
                    <tr>
                      
                        <th class="text-center">SNo</th>
                        <th  class="text-center">Name</th>
                        <th  class="text-center">Department</th>
                        <th  class="text-center">Appointment Charge</th>
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
                        <td  class="text-center"><img width="28" height="28" src="{{ asset($item->image) }}" class="rounded-circle m-r-5" alt="">{{$item->name}}</td>
                        <td  class="text-center">{{$item->title}}</td>
                        <td  class="text-center">{{$item->appointment_charge}}</td>
                        <td  class="text-center">{{$item->created_at->format('m/d/Y')}}</td>
                        <td class="text-right">
                              <div class="row float-right">
                                <span class="mr-2"><a class="btn btn-success btn-block" href="{{ url('admin/doctor/edit/'.$item->id) }}" ><i class="fa fa-pencil m-r-5 "></i></a></span>  
                                <span class="mr-2"><a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#deletedoctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i></a></span>
                              </div>

                            {{-- <div class="dropdown dropdown-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ url('admin/Doctor/edit/'.$item->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#deletedoctor{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div> --}}
                        </td>
                    </tr>
                    {{-- delete Modal --}}
<div id="deletedoctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="{{ asset('assets/img/sent.png')}}" alt="" width="50" height="46">
                <h3>Are you sure want to delete this doctor?</h3>
                <form action="{{ route('admin.doctordelete') }}" method="POST">
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



                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection