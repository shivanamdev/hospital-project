
@extends('layouts.admin')

@section('content')
{{-- table --}}
<div class="row">

    <div class="col-sm-5 col-5">
        <h4 class="page-title">Pages List</h4>
    </div>
    <div class="col-sm-7 col-7 text-right m-b-30">
        <a href="{{route('admin.AddPage')}}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Page</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-striped custom-table mb-0 datatable">
                <thead>
                    <tr>
                        <th class="text-center">SNo</th>
                        <th  class="text-center">Page Name</th>
                        <th  class="text-center">Created Time</th>
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
                        <td  class="text-center">{{$item->page_name}}</td>
                        <td  class="text-center">{{$item->created_at->format('m/d/Y')}}</td>
                        <td class="text-center">
                            <div class="row float-right">
                                <span class="mr-2"><a class="btn btn-success btn-block" href="{{ url('admin/page/edit/'.$item->id) }}" ><i class="fa fa-pencil m-r-1 "></i></a></span>  
                                <span class="mr-2"><a class="btn btn-danger btn-block" href="#" data-toggle="modal" data-target="#delete_doctor{{$item->id}}"><i class="fa fa-trash-o m-l-1"></i></a></span>
                              </div>

                        </td>
                    </tr>
                    {{-- delete --}}
                    <div id="delete_doctor{{$item->id}}" class="modal fade delete-modal" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <img src="{{ asset('assets/img/sent.png')}}" alt="" width="50" height="46">
                                    <h3>Are you sure want to delete page?</h3>
                                    <form action="{{ route('admin.pagedelete') }}" method="POST">
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

@endsection