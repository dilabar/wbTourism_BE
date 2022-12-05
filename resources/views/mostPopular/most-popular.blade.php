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
                <a href="#" class="btn btn-primary">Click to Book</a>
             </div>
          </div>
          <div class="col-md-12  pb-2">
             <div class="text-center p-2 embed-responsive embed-responsive-16by9">
                @if($popular_details->vedio_link && !$popular_details->video_url )
{{-- 
                    <iframe width="100%" height="315" src="{{$popular_details->vedio_link}}" title="Darjeeling Steeped in serenity" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe> --}}
               
                     <embed src="http://www.youtube.com/v/m7zECJvm0aM?rel=0&autoplay=1&color1=0x2E2E2E&color2=0x5C5C5C&border=1&showinfo=0&showsearch=0&fs=1&hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="100%" height="720" allownetworking="internal"></embed>

                  {{-- <iframe width="100%" height="720" src="https://www.youtube.com/embed/m7zECJvm0aM;autoplay=1" title="{{$popular_details->name}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                @elseif ($popular_details->video_url)
                 <video  class="embed-responsive-item" width="100%"  controls autoplay="true">
                    <source src="{{ asset('uploads/video/'.@$popular_details->video_url)}}"  type="video/mp4">
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