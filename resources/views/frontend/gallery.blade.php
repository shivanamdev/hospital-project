@extends('layouts.frontend')

@section('content')


<main id="main">
    
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery mt-5" >
      <div class="container">
        <div class="section-title">
          <h2 class="mt-5">Gallery</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">
          @foreach($gallery as $item)
        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset($item->gicon) }}" class="galelry-lightbox">
              <img src="{{ asset($item->gicon) }}" onerror="this.src={{ asset('/frontend/assets/img/gallery/gallery-1.jpg') }}" alt="" width="100%" height="350">
            </a>
          </div>
        </div>
        @endforeach
      

      </div>
        <div class="row g-0">
            @foreach($galleryimage as $row)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{ asset($row->images) }}" class="galelry-lightbox">
                <img src="{{ asset($row->images) }}" onerror="this.src={{ asset('/frontend/assets/img/gallery/gallery-1.jpg') }}" alt="" width="100%" height="350">
              </a>
            </div>
          </div>
          @endforeach
        

        </div>
      </div>

    </section><!-- End Gallery Section -->
    

    
  </main><!-- End #main -->
@endsection