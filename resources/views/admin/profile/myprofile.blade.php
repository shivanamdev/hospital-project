@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-7 col-6">
        <h4 class="page-title">My Profile</h4>
    </div>

    <div class="col-sm-5 col-6 text-right m-b-30">
        <a href="{{ route('admin.editprofile') }}" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
    </div>
</div>

<div class="card-box profile-header">
    <div class="row">
        <div class="col-md-12">
            <div class="profile-view">
                <div class="profile-img-wrap">
                    <div class="profile-img">
                        @if(!empty(Auth::user()->profile_photo_path))
                        <a href="#"><img class="avatar" src="{{asset('assets/img/adminprofile/'.Auth::user()->profile_photo_path)}}" alt="admin"></a>
                        @else
                        <img class="avatar" src="{{asset('assets/img/doctor-03.jpg')}}" alt="admin">
                        @endif
                    </div>
                </div>
                <div class="profile-basic">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="profile-info-left mb-5">
                                
                                {{-- <small class="text-muted">{{Auth::user()->id}}</small> --}}
                                <div class="staff-id">
                                    <h3 class="user-name m-t-5 mt-5 mb-0">{{Auth::user()->name}}</h3>
                                    
                                    Employee ID : {{Auth::user()->id}}</div>
                                    <br>
                                {{-- <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>  --}}
                            </div>
                        </div>
                        <div class="col-md-7 mt-4">
                            <ul class="personal-info mt-2">
                                <li>
                                    <span class="title">Phone:</span>
                                    <span class="text"><a href="#">{{Auth::user()->number}}</a></span>
                                </li>
                                <li>
                                    <span class="title">Email:</span>
                                    <span class="text"><a href="#">{{Auth::user()->email}}</a></span>
                                </li>
                                <li>
                                    <span class="title">Gender:</span>
                                    <span class="text">{{Auth::user()->gender}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>







@endsection