@extends('layouts.myapp')

@section('content')

  <div class="page-title-area ptb-100">
    <div class="container">
      <div class="page-title-content">
        <h1>{{$details->title}}</h1>
        <p class="text-light">{{$details->banner_short_info}}</p>
        <!-- <ul>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="blog-details.html"><i class='bx bx-chevrons-right'></i>Destination Details</a></li>
      </ul> -->
      </div>
    </div>
    <div class="bg-image">
      <img src="{{$details->banner_image}}" alt="Demo Image">
    </div>
  </div>


<section class="destinations-details-section pt-100 pb-70">
  <div class="container">
   <h1>Template 2 Page under Construction</h1>

  </div>
</section>
  @endsection