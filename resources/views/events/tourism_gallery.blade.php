@extends('layouts.myapp')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/viewer.min.css')}}">

@endsection
@section('content')
<section class="pt-100">
    <div class="section-title title-style">
        <h2>Tourism Event Gallery</h2>

    </div>
    <div class="event_tourism_gallery">
        <ul id="gallery">
            @foreach ($tourism_event as $item)
            <li >
                <div class="overLay">
                    <a href="#">
                        <img data-src="{{ $item->img }}" src="{{ asset('assets/img/default/loding_logo.png')}}"  id="picture" width="285" height="230"
                            alt="{{$item->name}}"></a>
                    <div class="layer">
                        <p class="name text-capitalize"> {{$item->name}}
                        </p>
                    </div>
                </div>
            </li>
            @endforeach
            
           
        </ul>
  
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