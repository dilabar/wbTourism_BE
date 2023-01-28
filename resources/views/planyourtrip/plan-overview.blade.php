@extends('layouts.myapp')
@section('css')
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
/>
@endsection
@section('content')

<style>
    .day-container {
       padding: 8px 10px;
       border: 1px solid #dbdbdb;
       margin-bottom: 15px;
       border-top: 1px solid #eee;
       background: #fff;
       border-radius: 5px;
    }

    .day-content p {
       margin: 0 0 2px 0;
       white-space: nowrap;
       max-width: 240px;
       overflow: hidden;
       text-overflow: ellipsis;
       font-weight: bold;
    }

    .day-content span {
       color: #666;
       font-size: 12px;
    }

    .transportation {
       background: #f7fbff;
       padding: 10px;
       overflow: hidden;
       position: relative;
       border-radius: 5px;
       border-left: 3px solid #bebebe;
    }

    .transportation-content {
       display: inline-block;
       width: calc(100% - 101px);
       position: relative;
    }

    .transportation-icon span {
       font-size: 12px;
       padding: 4px;
       border-radius: 15px;
       display: inline-block;
       background: #efefef;
    }

    .transportation-icon .chips i {
       font-size: 20px;
       padding: 0px 0px 0px 4px;
    }

    .transportation-content .name {
       line-height: 18px;
       display: inline-block;
       width: 100%;
       margin-bottom: 5px;
       /* font-weight: 600; */
    }
   

    .accommodation {
       background: #f7fbff;
       padding: 10px;
       overflow: hidden;
       position: relative;
       border-radius: 5px;
       border-left: 3px solid #ad735a;
       margin-top: 15px;
    }

    .accommodation-price-w {
       position: absolute;
       bottom: 0px;
       height: 26px;
       width: 100%;
    }

    .accommodation .actual-price {
       width: calc(100% - 65px);
       display: inline-block;
       vertical-align: middle;
    }

    .accommodation .actual-price .price {
       display: block;
       font-weight: 600;
       font-size: 14px;
    }

    .accommodation .button {
       width: 60px;
       height: 25px;
       line-height: 25px;
       text-align: center;
       display: inline-block;
       vertical-align: middle;
       font-weight: 600;
       background-color: var(--primary-color);
       color: #fff;
       font-size: 12px;
       height: auto;
       text-decoration: none;
    }

    .star-rating i {
       color: #FCC533;
    }

    .lunch-container {
       background: #FEF5CF;
       padding: 7px 10px;
       border-radius: 5px;
       color: #675c2d;
    }

    .attraction {
       background: #f7fbff;
       padding: 10px;
       overflow: hidden;
       position: relative;
       border-radius: 5px;
       border-left: 3px solid green;
       margin-top: 15px;
    }
    .guide{
      background: #a8835721;
      padding: 10px;
      overflow: hidden;
      position: relative;
      border-radius: 5px;
      margin-top: 15px;
      border-left: 3px solid var(--yellow-color);
    }

    .plan-img {
       width: 90px;
       min-height: 110px;
       overflow: hidden;
       border-radius: 5px;
       display: inline-block;
       vertical-align: top;
       margin-right: 7px;
       background-size: cover;
       background-color: #EAEBEF;
       object-fit: cover;
       object-position: center;
       min-height: 90px;
       max-height: 90px;
    }

    .plus-btn {
       position: absolute;
       /* left: 0; */
       right: 0;
       z-index: 3;

    }
 </style>
    <style>
      

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
      .logo-icon {
    position: absolute;
    left: 0;
    bottom: 100px;
    opacity: 0.2;
}
.logo-icon1 {
    position: absolute;
    right: 0;
    top: 150px;
    opacity: 0.2;
}
/* .explore .btn{
   font-size: 11px
} */
    </style>
<section class="py-5 header">
   <div class="logo-icon">
      <img src="http://127.0.0.1:8000/assets/img/logo/logo1.png" alt="logo-icon" width="240">
  </div>
  <div class="logo-icon1">
   <img src="http://127.0.0.1:8000/assets/img/logo/logo1.png" alt="logo-icon" width="260">
</div>
    <div class="container py-4">
       <div class="row">
          <header class="section-title">
             <h2 class="display-4">Plan Your Day - Overview <a href="{{route('tripUpdate',['$id'=>$plan_detail->_id])}}" class="btn btn-primary">Edit</a></h2>
            
          </header>
       </div>
    
       <div class="row">
        @foreach ($plan_detail->days as $key => $day)
        <div class="col-lg-3 mb-4">
            <div class="day-container">
               @if ($plan_detail->transport)
               <div class="day-content">
                   <p class="text-capitalize">
                      Day {{$key+1}} - Kolkata, {{$plan_detail->place_name}}
                   </p>
                   {{-- <span>07 Aug 2022, Sun</span> --}}
                 
                   <span>{{date('d M Y', strtotime($plan_detail->datefrom . " +$key days"))}}</span>
                </div>
               @endif
              
               <div class="day-notes">
                  <i class="icon-notes"></i>
               </div>
            </div>
          @if ($key == 0 && $plan_detail->transport)
          <div class="transportation">
            <img class="plan-img" src="{{asset('assets/img/trip_transport_default.jpg')}}">
            <div class="transportation-content">
               <div class="transportation-icon">
                  <span class="chips">
                     <i class="bx bxs-cable-car"></i>
                     <span class="transport-title">Transportation
                     </span>
                  </span>
               </div>
               <div class="name text-capitalize"><span class="text-capitalize">Kolkata To {{$plan_detail->place_name}}</span></div>
               
               <div class="explore">
                  @foreach ($transport_detail as $key => $tpd)
                 
                     
                     <a href="{{@$tpd->url}}" target="_blank" class="btn btn-sm btn-outline-success"> {!! $tpd->icon !!} {{@$tpd->name}}</a>
                  
                  @endforeach
                 
                  {{-- <a class="btn btn-sm  btn-outline-success">IRCTC</a> --}}
               </div>
               <div class="transportation-price-w">
               </div>
            </div>
         </div>
          @endif
          
            @if ($key == 0 && $plan_detail->accommodation_type =='single')
            <div class="accommodation">
                <img class="plan-img" src="{{asset('assets/img/trip_accommodation_default.jpg')}}">
                <div class="transportation-content">
                   <div class="transportation-icon" style="margin-bottom: 10px"><span class="chips"><i class="bx bx-home"></i>Accommodation</span>
                   </div>
                   <div class="name text-capitalize">{{$plan_detail->accommodation}}</div>
                   {{-- <div class="star-rating">
                      <i class="bx bxs--star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                   </div> --}}
                   <div class="duration">
                      <span class="icon-clock"></span><i class="time">1 hr </i>
                   </div>
                   <div class="accommodation-price-w">
 
                      {{-- <div class="actual-price">
                         <span class="price">INR 10400</span>
                      </div> --}}
                      <a href="#" target="_blank" class="button p-color">Book</a>
 
                   </div>
                </div>
             </div>
             @elseif ($day->accommodation && $plan_detail->accommodation_type =='multiple')
             <div class="accommodation">
                <img class="plan-img" src="{{asset('assets/img/trip_accommodation_default.jpg')}}">
                <div class="transportation-content">
                   <div class="transportation-icon " style="margin-bottom: 5px">
                     <span class="chips"><i class="bx bx-home"></i>Accommodation</span>
                   </div>
                   <div class="name text-capitalize">{{$day->accommodation}}</div>
                   {{-- <div class="star-rating">
                      <i class="bx bxs--star"></i>
                      <i class="bx bxs-star"></i>
                      <i class="bx bxs-star"></i>
                   </div> --}}
                   <div class="duration">
                      <span class="icon-clock"></span><i class="time">1 hr </i>
                   </div>
                   <div class="accommodation-price-w ">
 
                      {{-- <div class="actual-price">
                         <span class="price">INR 10400</span>
                      </div> --}}
                      <a href="#" target="_blank" class="button p-color">Book</a>
 
                   </div>
                </div>
             </div>

            @endif
           
            <div class="overview-container-item custom-event-lunch mt-2">
               <div class="lunch-container">
                  <div class="name"><i class="bx bx-time"></i> <span class="cont-title"> Lunch time</span></div>
               </div>
            </div>
            @if (Count($day->attraction) > 0)
                @foreach ($day->attraction as $atr)
                <div class="attraction">
                  <img class="plan-img" src="{{asset('assets/img/place/place-2018-05-28-10-3c9d3f84751bf6538fc1a51de1890452.jpg')}}">
                  <div class="transportation-content">
                     <div class="transportation-icon">
                        <span class="chips">
                          <i class='bx bxs-binoculars'></i>
                           <span class="transport-title"> Attractions
                           </span>
                        </span>
                     </div>
                     <div class="name "><span class="text-capitalize">{{$atr}}</span> </div>
                     {{-- <div class="duration">
                        <span class="icon-clock"></span><i class="time">2 hr 50 min</i>
                     </div> --}}
                     <div class="transportation-price-w">
                     </div>
                  </div>
               </div>
                @endforeach
            @endif
          
            @if ($day->guide)
            <div class="guide">
               <img class="plan-img" src="{{asset('assets/img/social/guide.png')}}">
               <div class="transportation-content">
                  <div class="transportation-icon">
                     <span class="chips">
                        <i class='text-success bx bxs-certification'></i>
                        <span class="transport-title">Certified Guide
                        </span>
                     </span>
                  </div>
                  <div class="name">{{$day->guide}} name</div>
                 
                  <div class="transportation-price-w">
                  </div>
               </div>
            </div> 
            @endif
           
            <div class="overview-container-item custom-event-lunch mt-2">
               <div class="lunch-container">
                  <div class="name"><i class="bx bx-time"></i> <span class="cont-title"> Dinner time</span></div>
               </div>
            </div>
         </div>
        @endforeach
          
         
       </div>
       <div class="text-center">
          <a href="#" class="btn btn-primary">Save Your Plan</a>
       </div>

    </div>
 
 </section>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
   var swiper = new Swiper(".mySwiper", {
     slidesPerView: 3,
     spaceBetween: 30,
     slidesPerGroup: 3,
     loop: true,
     loopFillGroupWithBlank: true,
     pagination: {
       el: ".swiper-pagination",
       clickable: true,
     },
     navigation: {
       nextEl: ".swiper-button-next",
       prevEl: ".swiper-button-prev",
     },
   });
 </script>
 @endsection