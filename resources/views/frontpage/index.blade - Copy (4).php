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
   <header class="header-area">
      <div class="top-header-area">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-7">
                  <div class="contact-info">
                     <div class="content">
                        <i class='bx bx-phone'></i>
                        <a href="tel:+0123456987">+0123 456 987</a>
                     </div>
                     <div class="content">
                        <i class='bx bx-map'></i>
                        <a href="#">Mon-Fri: 8 AM – 7 PM</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-5">
                  <div class="side-option">
                     <div class="item">
                        <div class="language">
                           <a href="#language" id="languageButton" class="btn-secondary">
                              Language <i class='bx bxs-chevron-down'></i>
                           </a>
                           <ul class="menu">
                              <li class="menu-item">
                                 <a href="#" class="menu-link">
                                    <img src="assets/img/flag-uk.png" alt="flag">
                                    English
                                 </a>
                              </li>
                              <li class="menu-item"><a href="#" class="menu-link">
                                    <img src="assets/img/india.png" alt="flag">
                                    বাংলা</a>
                              </li>

                           </ul>
                        </div>
                     </div>
                     <div class="item">
                        <a href="#" class="btn-secondary">
                           Login <i class='bx bx-log-in-circle'></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-navbar-area">
         <div class="main-responsive-nav">
            <div class="container">
               <div class="main-responsive-menu">
                  <div class="logo">
                     <a href="{{url('/')}}">
                        <img src="assets/img/logo1.png" class="logo1" alt="Logo" style="width: 160px;">
                        <img src="assets/img/logo1.png" class="logo2" alt="Logo" style="width: 160px;">
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <div class="main-nav">
            <div class="container">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="{{url('/')}}">
                     <img src="assets/img/logo1.png" class="logo1" alt="Logo">
                     <img src="assets/img/logo1.png" class="logo2" alt="Logo">
                  </a>
                  <div class="collapse navbar-collapse mean-menu">
                     <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <a href="#explore-thng" class="nav-link ">Destination</a>
                        </li>
                        <li class="nav-item">
                           <a href="#galary" class="nav-link ">Gallary</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link toggle">Publications<i class='bx bxs-chevron-down'></i></a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="#" class="nav-link">News Letter</a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a href="#" class="nav-link">Article</a>
                              </li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link toggle">Tourism Corner<i class='bx bxs-chevron-down'></i></a>
                           <ul class="dropdown-menu">
                              <li class="nav-item">
                                 <a href="{{url('/tsp')}}" class="nav-link">Tourism Service Provider</a>
                              </li>
                           </ul>
                        </li>

                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!-- Header End -->
   @if(count($banner_list)>0)
   <!--banner section start-->
   <div id="home" class="home-banner-area home-style-three">
      <div class="container-fluid p-0">
         <div class="banner-slider-three owl-carousel">
         @foreach($banner_list as $banner_item)
            <div class="slider-item"
               style="background: url('{{ asset('/' . $banner_item->image_path) }}') no-repeat center;background-size: cover">
               <div class="container">
                  <div class="banner-content">
                     <span class="sub-title">{{$banner_item->title}}</span>
                     <h1>
                     {{$banner_item->slogan}}
                     </h1>
                     <p>
                     {{$banner_item->short_description}}
                     </p>
                     @if($banner_item->template_type==1)
                     <a href="{{url('/product/heritage')}}" class="btn-primary">Destinations</a>
                     @else
                     <a href="{{url('/product/details')}}" class="btn-primary">Destinations</a>
                     @endif
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
            <h2> <span style="color:#518117;">E</span><span style="color:#067C67">x</span><span
                  style="color: #0E538D;">p</span><span style="color: #4D4788;">l</span><span
                  style="color:#874784 ;">o</span><span style="color: #D12150;">re</span> West Bengal</h2>

         </div>
         <div class="row">
            <div class="col-md-12 col-lg-12 ">
               <div class="tours-slider top-style-two owl-carousel mb-30">
               @foreach($product_list as $product_item)
                  <div class="boxes">
                     <a href="{{url('/product/details')}}">
                        <div class="grid_4">
                           <div class="figure">
                              <div><img src="{{ asset('/' . $product_item->image_path) }}" alt=""></div>
                              <article
                                 style="background:linear-gradient{{$product_item->gradient}}">
                                 <h3>{{$product_item->title}}</h3>
                                 {{$product_item->short_description}}
                              </article>
                              <div class="layer-title"
                                 style="background:linear-gradient{{$product_item->gradient}}">
                                 <h2 class="text-center">{{$product_item->title}}</h2>
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
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/1.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/himalays.html">
                     <h5 class="text-white">Himalayas</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/12.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/wildlife.html">
                     <h5 class="text-white">Wildlife</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/6.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/coastal.html">
                     <h5 class="text-white">Coastal</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/victoria.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/heritage.html">
                     <h5 class="text-white">Heritage</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/gallery/chonach.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/culture.html">
                     <h5 class="text-white">Culture</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
               <div class="destination-item position-relative overflow-hidden mb-2">
                  <img class="img-fluid" src="assets/img/10.jpg" alt="">
                  <a class="destination-overlay text-white text-decoration-none" href="destination/wkendgateway.html">
                     <h5 class="text-white">Weekend Gateways</h5>
                     <!-- <span>100 Cities</span> -->
                  </a>
               </div>
            </div>
            <div class="cta-btn text-center">
               <a href="#" class="btn-primary">Show More</a>
            </div>
         </div>
      </div>
   </section>
   <!-- Top destination -->

   <!-- Things to do in west bengal start -->

   <section id="tinks-to-do" class="bg_pt wow fadeup-animation" data-wow-duration="1s" data-wow-delay="0.3s">
      <div class="container-fluid py-5 ">
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

         <div id="wrapper">
            <div class="content-holder">
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="3000" data-rtlt="false">
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/chonach.JPG'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2><a href="#">Purulia Chonach</a></h2>
                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/BAUL.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Baul</h2>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="4100" data-rtlt="false">
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/basanta.jpg'>
                        <div class='slide-content'>
                           <!-- <div class='overlay'></div> -->
                           <h2>Basanta Utsav</h2>

                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/rath.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Rathajatra</h2>

                        </div>
                     </div>

                  </div>
               </div>
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="4200" data-rtlt="false">


                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/Durga-puja.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Durgapuja</h2>

                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/Durga-puja.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Dipabali</h2>

                        </div>
                     </div>

                  </div>
               </div>
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="3000" data-rtlt="false">

                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/chonach.JPG'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2><a href="#">Purulia Chonach</a></h2>
                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/BAUL.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Baul</h2>
                        </div>
                     </div>

                  </div>
               </div>
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="4100" data-rtlt="false">

                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/rath.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Rathajatra</h2>

                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/basanta.jpg'>
                        <div class='slide-content'>
                           <!-- <div class='overlay'></div> -->
                           <h2>Basanta Utsav</h2>

                        </div>
                     </div>



                  </div>
               </div>
               <div class="full-height-wrap" style="float:left;width:33.3%;height:45%;position:relative;">
                  <div class='owl-carousel' id='owlCarousel' data-attime="3220" data-rtlt="false">


                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/Durga-puja.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Durgapuja</h2>

                        </div>
                     </div>
                     <div class='slide'>
                        <img class='owl-item-bg' src='assets/img/events/Durga-puja.jpg'>
                        <div class='slide-content'>
                           <div class='overlay'></div>
                           <h2>Dipabali</h2>

                        </div>
                     </div>


                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <br>
   <br>
   <br>
   <br><br><br>
   <!-- Things to do in west bengal end  -->

   <!-- ************************************************************************ -->
   <!-- *********************************   tab design   ****************************** -->
   <section id="autotab" class="tab-section mt-100" style="margin:140px;">

      <div class="container">
         <div class="tab-bar">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
               <li class="nav-item" role="presentation">
                  <!-- <a class="nav-link "  href="#wbtdcl">WBTDCL</a> -->
                  <button class="nav-link active" id="wbtdcl-tab" data-bs-toggle="tab" data-bs-target="#wbtdcl"
                     type="button" role="tab" aria-controls="wbtdcl" aria-selected="true">WBTDCL</button>
               </li>

               <li class="nav-item" role="presentation">
                  <!-- <a class="nav-link active"  href="#festivals">Festivals & Events</a> -->
                  <button class="nav-link " id="tsp-tab" data-bs-toggle="tab" data-bs-target="#tsp" type="button"
                     role="tab" aria-controls="tsp" aria-selected="true">Tourism Service Provider <span
                        class="line"></span></button>
               </li>
               <li class="nav-item" role="presentation">
                  <!-- <a class="nav-link "  href="#hotels">Hotels</a> -->
                  <button class="nav-link" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels" type="button"
                     role="tab" aria-controls="hotels" aria-selected="true">Hotels</button>
               </li>

               <li class="nav-item" role="presentation">
                  <!-- <a class="nav-link "  href="#home-stay">Home Stay</a> -->
                  <button class="nav-link" id="home-stay-tab" data-bs-toggle="tab" data-bs-target="#home-stay"
                     type="button" role="tab" aria-controls="home-stay" aria-selected="true">Home stay</button>
               </li>
               <li class="nav-item" role="presentation">
                  <!-- <a class="nav-link "  href="#home-stay">Home Stay</a> -->
                  <button class="nav-link" id="heritage-tab" data-bs-toggle="tab" data-bs-target="#heritage"
                     type="button" role="tab" aria-controls="Heritage " aria-selected="true">Heritage </button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="mice-tab" data-bs-toggle="tab" data-bs-target="#mice" type="button"
                     role="tab" aria-controls="mice" aria-selected="true">MICE</button>
               </li>
            </ul>
         </div>
         <div class="tab-content pt-70 pb-70" id="myTabContent">
            <div class="tab-pane fade show " id="tsp" role="tabpanel" aria-labelledby="tsp-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/banner/daksineswar.jpg" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/banner/puja.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">

                     <div class="my-content">
                        <div class="title">
                           Tourism Service Provider
                        </div>
                        <div class="content-text">
                           <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p> -->
                           <div class="row myc">
                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class=" card p-3 mb-2">
                                       <span class="text-center">Inbound Tour Operator</span>
                                    </div>
                                 </a>

                              </div>

                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class="card p-3 mb-2">
                                       <span class="text-center">Domestic Tour Operator</span>
                                    </div>
                                 </a>

                              </div>


                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class="card p-3 mb-2">
                                       <span class="text-center">MICE Tour Operator</span>
                                    </div>
                                 </a>

                              </div>


                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class="card p-3 mb-2">
                                       <span class="text-center">Cruise Tour Operator</span>
                                    </div>
                                 </a>

                              </div>



                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class="card p-3 mb-2">
                                       <span class="text-center">Adventure Tour Operator</span>
                                    </div>
                                 </a>
                              </div>


                              <div class="col-lg-4">
                                 <a href="tsp-detail.html">
                                    <div class="card p-3 mb-2">
                                       <span class="text-center">Travel Agents</span>
                                    </div>
                                 </a>
                              </div>



                           </div>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/tsp')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane  fade show " id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/tab/itc.png" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/tab/roi.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="my-content">
                        <div class="title">
                           Hotels
                        </div>
                        <div class="content-text">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/hotel/list')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane  fade show active " id="wbtdcl" role="tabpanel" aria-labelledby="WBTDCL-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/tab/darjeeling.jpg" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/tab/small.JPG" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="my-content">
                        <div class="title">
                           WBTDCL
                        </div>
                        <div class="content-text">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/wbtdc/list')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade show " id="home-stay" role="tabpanel" aria-labelledby="home-stay-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/tab/home_stay.JPG" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/tab/small.JPG" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="my-content">
                        <div class="title">
                           Home Stay
                        </div>
                        <div class="content-text">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/homestay/list')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade show " id="heritage" role="tabpanel" aria-labelledby="heritage-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/tab/heritage.JPG" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/tab/heritage_small.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="my-content">
                        <div class="title">
                           Heritage
                        </div>
                        <div class="content-text">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/heritage/list')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade show " id="mice" role="tabpanel" aria-labelledby="mice-tab">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="img-box">
                        <div class="box1 wow right-animation" data-wow-offset="6">
                           <img src="assets/img/tab/mice.JPG" alt="">
                        </div>
                        <div class="box2 wow fadeup-animation" data-wow-offset="6">
                           <img src="assets/img/tab/m.jpg" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="my-content">
                        <div class="title">
                           MICE
                        </div>
                        <div class="content-text">
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero
                              doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur
                              sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                        </div>
                        <div class="cta-btn">
                           <a href="{{url('/mic/list')}}" class="btn-primary">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Tab Section -->

   <!-- Gallery section start -->


   <section id="galary" class=" pt-70 pb-100  bg-pat wow fadeup-animation " data-stellar-background-ratio="0.5">

      <div class="container">
         <div class="section-title title-style">
            <h2> <span style="color:#518117;">G</span><span style="color:#067C67">a</span><span
                  style="color: #0E538D;">l</span><span style="color: #4D4788;">l</span><span
                  style="color:#874784 ;">e</span><span style="color: #D12150;">ry</span></h2>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/victoria.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Heritage</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/wildlife.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Wildlife</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/chonach.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Festivals</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/himalaya.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Himalaya</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/jungle.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Jungle</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>

            <div class="col-md-4 col-sm-6">
               <!-- MENU THUMB -->
               <div class="galary-thumb">
                  <a href="#">
                     <img src="assets/img/gallery/Digha 2.jpg" class="img-responsive" alt="">
                     <div class="gallery-info">
                        <div class="gallery-item">
                           <h3>Beach</h3>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Gallery section end -->

   <section id="testimonial-section" class="bg-style paralax pt-70 pb-100">
      <div class="container">
         <div class="section-title title-style">
            <h2 style="font-family: designFont;font-size:40px;color:#fff;margin-top: -26px;">Testimonial</h2>
         </div>
         <div>

         </div>
         <div class="row">
            <div class="col-lg-12">
               <div class="single-slider owl-carousel">
                  <div class="bg-white " style="height: 450px;border-radius:10px;background-color: #fff;">
                     <span class="icon fa fa-quote-left"></span>
                     <p class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                     </p>
                     <div class="testimonial-content">
                        <img src="assets/img/beach2.webp" alt="">
                     </div>
                  </div>
                  <div class="bg-white " style="height: 450px;border-radius:10px;background-color: #fff;">
                     <span class="icon fa fa-quote-left"></span>
                     <p class="description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s.
                     </p>
                     <div class="testimonial-content">
                        <img src="assets/img/7.jpg" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="pt-70">
      <div class="container">
         <div class="section-title title-style">
            <h2>Plan Your <span style="color:#518117;">T</span><span style="color: #0E538D;">r</span><span
                  style="color:#874784 ;">i</span><span style="color: #D12150;">p</span></h2>
         </div>
         <div class="p-4 " style="box-shadow: var(--box-shadow);border-radius: 20px;">
            <form>
               <div class="row">
                  <div class="col-lg-6">
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
                     <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput">
                        <label for="floatingInput">Start Date</label>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput">
                        <label for="floatingInput">End Date</label>
                     </div>
                  </div>
               </div>




               <div class="text-center">
                  <a href="{{url('/planYourTrip')}}" class="btn btn-primary">Start Planning</a>
               </div>

            </form>
         </div>
      </div>
   </section>

   <!--Plan to trip start-->
   <!-- <section id="plan-trip" class="plan-trip pt-70 pb-100 wow fadeup-animation">
      <div class="container">
         <div class="section-title title-style">
            <h2>Plan Your <span style="color:#518117;">T</span><span style="color: #0E538D;">r</span><span
                  style="color:#874784 ;">i</span><span style="color: #D12150;">p</span></h2>
 
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <div class="traveling-box">
               
                  <span class="hexagon"></span>
          
                  <a href="#"><i class='bx bx-bed'></i></a>
                  <h3>Where To Stay</h3>
           
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <div class="traveling-box">
               
                  <span class="hexagon"></span>
    
                  <i class='bx bxs-plane-alt'></i>
                  <h3>Visa On Arrival</h3>
            
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <div class="traveling-box">
             
                  <span class="hexagon"></span>
           
                  <i class='bx bx-bed'></i>
                  <h3>Yatri Nibhas</h3>
              
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
               <div class="traveling-box">
         
                  <span class="hexagon"></span>
             
                  <i class='bx bx-bed'></i>
                  <h3>Travel Info</h3>
         
               </div>
            </div>
     
         </div>
      </div>
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
               <img src="assets/img/logo/facebook.png" width="32" height="32">

            </li>
         </a>
         <a href="https://twitter.com/TourismBengal" target="_blank">
            <li style="background-color:#48c0eb">
               <img src="assets/img/logo/twitter.png" width="32" height="32">
               <!-- <p><a href="https://twitter.com/codexworldblog" target="_blank">Twitter</a></p> -->
            </li>
         </a>

         <a href="https://www.youtube.com/channel/UCArju4jBE3zv1Ndrv7AQ3tA" target="_blank">
            <li style="background-color:#FF0000">
               <img src="assets/img/logo/youtube.jpg" width="32" height="32">
               <!-- <p><a href="http://www.youtube.com/codexworld" target="_blank">YouYube</a></p> -->
            </li>
         </a>
         <a href="https://www.instagram.com/wbtourism/" target="_blank">
            <li style="background-color: #8134AF  ">
               <img src="assets/img/logo/insta.png" width="32" height="32">
               <!-- <p><a href="https://www.pinterest.com/codexworld" target="_blank">Instragram</a></p> -->
            </li>
         </a>
      </ul>
   </div>
   <!-- social bar end  -->
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
   <footer class="footer-area ">
      <div class="container">
         <div class="footer-top pt-100 pb-70">
            <div class="row">
               <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                  <div class="footer-widget">
                     <div class="navbar-brand">
                        <a href="{{url('/')}}">
                           <img src="assets/img/logo1.png" alt="Logo" />
                        </a>
                     </div>
                     <p>You can dream, create, design, and build the most wonderful place.</p>
                     <div class="contact-info">
                        <h5>Department of Tourism</h5>
                        <div class="content">
                           <p>
                              New Secretariat Building<br>
                              1, K. S. Roy Road, 3rd Floor, <br>Kolkata - 700001,<br>
                           </p>
                        </div>
                        <div class="content">
                           <a><i class='bx bx-envelope'></i><span>wbtourismpublicity1@gmail.com</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                  <div class="footer-widget">
                     <div class="contact-info">
                        <h5>Booking Office</h5>
                        <div class="content">
                           <p>Regional Tourist Office<br>
                              <a><i class='bx bx-phone'></i> Tourism Centre: <span>033-2243 6440</span></a> <br>
                              <a><i class='bx bx-phone'></i> Tol Free No: <span>1800 2121 655</span></a>
                           </p>
                        </div>
                        <div class="content">
                           <a><i class='bx bx-phone'></i><span>90733 86803, 90733 86804, 90733 27315</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                  <div class="footer-widget">
                     <h5>About</h5>
                     <ul class="footer-news">
                        <li class="content">
                           <a href="tsp.html">Tourism service provider</a>
                        </li>
                        <li class="content">
                           <a href="#">Sitemap</a>
                        </li>
                        <li class="content">
                           <a href="#">Feedback</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                  <div class="footer-widget">
                     <h5>Quick Links</h5>
                     <ul class="footer-links">
                        <li>
                           <a href="#">Online Booking</a>
                        </li>
                        <li>
                           <a href="#">Linked Sites</a>
                        </li>
                        <li>
                           <a href="#">Gallery</a>
                        </li>
                        <li>
                           <a href="#">Legends of Bengal</a>
                        </li>
                        <li>
                           <a href="#">Contact Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <hr>
         <div class="copy-right-area">
            <div class="container">
               <div class="copy-right-content">
                  <p>
                     Copyright @
                     2018 - 2022
                     <a>
                        Dept. of Tourism, West Bengal
                     </a>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </footer>
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