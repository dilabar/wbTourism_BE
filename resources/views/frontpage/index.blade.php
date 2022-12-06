@include('layouts.header')
 

   <!--header start-->
   @include('layouts.navbar')
   <!-- Header End -->

   <!--banner section start-->
   @if(count($banner_list)>0)
   <div id="home" class="home-banner-area home-style-three">
      <div class="container-fluid p-0">
         <div class="banner-slider-two owl-carousel">
         @foreach($banner_list as $banner_item)
            <div class="slider-item item-{{$banner_item->slno}}"
               style="background: url({{$banner_item->img}}) no-repeat center;background-size: cover;">
               <div class="container banner-layer">
                  <div class="banner-content">
                     <span class="sub-title">{{$banner_item->name}}</span>
                     <h1>
                     {{$banner_item->slogan}}
                     </h1>
                     <p>
                     {{$banner_item->short_desc}}
                     </p>
                     @if ($banner_item->reference)
                     <a href="banner/details?template_id={{$banner_item->template_id}}&id={{$banner_item->reference}}" class="btn-primary">Destinations</a>
                     @else
                     <a href="#" class="btn-primary">Destinations</a>

                     @endif
                  </div>
               </div>
            </div>
            @endforeach
         </div>


      </div>
   </div>
   @endif
   <!--banner section end-->
   <!--Top Ten Product -->
   @if(count($product_list)>0)
   <section class="top-product  ">
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
                     <a href="product/details?template_id={{$product_item->template_id}}&id={{$product_item->id}}">
                        <div class="grid_4">
                           <div class="figure">
                              <div><img src="{{$product_item->img}}" alt="" width="auto"></div>
                              <article
                                 style="background: linear-gradient({{$product_item->gradient_text}});">
                                 <h3>{{$product_item->name}}</h3>
                                 {{$product_item->desc}}
                              </article>
                              <div class="layer-title"
                                 style="background:linear-gradient({{$product_item->gradient_text}})">
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
   @endif
   <!--Top Ten Product end-->




   <!-- Top destination -->
   @if(count($destination_list)>0)
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
                  <a class="destination-overlay text-white text-decoration-none" href="destination/details?template_id={{$destination_item->template_id}}&id={{$destination_item->id}}">
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
   @endif
   <!-- Top destination -->
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
   
   <div class="s-box">
      <div id="s-form">
         <div id="expand-s-box">
            <div id="expand-contract" class="collasped">
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

         <div id="bottom-section" class="btns hide">
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
               <img src="assets/img/social/facebook.png" width="20" height="20">
               <p class="text-light">Facebook</p>

            </li>
         </a>
         <a href="https://twitter.com/TourismBengal" target="_blank">
            <li style="background-color:#48c0eb">
               <img src="assets/img/social/twitter.png" width="20" height="20">
               <p class="text-light">Twitter</p>
            </li>
         </a>

         <a href="https://www.youtube.com/channel/UCArju4jBE3zv1Ndrv7AQ3tA" target="_blank">
            <li style="background-color:#FF0000">
               <img src="assets/img/social/youtube.jpg" width="20" height="20">
               <p class="text-light">YouYube</p>
            </li>
         </a>
         <a href="https://www.instagram.com/wbtourism/" target="_blank">
            <li style="background-color: #8134AF  ">
               <img src="assets/img/social/insta.png" width="20" height="20">
               <p class="text-light">Instragram</p>
            </li>
         </a>
      </ul>
   </div>
   <!-- social bar end  -->
   <!-- Plan Your Trip  -->

   <div id="side-toggle" class="test1">
      <div class="side-text" onclick="expandPlanForm()">&nbsp;&nbsp; Plan &nbsp; Your &nbsp; Trip &nbsp;</div>
      <div class="content">
         <div class="p-4 " style="box-shadow: var(--box-shadow);border-radius: 10px; background: #b4c89c29;;">
            <form>
               <div class="row">
                  <div class="col-lg-12 ">

                     <select class="form-select pt-2 mb-2" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Select place name</option>
                        <option value="1">Kolkata</option>
                        <option value="2">Santiniketan</option>
                        <option value="3">Siliguri</option>
                     </select>


                  </div>
                  <div class="col-lg-12">

                     <select class="form-select pt-2 mb-2" id="floatingSelect"
                        aria-label="Floating label select example">
                        <option selected>Select place name</option>
                        <option value="1">Darjeeling</option>
                        <option value="2">Santiniketan</option>
                        <option value="3">Purulia</option>
                     </select>


                  </div>
                  <div class="col-lg-12">
                     <div class="pt-2 mb-2">
                        <input type="date" class="form-control border" id="floatingInput">

                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="pt-2  mb-2">
                        <input type="date" class="form-control border" id="floatingInput">

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
   <!-- Plan Your Trip End  -->

 

   <!-- footer start-->
   @include('layouts.footer')

   <!-- footer end -->

