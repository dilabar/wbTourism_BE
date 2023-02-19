@extends('layouts.myapp')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/magnificpop.min.css') }}">
@endsection
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

 
  <style>
    /* .destinations-details-section .nav-item {
      margin-right: 20px;
    }

    .destinations-details-section .nav-tabs .nav-link.active {
      color: white;
      background-color: green;
      border-color: none;
    }

    .destinations-details-section .nav-tabs .nav-link {
      margin-bottom: 0;
      color: black;
      border-radius: 6px;
      border: 1px solid green;
    }

    .destinations-details-section .nav-tabs {
      border-bottom: none;
    } */

    /* .destinations-details-section img:hover {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    } */
  </style>
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
              {{-- <li class="nav-item" role="presentation">
                <button class="nav-link " id="nearby-amenties-tab" data-bs-toggle="tab" data-bs-target="#nearby-amenties" type="button" role="tab" aria-controls="nearby-amenties" aria-selected="true">Nearby Amenties</button>
              </li> --}}
           
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
                  @if($details->about_text)
                  @foreach($details->about_tab_content as $about_item)
                
                  @if($about_item->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($about_item->imagealignment=='left' | $about_item->imagealignment=='l')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$about_item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                           {{$about_item->text}}
                          </p>
                      </div>
                      @endif
                      @if($about_item->imagealignment=='right' | $about_item->imagealignment=='r')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
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
                  <p class="text-justify">
                  {{$about_item->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
                  @if(!empty($details->attractions_tab_content))
                  @foreach($details->attractions_tab_content as $atrItem)
                  @if ($atrItem->popular =='1')
                      
                  
                  @if(isset($atrItem->name))
                  <h3 class="text-capitalize">{{$atrItem->name}}</h3>
                  @endif
                  @if($atrItem->type=='textwithimage')
                  <div class="row align-items-center">
                  
                     @if($atrItem->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$atrItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                           {{$atrItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($atrItem->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                          {{$atrItem->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$atrItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p class="text-justify">
                  {{$atrItem->text}}
                  </p>
                  @endif
                  @endif
                  @endforeach
                  @endif
                  
                  @if(count($details->about_tab_some_info)> 0)
                
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
                  @foreach($details->how_to_reach_tab_content as $htrItem)
              
                  @if($htrItem->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($htrItem->imagealignment=='left' | $htrItem->imagealignment=='l')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                           {{$htrItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($htrItem->imagealignment=='right'| $htrItem->imagealignment=='r')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                          {{$htrItem->text}}
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
                  <p class="text-justify">
                  {{$htrItem->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="attractions" role="tabpanel" aria-labelledby="attractions-tab">
              @if(!empty($details->attractions_tab_content))
                  @foreach($details->attractions_tab_content as $atrItem)
                  @if(isset($atrItem->name))
                  <h3 class="text-capitalize">{{$atrItem->name}}</h3>
                  @endif
                  @if($atrItem->type=='textwithimage')
                  <div class="row align-items-center">
                  
                     @if($atrItem->imagealignment=='left')
                      <div class="col-md-4 col-sm-12  ">
                          <div class="image mb-30 ">
                              <img src="{{$atrItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                            {!! html_entity_decode($atrItem->text) !!}
                          </p>
                      
                      </div>
                      @endif
                      @if($atrItem->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30 text-justify">
                         {!! html_entity_decode($atrItem->text) !!}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$atrItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p class="text-justify">
                    {!! html_entity_decode($atrItem->text) !!}
                  </p>
                  @endif
                  @if(isset($atrItem->how_to_reach))
                  {{-- <h3 class="bold">How to reach</h3> --}}
                  <p> {!! html_entity_decode($atrItem->how_to_reach) !!} </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="stay" role="tabpanel" aria-labelledby="stay-tab">
              @if(!empty($details->stay_tab_content))
                  @foreach($details->stay_tab_content as $stItem)
                  <div class="card pb-1 mb-1">

                 
                  @if(isset($stItem->name))
                  <div class="card-header">
                     <h3 class="text-capitalize">{{$stItem->name}}</h3>
                  </div>
                 
                  @endif
                  <div class="card-body">

                  
                  @if($stItem->type =='textwithimage')
                  <div class="row align-items-center">
                     @if($stItem->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$stItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$stItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($stItem->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$stItem->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$stItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$stItem->text}}
                  </p>
                  @endif
                </div>
                    </div>
                  @endforeach
                  @endif
               
              </div>
              <div class="tab-pane fade show" id="nearby-amenties" role="tabpanel" aria-labelledby="nearby-amenties-tab">
              @if(!empty($details->nearby_amenties_tab_content))
                  @foreach($details->nearby_amenties_tab_content as $nbaItem)
                  @if($nbaItem->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($nbaItem->imagealignment=='left' | $nbaItem->imagealignment=='l')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$nbaItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$nbaItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($nbaItem->imagealignment=='right' | $nbaItem->imagealignment=='r')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30" >
                          {{$nbaItem->text}}
                          </p>
                      </div>
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$nbaItem->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$nbaItem->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
            </div>
      
          </div>
       
          <div class="col-lg-4 col-md-12">
           
              <aside class="widget-area">
                  <!-- <div class="widget widget-search mb-30">
                      <form class="search-form search-top">
                          <input type="search" class="form-control" placeholder="Search..." />
                          <button type="submit" class="btn-text-only">
                              <i class='bx bx-search-alt'></i>
                          </button>
                      </form>
                  </div>  -->
                  <div class="widget widget-video mb-30">
                    <!-- <div class="video-image">
                          <img src="../assets/img/top_product/coastal/sea1.JPG" alt="video" />
                      </div>  -->
                    
                    {{-- @if ($details->video_url)
                    <video  class="embed-responsive-item " width="100%"  controls autoplay="true">
                      <source src="{{ asset('uploads/video/'.@$details->video_url)}}"  type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                    @else --}}
                    
                        <div class="video-image">
                          @if ($details->video_image)
                              <img src="{{ $details->video_image }}" alt="video" />
                          @else
                              <img src="../assets/img/default/900x600.png" alt="video" />
                          @endif
                      </div>
                        <a href="{{$details->vedio_link}}" class="youtube-popup video-btn">
                            <i class='bx bx-right-arrow'></i>
                        </a>
                    {{-- @endif --}}
                  </div>
                  @isset($details->popular_place)
                       <div class="widget widget-article mb-30">
                      <h3 class="sub-title text-capitalize">Popular Places</h3>
                      @foreach($details->popular_place as $p)
                
                      @if($p->popular == '1')
                      <article class="article-item">
                          <div class="image">
                              <img src="{{$p->img}}" alt="Demo Image" />
                          </div>
                          <div class="content">
                              <h3>
                                  <a href="#" class="text-capitalize">{{$p->name}}</a>
                              </h3>
                             
                          </div>
                      </article>
                      @endif
                      @endforeach
                     
                  </div>
                  @endisset
                 
                  @isset($releted_destination )
                  @if(count($releted_destination)>0)
                      <div class="widget widget-gallery mb-30">
                      <h3 class="sub-title">Related top destinations</h3>
                      <ul class="instagram-post">
                        @foreach ($releted_destination as $item)
                             <li>
                                <a href="{{$item->url}}">
                              <img src="{{ $item->img }}" alt="Demo Image" width="100%" style="height: calc(140px - 34.5px);">
                              <i class='bx bx-link'></i>
                              <span>{{ $item->name }}</span>
                            </a>
                            </li>
                        @endforeach
                
                      </ul>
                  </div>
                  @endif 
                  @endisset
                 
                  @if ($details->map_url )
                      <div class="widget widget-gallery mb-30 box">
                    <h3 class="sub-title">Location</h3>
                    <div class="map_area">
                      <iframe src="{{ $details->map_url }}"  style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  </div>
                  @endif
                  
              </aside>
          </div>
      </div>
  </div>
</section>
@endsection
@section('script')
<script src="{{ asset('assets/js/magnificpop.min.js') }}"></script>
<script>
    $('.youtube-popup').magnificPopup({disableOn:320,type:'iframe',mainClass:'mfp-fade',removalDelay:160,preloader:false,fixedContentPos:false});
</script>
@endsection

  