<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />
      <title>West Bengal Tourism</title>
      <link rel="stylesheet" href="{{ asset ('assets/css/styles.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/fontawesome.min.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/boxicons.min.css') }}">
      <link rel="stylesheet" href="{{ asset ('assets/css/animate.min.css') }}" />
      <!-- <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css"> -->
      <link rel="stylesheet" href="{{ asset ('assets/css/nice-select.css') }}">
      <!-- <link rel="stylesheet" href="assets/css/magnific-popup.min.css" /> -->
      <link rel="stylesheet" href="{{ asset ('assets/css/owl.carousel.min.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/meanmenu.min.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/mystyle.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/sunstyle.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/myresponsive.css') }}" />
      <link rel="stylesheet" href="{{ asset ('assets/css/theme-dark.css') }}" />
      <!-- <link rel="icon" href="assets/img/favicon.png" type="image/png" /> -->
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
                                    <img src="assets/img/flag-germany.png" alt="flag">
                                    Deutsch</a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="#" class="menu-link">
                                    <img src="assets/img/flag-jordan.png" alt="flag">
                                    العربية
                                    </a>
                                 </li>
                                 <li class="menu-item">
                                    <a href="#" class="menu-link">
                                    <img src="assets/img/flag-china.png" alt="flag">
                                    中文
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="item">
                           <a href="{{url('/admin')}}" class="btn-secondary" target="_blank">
                           Login <i class='bx bx-log-in-circle'></i>
                           </a>
                        </div>
                        <!-- <div class="item">
                           <a href="#searchBox" id="searchButton" class="btn-search" data-effect="mfp-zoom-in">
                               <i class='bx bx-search-alt'></i>
                           </a>
                           <div id="searchBox" class="search-box mfp-with-anim mfp-hide">
                               <form class="search-form">
                                   <input class="search-input" name="search" placeholder="Search" type="text">
                                   <button class="btn-search">
                                       <i class='bx bx-search-alt'></i>
                                   </button>
                               </form>
                           </div>
                           </div> -->
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
                        <a href="index.html">
                        <img src="assets/img/logo1.png" class="logo1" alt="Logo" style="width: 160px;">
                        <img src="assets/img/logo1.png" class="logo2" alt="Logo" style="width: 160px;">
                        </a>
                     </div>
                     <!-- <div class="cart responsive">
                        <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                            <span class="badge">0</span>
                        </a>
                        </div> -->
                  </div>
               </div>
            </div>
            <div class="main-nav">
               <div class="container">
                  <nav class="navbar navbar-expand-md navbar-light">
                     <a class="navbar-brand" href="index.html">
                     <img src="assets/img/logo1.png" class="logo1" alt="Logo" >
                     <img src="assets/img/logo1.png" class="logo2" alt="Logo" >
                     </a>
                     <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">
                           <li class="nav-item">
                              <a href="#" class="nav-link active">Home</a>
                           </li>
                           <!-- <li class="nav-item">
                              <a href="#" class="nav-link toggle">Pages<i class='bx bxs-chevron-down'></i></a>
                              <ul class="dropdown-menu">
                                  <li class="nav-item">
                                      <a href="team.html" class="nav-link">Team</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="testimonials.html" class="nav-link">Testimonials</a>
                                  </li>
                                
                                 
                              </ul>
                              </li> -->
                           <li class="nav-item">
                              <a href="#fh5co-destination" class="nav-link ">Destination</a>
                           </li>
                           <li class="nav-item">
                              <a href="#explore-thng" class="nav-link ">Explore thing</a>
                           </li>
                           <li class="nav-item">
                              <a href="#offers" class="nav-link ">Offers</a>
                           </li>
                           <li class="nav-item">
                              <a href="#galary" class="nav-link ">Gallary</a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="nav-link toggle">Tours<i
                                 class='bx bxs-chevron-down'></i></a>
                              <ul class="dropdown-menu">
                                 <li class="nav-item">
                                    <a href="tours.html" class="nav-link">Tours</a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="special-offers.html" class="nav-link">Trip Offers</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="nav-item">
                              <a href="about-us.html" class="nav-link">About</a>
                           </li>
                           <li class="nav-item">
                              <a href="contact.html" class="nav-link">Contact</a>
                           </li>
                        </ul>
                        <!-- <div class="cart">
                           <a href="cart.html" class="cart-btn"><i class='bx bx-cart'></i>
                               <span class="badge">0</span>
                           </a>
                           </div> -->
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- Header End -->

       <!--banner section start-->
      <div id="home" class="home-banner-area home-style-three">
         <div class="container-fluid p-0">
            <div class="banner-slider-three owl-carousel">
               <div class="slider-item item-one" style="background-image: url('{{ asset('/assets/img/banner/Darjeeling_0.jpg') }}') no-repeat center;background-size: cover">
                  <div class="container">
                     <div class="banner-content">
                        <span class="sub-title">Victoria Memorial</span>
                        <h1>
                           Make Your Trip Fun & Noted
                        </h1>
                        <p>
                           Travel has helped us to understand the meaning of life and it has helped us become
                           better people. Each time we travel, we see the world with new eyes.
                        </p>
                        <a href="detail.html" class="btn-primary">Destinations</a>
                     </div>
                  </div>
               </div>
               <div class="slider-item item-two" style="background: url(assets/img/banner/Darjeeling_0.jpg) no-repeat center;background-size: cover">
                  <div class="container">
                     <div class="banner-content">
                        <span class="sub-title">Darjeeling</span>
                        <h1>
                           Make Your Trip Fun & Noted
                        </h1>
                        <p>
                           Travel has helped us to understand the meaning of life and it has helped us become
                           better people. Each time we travel, we see the world with new eyes.
                        </p>
                        <a href="destination-details.html" class="btn-primary">Destinations</a>
                     </div>
                  </div>
               </div>
               <div class="slider-item item-three" style="background: url(assets/img/banner/Darjeeling_0.jpg) no-repeat center;background-size: cover">
                  <div class="container">
                     <div class="banner-content">
                        <span class="sub-title">Ghoom</span>
                        <h1>
                           Make Your Trip Fun & Noted
                        </h1>
                        <p>
                           Travel has helped us to understand the meaning of life and it has helped us become
                           better people. Each time we travel, we see the world with new eyes.
                        </p>
                        <a href="destination-details.html" class="btn-primary">Destinations</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="search-form">
                <form id="searchForm">
                    <div class="row align-items-center">
                        <div class="col-lg-11">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="select-box">
                                        <i class='bx bx-map-alt'></i>
                                        <select class="form-control">
                                            <option data-display='Destination'>Nothing</option>
                                            <option value="1">North America</option>
                                            <option value="2">Spain Madrid</option>
                                            <option value="3">Japan Tokyo</option>
                                            <option value="4">Europe City</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="select-box">
                                        <i class='bx bx-calendar'></i>
                                        <input type="text" class="date-select form-control" placeholder="Depart Date"
                                            required="required" />
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="select-box">
                                        <i class='bx bx-package'></i>
                                        <select class="form-control">
                                            <option data-display='Travel Type'>Travel Type</option>
                                            <option value="1">City Tour</option>
                                            <option value="2">Family Tours</option>
                                            <option value="3">Seasonal Tours</option>
                                            <option value="4">Outdoor Activities</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="select-box">
                                        <i class='bx bx-time'></i>
                                        <select class="form-control">
                                            <option data-display='Tour Duration'>Nothing</option>
                                            <option value="1">5 Days</option>
                                            <option value="2">12 Days</option>
                                            <option value="3">21 Days</option>
                                            <option value="4">30 Days</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <button type="button" class="btn-search">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<section   class="top-product pt-100 ">

    <div class="container">
        <div class="section-title title-style">
            <span style="width:1px;height:10px;background-color:#518117;"></span>
            <h2> <span style="color:#518117;">E</span><span style="color:#067C67">x</span><span style="color: #0E538D;">p</span><span style="color: #4D4788;">l</span><span style="color:#874784 ;">o</span><span style="color: #D12150;">re</span> West Bengal</h2>
          
        </div>
        @if(count($top_ten_product)>0)
        <div class="row">
            <div class="col-md-12 col-lg-12 ">
                <div class="tours-slider top-style-two owl-carousel mb-30">
                  @foreach($top_ten_product as $top_ten)
                    <div class="boxes">
                        <div class="grid_4">
                            <div class="figure">
                              <div ><img src="{{ asset ('assets/img/upload/product/'. $top_ten->Media->thumbnail_image_path.'.'.$top_ten->Media->extention) }}" alt=""></div>
                              <article style="background:linear-gradient({{$top_ten->gradient_text}});">
                                <h3>{{$top_ten->name}}</h3>
                                {{$top_ten->desc}}
                                <!-- <div class="cta-btn text-center">
                                    <a href="#" class="btn btn-primary">Discover</a>
                                </div> -->
                                </article>
                           
                              </div>
                              <div class="layer-title">
                                <h2 class="text-center">{{$top_ten->name}}</h2>
                            </div>
                             
                          </div>
                    </div>
                  @endforeach
                   
                </div>
            </div>
         </div>
         @endif
      </div>
      <!--banner section end-->

   


      <!-- Top destination -->
      <section id="explore-thng"  class="bg">
         <div class="container-fluid py-5 ">
            <div class="container pt-5 pb-3">
               <div class="section-title title-style pt-70">
                  <h2>Top<span style="color:#518117;">De</span><span style="color:#067C67">st</span><span style="color: #0E538D;">in</span><span style="color: #4D4788;">a</span><span style="color:#874784 ;">t</span><span style="color: #D12150;">i</span><span style="color:#F48C18">on</span></h2>
                  <!-- <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                     Each time we travel, we see the world with new eyes.</p> -->
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/1.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Himalayas</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/12.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Wildlife</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/6.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Coastal</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/victoria.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Heritage</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/gallery/chonach.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Culture</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4">
                     <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="assets/img/10.jpg" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                           <h5 class="text-white">Weekend Gateways</h5>
                           <!-- <span>100 Cities</span> -->
                        </a>
                     </div>
                  </div>
                  <div class="cta-btn text-center">
                     <a href="#" class="btn-primary">Load More</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Top destination -->

      <!-- Things to do in west bengal start -->
      <section id="tinks-to-do" class="bg_pt mb-70">
         <div class="container-fluid py-5 ">
            <div class="container pt-5 pb-3">
               <div class="section-title title-style">
                  <h4 class="text-right text-primary text-uppercase" style="letter-spacing: 4px; font-size: 25px;"><span style="color:#518117 ;">E</span><span style="color:#067C67">x</span><span style="color: #0E538D;">c</span><span style="color: #4D4788;">i</span><span style="color:#874784 ;">t</span><span style="color: #D12150;">i</span><span style="color:#F48C18">ng</span></h4>
                  <h2>Things To Do In  <span style="color:#518117;">B</span><span style="color:#067C67">e</span><span style="color: #0E538D;">n</span><span style="color: #4D4788;">g</span><span style="color:#874784 ;">a</span><span style="color: #D12150;">l</span></h2>
               </div>
                <div id="wrapper">
                    <div class="content-holder">
                        <div class="full-height-wrap">
                            <div class="hero-grid">
                                <div class="img-slider" id="slider1">
                                    <div style="background-image:url(assets/img/bg/22.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/35.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/55.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="abc.html">Water Rafting</a></h1> 
                                    </span>
                                </div>
                            </div>
                            <div class="hero-grid" style="float:left;width:33.3%;height:50%;position:relative;">
                                <div class="img-slider" id="slider2">
                                    <div style="background-image:url(assets/img/bg/4.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/19.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/28.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="#">Mountain Biking</a></h1> 
                                    </span>
                                </div>
                            </div>
                            <div class="hero-grid" style="float:left;width:33.3%;height:50%;position:relative;">
                                
                                <div class="img-slider" id="slider3">
                                    <div style="background-image:url(assets/img/bg/55.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/31.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/56.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="#">Camping</a></h1> 
                                    </span>
                                </div>
                            </div>
                            <div class="hero-grid" style="float:left;width:33.3%;height:50%;position:relative;">
                                <div class="img-slider" id="slider4">
                                    <div style="background-image:url(assets/img/bg/33.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/8.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/18.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="#">Zipline </a></h1> 
                                    </span>
                                </div>
                            </div>
                            <div class="hero-grid" style="float:left;width:33.3%;height:50%;position:relative;">
                                <div class="img-slider" id="slider5">
                                    <div style="background-image:url(assets/img/bg/33.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/8.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/18.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="#">Treking </a></h1> 
                                    </span>
                                </div>
                            </div>
                            <div class="hero-grid" style="float:left;width:33.3%;height:50%;position:relative;">
                                <div class="img-slider" id="slider6">
                                    <div style="background-image:url(assets/img/bg/33.jpg)">
                                    
                                    </div>
                                    <div style="background-image:url(assets/img/bg/8.jpg)">
                                        
                                    </div>
                                    <div style="background-image:url(assets/img/bg/18.jpg)">
                                        
                                    </div>
                                    
                                    <!-- Title Bar -->
                                    <span class="titleBar">
                                        <h1><a href="#">Paragliding</a></h1> 
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </section>
      <!-- Things to do in west bengal end  -->

      <!-- ************************************************************************ -->
      <!-- *********************************   tab design   ****************************** -->
      <section id="autotab" class="tab-section mt-100">
         <div class="container">
            <div class="tab-bar">
               <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                     <!-- <a class="nav-link active"  href="#festivals">Festivals & Events</a> -->
                     <button class="nav-link active" id="festivals-tab" data-bs-toggle="tab" data-bs-target="#festivals" type="button" role="tab" aria-controls="festivals" aria-selected="true">Festivals & Events <span class="line"></span></button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <!-- <a class="nav-link "  href="#hotels">Hotels</a> -->
                     <button class="nav-link" id="hotels-tab" data-bs-toggle="tab" data-bs-target="#hotels" type="button" role="tab" aria-controls="hotels" aria-selected="true">Hotels</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <!-- <a class="nav-link "  href="#wbtdcl">WBTDCL</a> -->
                     <button class="nav-link" id="wbtdcl-tab" data-bs-toggle="tab" data-bs-target="#wbtdcl" type="button" role="tab" aria-controls="wbtdcl" aria-selected="true">WBTDCL</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <!-- <a class="nav-link "  href="#home-stay">Home Stay</a> -->
                     <button class="nav-link" id="home-stay-tab" data-bs-toggle="tab" data-bs-target="#home-stay" type="button" role="tab" aria-controls="home-stay" aria-selected="true">Home stay</button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <!-- <a class="nav-link "  href="#home-stay">Home Stay</a> -->
                     <button class="nav-link" id="heritage-tab" data-bs-toggle="tab" data-bs-target="#heritage" type="button" role="tab" aria-controls="Heritage " aria-selected="true">Heritage </button>
                  </li>
               </ul>
            </div>
            <div class="tab-content pt-70 pb-70" id="myTabContent">
               <div class="tab-pane fade show active" id="festivals" role="tabpanel" aria-labelledby="festivals-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="img-box">
                           <div class="box1">
                              <img src="assets/img/banner/daksineswar.jpg" alt="">
                           </div>
                           <div class="box2">
                              <img  src="assets/img/banner/puja.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="my-content">
                           <div class="title">
                              Festivals & Events
                           </div>
                           <div class="content-text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                           </div>
                           <div class="cta-btn">
                              <a href="#" class="btn-primary">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade show " id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="img-box">
                           <div class="box1">
                              <img src="assets/img/1.webp" alt="">
                           </div>
                           <div class="box2">
                              <img  src="assets/img/9.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="my-content">
                           <div class="title">
                              Hotels
                           </div>
                           <div class="content-text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                           </div>
                           <!-- <a href="#" class="btn">
                              <span>Read More</span>
                              </a> -->
                           <div class="cta-btn">
                              <a href="#" class="btn-primary">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade show " id="wbtdcl" role="tabpanel" aria-labelledby="WBTDCL-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="img-box">
                           <div class="box1">
                              <img src="assets/img/1.jpg" alt="">
                           </div>
                           <div class="box2">
                              <img  src="assets/img/11.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="my-content">
                           <div class="title">
                              WBTDCL
                           </div>
                           <div class="content-text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                           </div>
                           <div class="cta-btn">
                              <a href="#" class="btn-primary">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade show " id="home-stay" role="tabpanel" aria-labelledby="home-stay-tab">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="img-box">
                           <div class="box1">
                              <img src="assets/img/10.jpg" alt="">
                           </div>
                           <div class="box2">
                              <img  src="assets/img/6.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="my-content">
                           <div class="title">
                              Home Stay
                           </div>
                           <div class="content-text">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae earum libero doloremque maiores laboriosam tempore eius aspernatur quam atque. Quia vel consequatur sint, ut tempora repudiandae sapiente! Excepturi, autem! Nesciunt.</p>
                           </div>
                           <div class="cta-btn">
                              <a href="#" class="btn-primary">Read More</a>
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
   <style>
      #galary .galary-thumb {
    overflow: hidden;
    position: relative;
    cursor: pointer;
    width: 102%;
  }
  
  #galary {
    padding-bottom: 40px;
    margin: 0;
  }
  
  .bg-pat{
    background-image: url(assets/img/gallery/bg-pat.webp);
    background-repeat: no-repeat;
  }
  
  #galary .container {
    width: 100%;
  }
  
  #galary .col-md-4 {
    margin: 0;
    padding: 0;
  }
  
  .galary-thumb img {
    width: 100%;
    transition: 0.5s;
  }
  
  .galary-thumb:hover img {
    transform: scale(1.15);
  }
  
  #galary .galary-thumb {
    overflow: hidden;
    position: relative;
    cursor: pointer;
    width: 102%;
  }
  
  .galary-thumb .gallery-info {
    position: absolute;
    top: 60%;
    left: 0px;
    right: 0px;
    bottom: 0px;
    text-align: left;
    padding: 25px 30px;
    transition: 0.5s 0.2s;
  }
  
  .gallery-info .gallery-item {
    float: left;
  }
  
  .gallery-info .menu-price {
    float: right;
  }
  
  .gallery-info .menu-price span {
    font-size: 20px;
    font-weight: bold;
    line-height: normal;
    display: block;
    margin-top: 10px;
  }
  
  .galary-thumb .gallery-info h3,
  .galary-thumb .gallery-info p,
  .galary-thumb .gallery-info span {
    transform: translateY(100%);
    opacity: 0;
    display: block;
    transition: 0.5s 0.2s;
    color: #ffffff;
    z-index: 2;
    position: relative;
  }
  
  .galary-thumb .gallery-info h3 {
    margin-top: 0;
  }
  
  .galary-thumb .gallery-info p {
    color: #d9d9d9;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: bold;
    letter-spacing: 1px;
  }
  
  .galary-thumb:hover .gallery-info h3,
  .galary-thumb:hover .gallery-info p,
  .galary-thumb:hover .gallery-info span {
    transform: translateY(0px);
    opacity: 1;
  }
  
  .galary-thumb:hover .gallery-info {
    background: rgba(0,0,0,0.8);
  }
   </style>
      <section id="galary"  class=" pt-70 pb-70 bg-pat" data-stellar-background-ratio="0.5">
         <div class="container">
             <div class="section-title">
                 <h2>Gallery</h2>
             </div>
             <div class="row">
                 <div class="col-md-4 col-sm-6">
                     <!-- MENU THUMB -->
                     <div class="galary-thumb">
                         <a href="abc.html">
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
                         <a href="abc.html">
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
                         <a href="abc.html">
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
                         <a href="abc.html">
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
                         <a href="abc.html">
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
                         <a href="abc.html">
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

      <!--Plan to trip start-->
      <section  id="plan-trip" class="plan-trip pt-70 pb-100 ">
         <div class="container">
            <div class="section-title title-style">
               <h2>Plan Your <span style="color:#518117;">T</span><span  style="color: #0E538D;">r</span><span style="color:#874784 ;">i</span><span style="color: #D12150;">p</span></h2>
               <!-- <p>Travel has helped us to understand the meaning of life and it has helped us become better people.
                  Each time we travel, we see the world with new eyes.</p> -->
            </div>
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i class="fa-solid fa-bed"></i> -->
                     <span class="hexagon"></span>
                     <!-- <i><img src="assets/img/bed-regular-24.png" alt="icon"/></i> -->
                     <a href="#"><i class='bx bx-bed'></i></a>
                     <h3>Where To Stay</h3>
                     <!-- <p> going to use a passage of Lorem Ipsum, you need to be </p> -->
                     <!-- <div class="read-more">
                        <a  href="#">Read More</a>
                        </div> -->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i class="fa-solid fa-bed"></i> -->
                     <span class="hexagon"></span>
                     <!-- <i><img src="assets/img/bed-regular-24.png" alt="icon"/></i> -->
                     <i class='bx bxs-plane-alt'></i>
                     <h3>Visa On Arrival</h3>
                     <!-- <p> going to use a passage of Lorem Ipsum, you need to be </p> -->
                     <!-- <div class="read-more">
                        <a  href="#">Read More</a>
                        </div> -->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i class="fa-solid fa-bed"></i> -->
                     <span class="hexagon"></span>
                     <!-- <i><img src="assets/img/bed-regular-24.png" alt="icon"/></i> -->
                     <i class='bx bx-bed'></i>
                     <h3>Yatri Nibhas</h3>
                     <!-- <p> going to use a passage of Lorem Ipsum, you need to be </p> -->
                     <!-- <div class="read-more">
                        <a  href="#">Read More</a>
                        </div> -->
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <!-- <i class="fa-solid fa-bed"></i> -->
                     <span class="hexagon"></span>
                     <!-- <i><img src="assets/img/bed-regular-24.png" alt="icon"/></i> -->
                     <i class='bx bx-bed'></i>
                     <h3>Travel Info</h3>
                     <!-- <p> going to use a passage of Lorem Ipsum, you need to be </p> -->
                     <!-- <div class="read-more">
                        <a  href="#">Read More</a>
                        </div> -->
                  </div>
               </div>
               <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                      <i><img src="icon/travel-icon4.png" alt="icon"/></i>
                      <h3>Summer Rest</h3>
                      <p> going to use a passage of Lorem Ipsum, you need to be </p>
                      <div class="read-more">
                          <a  href="#">Read More</a>
                      </div>
                  </div>
                  </div> -->
            </div>
         </div>
      </section>
      <!--Plan to trip start-->

      <!--RIVER FLOW ANIMNATED start-->
      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
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
      <footer class="footer-area">
         <div class="container">
            <div class="footer-top pt-100 pb-70">
               <div class="row">
                  <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                     <div class="footer-widget">
                        <div class="navbar-brand">
                           <a href="index.html">
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
                           <!-- <div class="content">
                              <a href="#"><i class='bx bx-map'></i>Mon-Fri: 8 AM – 7 PM</a>
                              </div> -->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                     <div class="footer-widget">
                        <h5>About</h5>
                        <ul class="footer-news">
                           <li class="content">
                              <a href="blog-details.html">Tourism service provider</a>
                           </li>
                           <li class="content">
                              <a href="blog-details.html">Sitemap</a>
                           </li>
                           <li class="content">
                              <a href="blog-details.html">Feedback</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-5 col-sm-6 col-12">
                     <div class="footer-widget">
                        <h5>Quick Links</h5>
                        <ul class="footer-links">
                           <li>
                              <a href="about-us.html">Online Booking</a>
                           </li>
                           <li>
                              <a href="destinations.html">Linked Sites</a>
                           </li>
                           <li>
                              <a href="blog-style-1.html">Gallery</a>
                           </li>
                           <li>
                              <a href="team.html">Legends of Bengal</a>
                           </li>
                           <li>
                              <a href="contact.html">Contact Us</a>
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
                        <a >
                        Dept. of Tourism, West Bengal  
                        </a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->

      <script src="{{ asset ('assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset ('assets/js/bootstrap.bundle.min.js') }}"></script>
      <!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->
      <script src="{{ asset ('assets/js/jquery.nice-select.min.js') }}"></script>
      <!-- <script src="assets/js/jquery.magnific-popup.min.js"></script>
         <script src="assets/js/jquery.filterizr.min.js"></script> -->
      <script src="{{ asset ('assets/js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset ('assets/js/meanmenu.min.js') }}"></script>
      <!-- <script src="assets/js/form-validator.min.js"></script>
         <script src="assets/js/contact-form-script.js"></script>
         
         <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->
      <script src="{{ asset ('assets/js/myscript.js') }}"></script>
      <script src="{{ asset ('assets/js/scripts.js') }}"></script>
   </body>
</html>