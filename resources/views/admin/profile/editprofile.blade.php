@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Edit Profile</h4>
    </div>
</div>
@if (session('status'))
<div class="alert alert-success" id="successMessage">
<a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
</div>
@endif


<form  action="{{ route('admin.profileupdate') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card-box">
        <h3 class="card-title">Basic Informations</h3>
        <div class="row">
            <div class="col-md-12">
               

                {{-- <div class=" profile-img-wrap form-group">
					<label class="control-label h6">Upload Logo</label>
					<div class="imgbox text-center" onclick="myFunction()"
						 style=" cursor: pointer;">
						<div class="imgbanner" style="z-index: 9; padding:20px;     margin-bottom: -47px;">
						</div>
                  <div class="form-group">
                   @if(!empty(Auth::user()->profile_photo_path))
                    <img src="{{asset('assets/img/adminprofile/'.Auth::user()->profile_photo_path)}}" class="rounded mx-auto d-block" alt="Admin profile" style="max-height:130px; z-index: 9;">
                    @else
                    <p id="banner"><img  class="rounded mx-auto d-block" src="{{asset('assets/img/user.jpg')}}"  alt="default_image"  id="output" width="200" /></p>
                 @endif
              </div>
              <div id="banner" class="text-center">
          
                  
                <img id="output" src="assets/img/user.jpg"
                     class="img-fluid" style="max-height:130px; z-index: 9;"><br>
                <a style="cursor: pointer" class="mt-3 btn btn-secondary text-white btn-sm">Change Logo</a>

            </div>
                        @if($errors->has('profile_photo_path'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('profile_photo_path') }}</strong>
                        </p>
                        @endif
					</div>
					<div class="upload">
						<div class="custom-file">
							<p class="d-none">
								<input onchange="loadFile(event)" type="file" class="custom-file-input" name="profile_photo_path" id="customFile">
								<label class="custom-file-label" for="customFile"></label></p>
						</div>
					</div>
				</div> --}}

               
               
               
                <div class="profile-img-wrap">
                    @if(!empty(Auth::user()->profile_photo_path))
                    <img class="inline-block"  id="blah" src="{{asset('assets/img/adminprofile/'.Auth::user()->profile_photo_path) }}" alt="user">
                    @else
                    <img class="inline-block"  src="{{asset('assets/img/user.jpg')}}" alt="user">
                    @endif

                    <div class="fileupload btn">
                        <span class="btn-text">edit</span>
                        <input class="upload" accept="image/*" type='file' id="imgInp" name="profile_photo_path">
                    </div>
                </div>
                
                <div class="profile-basic">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <input type="hidden" class="form-control" name="id" value="{{Auth::user()->id}}">
                                <label class="focus-label">Name</label>
                                <input type="text" name="name" class="form-control floating" value="{{Auth::user()->name}}">
                            </div>
                            @if($errors->has('name'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">Email</label>
                                <input type="email" class="form-control floating" name="email" value="{{Auth::user()->email}}">
                            </div>
                            @if($errors->has('email'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus">
                                <label class="focus-label">Phone Number</label>
                                <input type="number" class="form-control floating" name="mobile" value="{{Auth::user()->number}}">
                            </div>
                            @if($errors->has('mobile'))
                            <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                            </p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-focus select-focus">
                                <label class="focus-label">Gendar</label>
                                <select class="select form-control floating" name="Gendar" value="{{Auth::user()->Gender}}">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="text-center m-t-20">
        <button class="btn btn-primary submit-btn" type="submit">Save</button>
    </div>
</form>

<form  action="{{ route('admin.changepassword') }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="card-box">
    <h3 class="card-title">Password Change</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group form-focus">
                <input type="hidden" class="form-control" name="id" value="{{Auth::user()->id}}">
                <label class="focus-label">Password</label>
                <input type="text" class="form-control floating" name="password" value="">
            </div>
        </div>
        
        
    </div>
</div>
 
<div class="text-center m-t-20">
    <button class="btn btn-primary submit-btn" type="submit">Save</button>
</div>
</form>





<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>



{{-- <script>
	if ($('img.banner', this).attr('src') != '') {
		$("#banner").addClass("d-none");
	}
	var loadFile = function (event) {
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0]);
		$("#banner").removeClass("d-none");
		$(".imgbanner").addClass("d-none");
		output.onload = function () {
			URL.revokeObjectURL(output.src) // free memory
		}
	};

	function myFunction() {
		$('#customFile').trigger('click');
	}

</script> --}}

@endsection