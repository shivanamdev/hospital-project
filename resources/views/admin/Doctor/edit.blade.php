@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 card-header">
        <h4 class="page-title pt-3">Edit Doctor</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card">
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.doctorupdate')}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="row">
                <div class="col-md-12" style="margin-bottom:15%;">

                <div class="profile-img-wrap" style="margin-left:40%; border-radius:30%;">
                    @if(!empty($data->image))    
                    <img alt="Doctor logo" class="inline-block" id="blah" src="{{ asset($data->image) }}" style="border-radius:50%;">
                    @else
                 <img alt="Doctor logo" class="inline-block" src="{{ asset('assets/img/ddlogo.png')}}" style="border-radius:50%;">
                 @endif
                  <div class="fileupload btn">
                 <span class="btn-text"><i class="fa fa-plus"></i></span>
                 <input class="upload btn btn-outline-info" accept="image/*" type='file' id="imgInp" value="{{ $data->image }}" name="image">
                 @if($errors->has('image'))
                 <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                 <strong>{{ $errors->first('image') }}</strong>
                  </p>
                  @endif
                </div>
               </div>

             </div>
            </div>
        



            <div class="row mb-3">
                <div class="col-sm-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" value="{{$data->id}}" name="id">
                    <input class="form-control" type="text" name="name" value="{{$data->name}}">
                    @if($errors->has('name'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                    </p>
                    @endif
                </div>
                </div>
               

                {{-- <div class="col-sm-6">
                    <div class="form-group">
                        <label>Image</label>
                        <div class="profile-upload">
                            <div class="mr-2">
                                <img alt="doctor image"  id="blah" src="{{ asset($data->image) }}" style="height: 53px;
                                width: 65px;">
                            </div>
                            <div class="upload-input">
                                <input class="form-control btn btn-outline-info" accept="image/*" type='file' id="imgInp" name="image" value="{{$data->image}}">
                                @if($errors->has('image'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                                 </p>
                                 @endif
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            
            





            
            
            <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                      <label>Appointment Charge</label>
                      <input class="form-control" type="text" name="appointment_charge" value="{{$data->appointment_charge}}">
                      @if($errors->has('appointment_charge'))
                      <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                      <strong>{{ $errors->first('appointment_charge') }}</strong>
                      </p>
                      @endif
                   </div>
                 </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label>Department</label>
                        <select class="select select2-hidden-accessible" name="department" tabindex="-1" aria-hidden="true">
                            <option>Select</option>
                            @foreach ($depart as $item)
                            <option value="{{ $item->id }}" 
                                 @if($item->id == $data->department_id)
                                        selected
                            @endif >{{ $item->title }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('department'))
                      <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                      <strong>{{ $errors->first('department') }}</strong>
                      </p>
                      @endif
                     </div>
                  </div>
              </div>
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Education</label>
                        <input class="form-control" type="text" name="education" value="{{$data->education}}">
                        @if($errors->has('education'))
                        <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                        <strong>{{ $errors->first('education') }}</strong>
                        </p>
                        @endif
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>experience</label>
                                <input class="form-control" type="number" name="experience" value="{{$data->experience}}">
                                @if($errors->has('experience'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('experience') }}</strong>
                                </p>
                                @endif
                        </div>
                    </div>
                </div>

            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit">Update Doctor</button>
            </div>
        </form>
    </div>
</div>


<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>


{{-- <!-- ckeditor -->
<script type="text/javascript">
    CKEDITOR.replace('des');
    </script>
<!-- ckeditor --> --}}

@endsection