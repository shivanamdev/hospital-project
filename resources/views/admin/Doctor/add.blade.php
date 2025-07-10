@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-8 offset-lg-2 card-header" >
        <h4 class="page-title pt-3">Add Doctor</h4>
    </div>
   
</div>
<div class="row">
    <div class="col-lg-8 offset-lg-2 py-2 card " >
        @if (session('status'))
        <div class="alert alert-success" id="successMessage">
        <a href="#" class="close" data-dismiss="alert" id="LOADING"  name="LOADING" aria-label="close">&times;</a> {{ session('status') }}
        </div>
        @endif
        <br>
        <form action="{{route('admin.doctoradd')}}" method="post" enctype="multipart/form-data">
            @csrf


           
             

                
               <div class="row">
                <div class="col-md-12" style="margin-bottom:15%;">
                   <div class="profile-img-wrap" style="margin-left:40%; border-radius:30%;">
                          
                    <img alt="doctor image" class="inline-block" id="blah" src="{{ asset('assets/img/ddlogo.png')}}"  style="border-radius:50%;">
              
                     <div class="fileupload btn">
                    <span class="btn-text"><i class="fa fa-plus"></i></span>
                    <input class="upload btn btn-outline-info" accept="image/*" type='file' id="imgInp" name="image" value="{{ old('image') }}">
                    @if($errors->has('image'))
                    <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                    <strong>{{ $errors->first('image') }}</strong>
                     </p>
                     @endif
                   </div>
                  </div>
                </div>
               </div>

          <div class="row">
            <div class="col-md-12">
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
                </p>
                @endif
            </div>
            </div>
          </div>
                  
               
             
             
           
            
           





            
            
            <div class="row">
                
                 <div class="col-md-6">
                   <div class="form-group">
                      <label>Appointment Charge</label>
                      <input class="form-control" type="text" name="appointment_charge" value="{{ old('appointment_charge') }}">
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
                        <select class="form-control select select2-hidden-accessible" name="department" tabindex="-1" aria-hidden="true">
                            <option>Select</option>
                            @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
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
                        <input class="form-control" type="text" name="education" value="{{ old('education') }}">
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
                                <input class="form-control" type="number" name="experience" value="{{ old('experience') }}">
                                @if($errors->has('experience'))
                                <p class="invalid-feedback text-danger" style="display:block!important;" role="alert">
                                <strong>{{ $errors->first('experience') }}</strong>
                                </p>
                                @endif
                        </div>
                    </div>
                </div>

            <div class="m-t-20 text-center">
                <button class="btn btn-primary  btn-block submit-btn" type="submit" >Add Doctor</button>
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