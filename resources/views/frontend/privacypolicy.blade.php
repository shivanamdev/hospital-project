@extends('layouts.frontend')

@section('content')
<main id="main">
    <section id="about" class="about mt-5">   
        <div class="container">
            <div class="row">
                <div class="section-title mt-5">
                    <h2>{{$page->page_name ?? 'data is not found'}}</h2>
                </div>
                <div class="col-lg-12 text-justify">
                    <p>{!! $page->description ?? 'data is not found' !!}</p>
                </div> 
            </div>
        </div>
    </section>
</main>
@endsection