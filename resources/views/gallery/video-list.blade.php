@extends('layouts.myapp')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/viewer.min.css')}}">

@endsection
@section('content')

<section class="pt-100">
    <div class="section-title title-style">
        <h2 class="text-capitalize">Gallery {{$title}}</h2>
    </div>
    <div class="col-md-10 offset-md-1">
        <div class="media-gallery">
            <ul >
                @foreach ($gallery_detail as $item)
                <iframe src="{{ $item->src }}" frameborder="0" height="250"  allowfullscreen></iframe>
                @endforeach
                
               
            </ul>
        </div>
    </div>


</section>
@endsection


@section('script')
<script src="{{ asset('assets/js/viewer.min.js')}}"></script>
<script>

const gallery = new Viewer(document.getElementById('gallery'),{
    inline: false,
    rotatable:false,
    scalable:false,
    zoomable:false,
    movable:false
});

</script>  


@endsection