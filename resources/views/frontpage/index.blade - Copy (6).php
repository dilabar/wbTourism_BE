<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta name="description" content="Category: Tourism" />
   <title>West Bengal Tourism</title>


   <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
   <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
   <link rel="stylesheet" href="assets/css/boxicons.min.css">
   <link rel="stylesheet" href="assets/css/animate.min.css" />
   <!-- <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css"> -->
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <!-- <link rel="stylesheet" href="assets/css/magnific-popup.min.css" /> -->
   <!-- <link rel="stylesheet" href="assets/css/plugin.css" /> -->
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
   <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
   <link rel="stylesheet" href="assets/css/mystyle.css" />
   <link rel="stylesheet" href="assets/css/sunstyle.css" />
   <link rel="stylesheet" href="assets/css/myresponsive.css" />
   <link rel="stylesheet" href="assets/css/theme-dark.css" />
   <link rel="stylesheet" href="assets/css/styles.css" />
   <link rel="icon" href="assets/img/logo/favicon.ico" type="image/png" />
</head>

<body>
   <!--preloader start-->
   <div id="loading">
      <div class="loader"></div>
   </div>
   <!--preloader end-->

   <!--header start-->
   @include('layouts.header')
   <!-- Header End -->
   @if(count($banner_list)>0)
   <!--banner section start-->
   <div id="home" class="home-banner-area home-style-three">
      <div class="container-fluid p-0">
         <div class="banner-slider-three owl-carousel">
        
         @foreach($banner_list as $banner_item)
            <div class="slider-item item-{{$banner_item->slno}}"
               style="background: url({{$banner_item->img}}) no-repeat center;background-size: cover">
               <div class="container">
                  <div class="banner-content">
                     <span class="sub-title">{{$banner_item->name}}</span>
                     <h1>
                     {{$banner_item->slogan}}
                     </h1>
                     <p>
                     {{$banner_item->short_desc}}
                     </p>
                     <a href="#" class="btn-primary">Destinations</a>
                  </div>

               </div>
            </div>
            @endforeach
        
          
         </div>


      </div>
   </div>
   @endif
   @if(count($product_list)>0)
   <section class="top-product pt-100 ">
      <div class="container">
         <div class="section-title title-style wow right-animation" data-wow-duration="1s" data-wow-delay="0.1s">

            <span style="width:1px;height:10px;background-color:#518117;"></span>
            <h2>
               <span>Explore</span>
               <span style="color:#518117;">B</span><span style="color:#067C67">e</span><span
                  style="color: #0E538D;">n</span><span style="color: #4D4788;">g</span><span
                  style="color:#874784 ;">a</span><span style="color: #D12150;">l</span>
            </h2>

         </div>
         <div class="row">
            <div class="col-md-12 col-lg-12 ">
               <div class="tours-slider top-style-two owl-carousel mb-30">
               @foreach($product_list as $product_item)
                  <div class="boxes">
                     <a href="#">
                        <div class="grid_4">
                           <div class="figure">
                              <div><img src="{{$product_item->img}}" alt=""></div>
                              <article
                                 style="background:linear-gradient({{$product_item->gradient_text}});">
                                 <h3>{{$product_item->name}}</h3>
                                 {{$product_item->desc}}
                              </article>
                              <div class="layer-title"
                                 style="background:linear-gradient({{$product_item->gradient_text}});">
                                 <h2 class="text-center">{{$product_item->name}}</h2>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach
                 
                  
                 
             
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--banner section end-->

   @endif

   @if(count($destination_list)>0)
   <!-- Top destination -->
   <section id="explore-thng" class="bg wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="container pb-3">
         <div class="section-title title-style pt-60" data-aos="fade-up">
            <h2>Top <span style="color:#518117;">De</span><span style="color:#067C67">st</span><span
                  style="color: #0E538D;">in</span><span style="color: #4D4788;">a</span><span
                  style="color:#874784 ;">t</span><span style="color: #D12150;">io</span><span
                  style="color:#F48C18">ns</span></h2>
            <!-- <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                  Each time we travel, we see the world with new eyes.</p> -->
         </div>
         <div class="row">
          @foreach($destination_list as $destination_item)
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="{{$destination_item->img}}" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="#">
                     <h5 class="text-white">{{$destination_item->name}}</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            @endforeach
         
            <div class="cta-btn text-center">
               <a href="#" class="btn-primary">Show More</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Top destination -->
   @endif
   @if(count($festival_list1)>0 || count($festival_list2)>0)
   <!-- Things to do in west bengal start -->

   <section id="events">
      <div class="section-title title-style">
         <!-- <h4 class="text-right text-primary text-uppercase" style="letter-spacing: 4px; font-size: 25px;"><span
                style="color:#518117 ;">E</span><span style="color:#067C67">x</span><span
                style="color: #0E538D;">c</span><span style="color: #4D4788;">i</span><span
                style="color:#874784 ;">t</span><span style="color: #D12150;">i</span><span
                style="color:#F48C18">ng</span></h4> -->
         <h2>Festivals & Events In <span style="color:#518117;">B</span><span style="color:#067C67">e</span><span
               style="color: #0E538D;">n</span><span style="color: #4D4788;">g</span><span
               style="color:#874784 ;">a</span><span style="color: #D12150;">l</span></h2>
      </div>
      <div class="events-box">
       @if(count($festival_list1)>0)
         <div class="owl-carousel slider-up mb-2">
          @foreach($festival_list1 as $festival_item1)
            <div class="item">
               <div class="card">
                  <img src="{{$festival_item1->img}}">
                  <div class="bg-layer">
                     <p>{{$festival_item1->name}}</p>
                  </div>
               </div>
            </div>
            @endforeach  
         </div>
         @endif
         @if(count($festival_list2)>0)
         <div class="owl-carousel slider-down">
          @foreach($festival_list2 as $festival_item2)
            <div class="item">
               <div class="card">
                  <img src="{{$festival_item2->img}}">
                  <div class="bg-layer">
                     <p>{{$festival_item2->name}}</p>
                  </div>
               </div>
            </div>
            @endforeach  
         </div>
         @endif
      </div>
      <div class="cta-btn text-center mt-5">
         <a href="#" class="btn-primary">Show More</a>
      </div>
   </section>
    @endif
   @if(count($section_list)>0)
   <!-- *********************************   tab design   ****************************** -->
   <section id="autotab" class="slider-tab tab-section mt-5">

      <div class="container">
         <div class="tab-bar  mb-30">
            <ul id="owl-custom-dots" class="owl-dots nav nav-tabs d-flex justify-content-between" id="myTab"
               role="tablist">
               @php
               $i=0;
               @endphp
               @foreach($section_list as $section_item)
               <li class="nav-item" role="presentation">
                  <button class="owl-dot nav-link @if ($i==0) active @endif" data-bs-toggle="tab" type="button">{{$section_item->name}}</button>
               </li>
               @php
               $i++;
               @endphp
               @endforeach  
            
            </ul>
         </div>
         <div class="tab-slider owl-carousel mb-30">

               @php
               $i=0;
               @endphp
               @foreach($section_list as $section_item)
               <div class="slider-item item-one">
                  <div class="row">
                     <div class="col-lg-6 col-sm-12">
                        <div class="img-box">
                           <div class="box1 wow right-animation">
                              <img src="{{$section_item->img}}" alt="">
                           </div>
                           <div class="box2 wow fadeup-animation">
                              <img src="{{$section_item->thumb}}" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-12">
                        <div class="my-content">
                           <div class="title">
                           {{$section_item->name}}
                           </div>
                           <div class="content-text">
                              <p>{{$section_item->desc}}</p>
                           </div>
                           <div class="cta-btn">
                              <a href="tabs/wbtdc_llist.html" class="btn-primary">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @php
               $i++;
               @endphp
         @endforeach  
            
         
         </div>


   </section>
   <!-- *******  End Tab Section   *********** -->
  @endif
  @if(count($gallery_list)>0)
   <!-- Gallery section start -->


   <section id="galary" class=" pt-70 pb-100  bg-pat wow fadeup-animation " data-stellar-background-ratio="0.5">

      <div class="container">
         <div class="section-title title-style">
            <h2> <span style="color:#518117;">G</span><span style="color:#067C67">a</span><span
                  style="color: #0E538D;">l</span><span style="color: #4D4788;">l</span><span
                  style="color:#874784 ;">e</span><span style="color: #D12150;">ry</span></h2>
         </div>
         <div class="row">
         @foreach($gallery_list as $gallert_item)
         
            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="{{$gallert_item->img}}" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>{{$gallert_item->name}}</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
            @endforeach  
          
         </div>
      </div>
   </section>
   <!-- Gallery section end -->
   @endif
   @if(count($testimonial_list)>0)
   <section id="testimonial-section" class="pt-70 pb-100" style="position:relative;">
      <div class="container">
         <div class="section-title title-style">
            <h2 style="font-family: designFont;font-size:40px;margin-top: -26px;">Testimonial</h2>
         </div>

         <div class="row">
            <div class="col-lg-12">
               <div class="testimonial-slider owl-carousel">
               @foreach($testimonial_list as $testimonial_item)
                  <div class="bg-light" style="border-radius:10px;">
                     <span class="icon fa fa-quote-left"></span>
                     <p class="description">
                     {{strip_tags($testimonial_item->desc)}}
                     </p>
                     <div class="testimonial-content">
                        <img src="{{$testimonial_item->img}}" alt="">
                     </div>
                  </div>
                  @endforeach 
               
               </div>

            </div>
         </div>
      </div>
      <div class="shape shape-1"><img src="assets/img/shape1.png" alt="Background Shape"></div>
      <div class="shape shape-2"><img src="assets/img/shape-8.png" alt="Background Shape"></div>
      <div class="shape shape-3"><img src="assets/img/shape3.png" alt="Background Shape"></div>
      <div class="shape shape-4"><img src="assets/img/shape4.png" alt="Background Shape"></div>
   </section>
   @endif
   <!-- <section class="trip-plan pt-70 pb-2 ">
      <div class="container">
         <div class="section-title title-style">
            <h2>Plan Your <span style="color:#518117;">T</span><span style="color: #0E538D;">r</span><span
                  style="color:#874784 ;">i</span><span style="color: #D12150;">p</span></h2>
         </div>
         <div class="p-4 " style="box-shadow: var(--box-shadow);border-radius: 20px; background: #b4c89c29;;">
            <form>
               <div class="row">
                  <div class="col-lg-6 ">
                     <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                           <option selected>Select place name</option>
                           <option value="1">Kolkata</option>
                           <option value="2">Santiniketan</option>
                           <option value="3">Siliguri</option>
                        </select>
                        <label for="floatingSelect">From</label>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                           <option selected>Select place name</option>
                           <option value="1">Darjeeling</option>
                           <option value="2">Santiniketan</option>
                           <option value="3">Purulia</option>
                        </select>
                        <label for="floatingSelect">To</label>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-floating pt-2 mb-3">
                        <input type="date" class="form-control" id="floatingInput">
                        <label for="floatingInput">Start Date</label>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-floating pt-2  mb-3">
                        <input type="date" class="form-control" id="floatingInput">
                        <label for="floatingInput">End Date</label>
                     </div>
                  </div>
               </div>
               <div class="text-center">
                  <a href="trip-plan-overview.html" class="btn btn-primary">Start Planning</a>
               </div>

            </form>
         </div>
      </div>
      <div class="shape shape-1"><img src="assets/img/shape1.png" alt="Background Shape"></div>
      <div class="shape shape-2"><img src="assets/img/shape-8.png" alt="Background Shape"></div>
      <div class="shape shape-3"><img src="assets/img/shape3.png" alt="Background Shape"></div>
      <div class="shape shape-4"><img src="assets/img/shape4.png" alt="Background Shape"></div>
   </section> -->

   <div class="s-box">
      <div id="s-form">
         <div id="expand-s-box">
            <div id="expand-contract">
               <div class="booking-form">
                  <form>


                     <div class="form-floating pt-1">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                           <option selected>Wildlife </option>
                           <option value="1">Festivals & Events</option>
                           <option value="2">Hotels</option>
                           <option value="3">Himalayas</option>
                           <option value="4">Coaster</option>
                           <option value="5">Heritage</option>
                        </select>
                        <label for="floatingSelect">I'm looking for</label>
                     </div>
                     <div class="form-floating pt-1">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                           <option selected>-- Select --</option>
                           <option value="1">Sundarban</option>
                           <option value="2">Dooars</option>

                        </select>

                     </div>

                     <div class="form-btn pt-1">
                        <button class="btn btn-outline-primary w-100">Find my perfect vacation</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>

         <div id="bottom-section" class="btns">
            <button class="btn btn-success " onclick="expandContract()">Customise Your Experience <i
                  class='bx bx-chevrons-up'></i></button>
         </div>
      </div>
   </div>


   <!--Plan to trip start-->

   <!-- social bar start  -->

   <div class="sticky-container">
      <ul class="sticky">
         <a href="https://www.facebook.com/tourismwb" target="_blank">
            <li style="background-color:#3b5998;">
               <img src="assets/img/logo/facebook.png" width="20" height="20">
               <p class="text-light">Facebook</p>

            </li>
         </a>
         <a href="https://twitter.com/TourismBengal" target="_blank">
            <li style="background-color:#48c0eb">
               <img src="assets/img/logo/twitter.png" width="20" height="20">
               <p class="text-light">Twitter</p>
            </li>
         </a>

         <a href="https://www.youtube.com/channel/UCArju4jBE3zv1Ndrv7AQ3tA" target="_blank">
            <li style="background-color:#FF0000">
               <img src="assets/img/logo/youtube.jpg" width="20" height="20">
               <p class="text-light">YouYube</p>
            </li>
         </a>
         <a href="https://www.instagram.com/wbtourism/" target="_blank">
            <li style="background-color: #8134AF  ">
               <img src="assets/img/logo/insta.png" width="20" height="20">
               <p class="text-light">Instragram</p>
            </li>
         </a>
      </ul>
   </div>
   <!-- social bar end  -->
   <!-- Plan Your Trip  -->
   <!-- <div class="plan_btn">

      <a href="#">Plan Your Trip</a>
   </div> -->
   <div id="test2" class="hidden-xs container sidebar sidebar-right" data-status="closed" >
      <div class="toggler" onclick="expandPlanForm()">
         &nbsp; plan &nbsp; your &nbsp; trip 
         <!-- <span class="glyphicon glyphicon-chevron-right red-text"
            style="display: none;">&nbsp;</span> <span class="glyphicon glyphicon-chevron-left blue-text"
            style="display: block;"></span> -->
      </div>
      <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg1-12" data-side="right">

            <!-- <div class="request_heading">
               <p>Plan Your Trip</p>
            </div> -->
            <div class="clearfix"></div>
            <div class="requestForm">
               <div class="p-4 " style="box-shadow: var(--box-shadow);border-radius: 10px; background: #b4c89c29;;">
                  <form>
                     <div class="row">
                        <div class="col-lg-12 ">
                           <div class="form-floating">
                              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                 <option selected>Select place name</option>
                                 <option value="1">Kolkata</option>
                                 <option value="2">Santiniketan</option>
                                 <option value="3">Siliguri</option>
                              </select>
                              <label for="floatingSelect">From</label>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-floating">
                              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                 <option selected>Select place name</option>
                                 <option value="1">Darjeeling</option>
                                 <option value="2">Santiniketan</option>
                                 <option value="3">Purulia</option>
                              </select>
                              <label for="floatingSelect">To</label>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-floating pt-2 mb-3">
                              <input type="date" class="form-control" id="floatingInput">
                              <label for="floatingInput">Start Date</label>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <div class="form-floating pt-2  mb-3">
                              <input type="date" class="form-control" id="floatingInput">
                              <label for="floatingInput">End Date</label>
                           </div>
                        </div>
                     </div>
                     <div class="text-center">
                        <a href="trip-plan-overview.html" class="btn btn-primary">Start Planning</a>
                     </div>
      
                  </form>
               </div>
            </div>
         </div>
      </div>
     
   </div>
   <!-- Plan Your Trip End  -->

   <!--RIVER FLOW ANIMNATED start-->
   <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
         <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
         <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
         <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
         <use xlink:href="#wave-path" x="50" y="9" fill="#090031">
      </g>
   </svg>
   <!--RIVER FLOW ANIMNATED end-->

   <!-- footer start-->
   @include('layouts.footer')
   <!-- footer end -->

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->
   <script src="assets/js/jquery.nice-select.min.js"></script>
   <!-- <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/jquery.filterizr.min.js"></script> -->

   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/meanmenu.min.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <!-- <script src="assets/js/form-validator.min.js"></script>
         <script src="assets/js/contact-form-script.js"></script>
         
         <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
   <script src="assets/js/myscript.js"></script>


   <!-- <script src="assets/js/plugin.js"></script> -->
   <script src="assets/js/scripts.js"></script>
   <script>

      $(document).ready(function () {
         //console.log("ready to load");
         // Wow Animation JS Start
         new WOW().init();
         // Wow Animation JS Start
      });
      $(document).ready(() => {
         'use strict';

         /* $(".content-holder .full-height-wrap").css({
             height: $(".content-holder").innerHeight(true)
         });*/

         var owl = $('.owl-carousel'),
            item,
            itemsBgArray = [], // to store items background-image
            itemBGImg;

         /* owl.each(function(index){
             
             $(this).owlCarousel({
                items: 1,
                margin:0,
                smartSpeed: 1000,
                autoplay: true,
                autoplayTimeout: auttime,
                autoplaySpeed: 1000,
                loop: true,
                //nav: true,
                //navText: false,
                rtl: rtlt,
                onTranslated: function () {
                   changeNavsThump();
                }
             });
          });*/
         var auttime = eval($(this).data("attime"));
         var rtlt = eval($(this).data("rtlt"));

         owl.owlCarousel({
            items: 1,
            margin: 0,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: auttime,
            autoplaySpeed: 1000,
            loop: true,
            nav: true,
            navText: false,
            rtl: rtlt,
            onTranslated: function () {
               changeNavsThump();
            }
         });

         $('.active').addClass('anim');

         var owlItem = $('.owl-item'),
            owlLen = owlItem.length;
         /* --------------------------------
           * store items bg images into array
         --------------------------------- */
         $.each(owlItem, function (i, e) {
            itemBGImg = $(e).find('.owl-item-bg').attr('src');
            itemsBgArray.push(itemBGImg);
         });

         /* --------------------------------------------
           * nav control thump
           * nav control icon
         --------------------------------------------- */
         var owlNav = $('.owl-nav'),
            el;

         $.each(owlNav.children(), function (i, e) {
            el = $(e);
            // append navs thump/icon with control pattern(owl-prev/owl-next)
            el.append('<div class="' + el.attr('class').match(/owl-\w{4}/) + '-thump">');
            el.append('<div class="' + el.attr('class').match(/owl-\w{4}/) + '-icon">');
         });

         /*-------------------------------------------
           Change control thump on each translate end
         ------------------------------------------- */
         function changeNavsThump() {
            var activeItemIndex = parseInt($('.owl-item.active').index()),
               // if active item is first item then set last item bg-image in .owl-prev-thump
               // else set previous item bg-image
               prevItemIndex = activeItemIndex != 0 ? activeItemIndex - 1 : owlLen - 1,
               // if active item is last item then set first item bg-image in .owl-next-thump
               // else set next item bg-image
               nextItemIndex = activeItemIndex != owlLen - 1 ? activeItemIndex + 1 : 0;

            $('.owl-prev-thump').css({
               backgroundImage: 'url(' + itemsBgArray[prevItemIndex] + ')'
            });

            $('.owl-next-thump').css({
               backgroundImage: 'url(' + itemsBgArray[nextItemIndex] + ')'
            });
         }
         changeNavsThump();
      });
   </script>

</body>

</html>