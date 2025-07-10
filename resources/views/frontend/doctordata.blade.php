<div class="row">
    @if(!empty($data) && $data->count())
    @foreach($data as $item)
    <div class="col-lg-6 mb-2">
      <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
      <div class="member d-flex align-items-start">
        <div class="pic"><img src="{{ asset($item->image) }}"  onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
        <div class="member-info">
          <h4>{{ $item->name }} ( {{ $item->education }} )</h4>
          <span>{{ $item->title }}</span>
          <p>{{ $item->experience }} Years of Experience</p>
          <p>Doctor Fee : ₹ {{ $item->appointment_charge }}</p>
        </div>
      </div>
      </a>
    </div>



<!---=======Doctor detail Model=======----->

<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Doctor Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

                <div class="col-lg-12 doctors">
                  <div class="member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset($item->image) }}" onerror="this.src={{ asset('assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>{{ $item->name }} ( {{ $item->education }} )</h4>
                      <span>{{ $item->title }}</span>
                      <p>{{ $item->experience }} Years of Experience</p>
                      <p>Doctor Fee : ₹ {{ $item->appointment_charge }}</p>
                    </div>
                  </div> 
                </div>
              
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      </div>
    </div>
  </div>
  
  <!-----======end model=======----->




    @endforeach 



</div>

<br>

@else
<p>no data found</p>
@endif
<div class="pagination justify-content-center">
{!! $data->links() !!}
</div>




