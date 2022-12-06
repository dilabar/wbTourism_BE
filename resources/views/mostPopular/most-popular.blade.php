@include('layouts.header')
@include('layouts.navbar')

<section class="most_popular py-5">
    <div class="container py-4">
       <div class="row">
          <header class="section-title">
             <h2 class="display-4">{{$popular_details->name}}</h2>
          </header>
          <div class="col-md-12 mb-2">
             <div class="text-center">
                <a href="{{$popular_details->book}}" target="_blank" class="btn btn-primary">Click to Book</a>
             </div>
          </div>
          <div class="col-md-12  pb-2">
             <div class="text-center p-2 embed-responsive embed-responsive-16by9">
                
                @if ($popular_details->vdo)
                 <video  class="embed-responsive-item" width="100%"  controls autoplay="true">
                    <source src="{{ asset('assets/video/'.@$popular_details->vdo)}}"  type="video/mp4">
                    Your browser does not support the video tag.
                 </video>
                 @endif
             </div>
          </div>

          <!-- <hr> -->
          
          <div class="col-md-12 ">
             <div class="about_place">
                <h3 class="most_popular_title display-6 text-line">About some information</h3>
                <div>
                   <h4 class="address_heading">Address &amp; contact information</h4>
                   <div class="content">
                      <i class='bx bx-map'></i>
                      <p>Senchal Road Opposite Ghoom-Degree College, Darjeeling, West Bengal 734102</p>
                   </div>
                   <div class="content">
                      <i class='bx bx-phone'></i>
                      <a href="tel:+0123456987">+0123 456 987</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

@include('layouts.footer')