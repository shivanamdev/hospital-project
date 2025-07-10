@extends('layouts.admin')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-sm-5 col-5">
            <h4 class="page-title">Contact</h4>
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
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Query</th>
                            <th class="text-center">Created At</th>
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
                            <td class="text-center">{{$item->name}}</td>
                            <td class="text-center">{{$item->email}}</td>
                            <td class="text-center">{{$item->msg}}</td>
                            <td class="text-center">{{$item->created_at->format('m/d/Y')}}</td>
                            <td class="text-right">
                                <div class="row float-right">
                                    <span class="mr-2"><a class="btn btn-success btn-block" href="{{ url('admin/contact/edit/'.$item->id) }}" ><i class="fa fa-pencil m-r-5 "></i></a></span>  
                                    <span class="mr-2"><a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#delete_contact{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i></a></span>
                                  </div>



                                {{-- <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="edit-department.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_contact{{$item->id}}"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                        <div id="delete_contact{{$item->id}}" class="modal fade delete-modal" role="dialog">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <img src="{{asset('assets/img/sent.png')}}" alt="" width="50" height="46">
                                        <h3>Are you sure want to delete this Contact ?</h3>
                                        <form action="{{ route('admin.contactdelete') }}" method="POST">
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
</div>






@endsection