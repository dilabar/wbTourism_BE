@extends('layouts.myapp')

@section('content')
  <div class="page-title-area ptb-100">
    <div class="container">
      <div class="page-title-content">
        <h1>{{$details->title}}</h1>
        <p class="text-light">{{$details->banner_short_info}} </p>
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
   
 
      <!-- <div class="section-title">
          <h2>Oia, Greece</h2>
      </div> -->
      <div class="row">
       
          <div class="col-lg-8 col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">About</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link " id="how-to-reach-tab" data-bs-toggle="tab" data-bs-target="#how-to-reach" type="button" role="tab" aria-controls="how-to-reach" aria-selected="true">How to reach</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link " id="attractions-tab" data-bs-toggle="tab" data-bs-target="#attractions" type="button" role="tab" aria-controls="attractions" aria-selected="true">Attractions</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link " id="stay-tab" data-bs-toggle="tab" data-bs-target="#stay" type="button" role="tab" aria-controls="stay" aria-selected="true">Stay</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link " id="nearby-amenties-tab" data-bs-toggle="tab" data-bs-target="#nearby-amenties" type="button" role="tab" aria-controls="nearby-amenties" aria-selected="true">Nearby Amenties</button>
              </li>
           
            </ul>
            <div class="tab-content pt-70" id="myTabContent">
              <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="destination-details-desc mb-30">
                @if(!empty($details->slider_content))
               
                  <div class="row align-items-center">
                    
                      <!-- <div class="col-md-6 col-sm-12"> -->
                      <div class="single-slider owl-carousel">
                       @foreach($details->slider_content as $slider_item)
                       
                        <div class="image mb-30 p-2" >
                            <img src="{{$slider_item->img}}" alt="Demo Image" />
                        </div>
                        @endforeach
                        
                     
                 
                      </div>
                    
                  </div>
                  @endif
                  @if(!empty($details->about_tab_content))
                  @foreach($details->about_tab_content as $about_item)
                  @if($about_item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($about_item->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$about_item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$about_item->text}}
                          </p>
                      </div>
                      @endif
                      @if($about_item->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$about_item->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$about_item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$about_item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
                 
                  @if(!empty($details->about_tab_some_info))
                
                  <div class="info-content">
                      <h3 class="sub-title">Some Information</h3>
                      <div class="row">
                      @foreach($details->about_tab_some_info as $about_tab_some_info_item)
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class="{{$about_tab_some_info_item['icon']}}"></i>
                                  <h6><span>{{$about_tab_some_info_item['key']}} :</span> {{$about_tab_some_info_item['val']}} </h6>
                              </div>
                          </div>
                      @endforeach                
                      </div>
                  </div>
               @endif
               
              
              </div>
              </div>
              <div class="tab-pane fade show" id="how-to-reach" role="tabpanel" aria-labelledby="how-to-reach-tab">
                @if(!empty($details->how_to_reach_tab_content))
                  @foreach($details->how_to_reach_tab_content as $item)
                  @if($item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($item->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$item->text}}
                          </p>
                      </div>
                      @endif
                      @if($item->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$item->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="attractions" role="tabpanel" aria-labelledby="attractions-tab">
              @if(!empty($details->attractions_tab_content))
                  @foreach($details->attractions_tab_content as $item)
                  @if($item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($item->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$item->text}}
                          </p>
                      </div>
                      @endif
                      @if($item->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$item->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="stay" role="tabpanel" aria-labelledby="stay-tab">
              @if(!empty($details->stay_tab_content))
                  @foreach($details->stay_tab_content as $item)
                  @if($item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($item->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$item->text}}
                          </p>
                      </div>
                      @endif
                      @if($item->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$item->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="nearby-amenties" role="tabpanel" aria-labelledby="nearby-amenties-tab">
              @if(!empty($details->nearby_amenties_tab_content))
                  @foreach($details->nearby_amenties_tab_content as $item)
                  @if($item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($item->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$item->text}}
                          </p>
                      </div>
                      @endif
                      @if($item->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$item->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-12">
              <aside class="widget-area">
                  <div class="widget widget-search mb-30">
                      <form class="search-form search-top">
                          <input type="search" class="form-control" placeholder="Search..." />
                          <button type="submit" class="btn-text-only">
                              <i class='bx bx-search-alt'></i>
                          </button>
                      </form>
                  </div>
                  <div class="widget widget-video mb-30">
                      <div class="video-image">
                          <img src="../assets/img/top_product/coastal/sea1.JPG" alt="video" />
                      </div>
                      <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI" class="youtube-popup video-btn">
                          <i class='bx bx-right-arrow'></i>
                      </a>
                  </div>
                  <div class="widget widget-article mb-30">
                      <h3 class="sub-title">Popular Places</h3>
                      <article class="article-item">
                          <div class="image">
                              <img src="../assets/img/tour/batasia_loop.jpg" alt="Demo Image" />
                          </div>
                          <div class="content">
                              <span class="location"><i class='bx bx-map'></i>Darjeeling, West Bengal</span>
                              <h3>
                                  <a href="destination-details.html">Batasia Loop.</a>
                              </h3>
                              <ul class="list">
                                  <li><i class='bx bx-time'></i>3 Days</li>
                                  <li>₹1500</li>
                              </ul>
                          </div>
                      </article>
                      <article class="article-item">
                          <div class="image">
                              <img src="../assets/img/tour/tigerhill.jpg" alt="Demo Image" />
                          </div>
                          <div class="content">
                              <span class="location"><i class='bx bx-map'></i>Darjeeling, West Bengal</span>
                              <h3>
                                  <a href="destination-details.html">Tiger Hill.</a>
                              </h3>
                              <ul class="list">
                                  <li><i class='bx bx-time'></i>5 Days</li>
                                  <li>₹1200</li>
                              </ul>
                          </div>
                      </article>
                      <article class="article-item">
                          <div class="image">
                              <img src="../assets/img/tour/victoria.jpg" alt="Demo Image" />
                          </div>
                          <div class="content">
                              <span class="location"><i class='bx bx-map'></i>Kolkata, West Bengal</span>
                              <h3>
                                  <a href="destination-details.html">Victoria Memorial.</a>
                              </h3>
                              <ul class="list">
                                  <li><i class='bx bx-time'></i>7 Days</li>
                                  <li>₹2000</li>
                              </ul>
                          </div>
                      </article>
                  </div>
                  <div class="widget widget-gallery mb-30">
                      <h3 class="sub-title">Related top destinations</h3>
                      <ul class="instagram-post">
                          <li>
                              <img src="../assets/img/instagram1.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                          <li>
                              <img src="../assets/img/instagram2.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                          <li>
                              <img src="../assets/img/instagram3.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                          <li>
                              <img src="../assets/img/instagram4.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                          <li>
                              <img src="../assets/img/instagram5.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                          <li>
                              <img src="../assets/img/instagram6.jpg" alt="Demo Image">
                              <i class='bx bx-images'></i>
                          </li>
                      </ul>
                  </div>
                  <div class="widget widget-gallery mb-30 box">
                    <h3 class="sub-title">Location</h3>
                    <div class="map_area">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56862.42970068252!2d88.22965562372111!3d27.03326702147118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e42e654cf501bb%3A0x4175555979d4702a!2sDarjeeling%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1658735507581!5m2!1sen!2sin"  style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  </div>
              </aside>
          </div>
      </div>
  </div>
</section>
   @endsection