<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap" />

  <title>West Bengal Tourism</title>

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

  <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />

  <link rel="stylesheet" href="../assets/css/boxicons.min.css" />

  <link rel="stylesheet" href="../assets/css/animate.min.css" />

  <!-- <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css"> -->

  <link rel="stylesheet" href="../assets/css/nice-select.css" />

  <!-- <link rel="stylesheet" href="../assets/css/magnific-popup.min.css" /> -->

  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />

  <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />

  <link rel="stylesheet" href="../assets/css/mystyle.css" />
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <link rel="stylesheet" href="../assets/css/myresponsive.css" />

  <link rel="stylesheet" href="../assets/css/theme-dark.css" />
  <link rel="icon" href="../assets/img/logo/favicon.ico" type="image/png" />

  <!-- <link rel="icon" href="../assets/img/favicon.png" type="image/png" /> -->
</head>
<style>
  .box {
    background: #FFFFFF;
    box-shadow: -4px -5px 14px rgb(0 0 0 / 8%), 5px 8px 16px rgb(0 0 0 / 8%);
    border-radius: 10px;
    padding: 20px 20px;
    margin-top: 30px;
  }

  .map_area {
    width: 100%;
  }
</style>

<body>
  <!-- <div id="loading">
        <div class="loader"></div>
    </div> -->

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
                        <img src="../assets/img/flag-uk.png" alt="flag">
                        English
                      </a>
                    </li>
                    <li class="menu-item"><a href="#" class="menu-link">
                        <img src="../assets/img/india.png" alt="flag">
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
              <a href="../index.html">
                <img src="../assets/img/logo1.png" class="logo1" alt="Logo" style="width: 160px;">
                <img src="../assets/img/logo1.png" class="logo2" alt="Logo" style="width: 160px;">
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main-nav">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="../index.html">
              <img src="../assets/img/logo1.png" class="logo1" alt="Logo">
              <img src="../assets/img/logo1.png" class="logo2" alt="Logo">
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
                      <a href="https://wbtourism.gov.in/home/newsletter" class="nav-link">News Letter</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://wbtourismdotblog.wordpress.com/" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a href="https://wbtourism.gov.in/dynamic_page/" class="nav-link">Article</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link toggle">Tourism Corner<i class='bx bxs-chevron-down'></i></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="../tsp.html" class="nav-link">Tourism Service Provider</a>
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

 
  <style>
    .destinations-details-section .nav-item {
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
    }

    .destinations-details-section img:hover {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
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
              <li class="nav-item" role="presentation">
                <button class="nav-link " id="nearby-amenties-tab" data-bs-toggle="tab" data-bs-target="#nearby-amenties" type="button" role="tab" aria-controls="nearby-amenties" aria-selected="true">Nearby Amenties</button>
              </li>
           
            </ul>
            <div class="tab-content pt-70" id="myTabContent">
              <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                <div class="destination-details-desc mb-30">
                @if(!empty($details->slider_content))
                  {{$details}}
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
                          <p class="mb-30">
                           {{$about_item->text}}
                          </p>
                      </div>
                      @endif
                      @if($about_item->imagealignment=='right' | $about_item->imagealignment=='r')
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
                          <p class="mb-30">
                           {{$htrItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($htrItem->imagealignment=='right'| $htrItem->imagealignment=='r')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
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
                  <p>
                  {{$htrItem->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="attractions" role="tabpanel" aria-labelledby="attractions-tab">
              @if(!empty($details->attractions_tab_content))
                  @foreach($details->attractions_tab_content as $atrItem)
                  @if($atrItem->type=='textwithimage')
                  <div class="row align-items-center">
                     @if($atrItem->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                           {{$atrItem->text}}
                          </p>
                      </div>
                      @endif
                      @if($atrItem->imagealignment=='right')
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                          {{$atrItem->text}}
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
                  {{$atrItem->text}}
                  </p>
                  @endif
                  @endforeach
                  @endif
              </div>
              <div class="tab-pane fade show" id="stay" role="tabpanel" aria-labelledby="stay-tab">
              @if(!empty($details->stay_tab_content))
                  @foreach($details->stay_tab_content as $stItem)
                  @if($stItem->type =='textwithimage')
                  <div class="row align-items-center">
                     @if($stItem->imagealignment=='left')
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="{{$item->img}}" alt="Demo Image" />
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
                              <img src="{{$item->img}}" alt="Demo Image" />
                          </div>
                      </div>
                      @endif
                      
                  </div>
                  @else
                  <p>
                  {{$stItem->text}}
                  </p>
                  @endif
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
                              <img src="{{$item->img}}" alt="Demo Image" />
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
                          <p class="mb-30">
                          {{$nbaItem->text}}
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
                  <div class="widget widget-search mb-30">
                      <form class="search-form search-top">
                          <input type="search" class="form-control" placeholder="Search..." />
                          <button type="submit" class="btn-text-only">
                              <i class='bx bx-search-alt'></i>
                          </button>
                      </form>
                  </div>
                  <div class="widget widget-video mb-30">
                      {{-- <div class="video-image">
                          <img src="../assets/img/top_product/coastal/sea1.JPG" alt="video" />
                      </div> --}}
                      <div class="video-image">
                        @if ($details->video_image)
                            <img src="{{ $details->video_image }}" alt="video" />
                        @else
                            <img src="../assets/img/top_product/coastal/sea1.JPG" alt="video" />
                        @endif
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
   <!-- footer start-->
   @include('layouts.footer')
   <!-- footer end -->

  <script src="../assets/js/jquery.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="../assets/js/bootstrap-datepicker.min.js"></script> -->

  <script src="../assets/js/jquery.nice-select.min.js"></script>

  <!-- <script src="../assets/js/jquery.magnific-popup.min.js"></script> -->

  <!-- <script src="../assets/js/jquery.filterizr.min.js"></script> -->

  <script src="../assets/js/owl.carousel.min.js"></script>

  <script src="../assets/js/meanmenu.min.js"></script>

  <!-- <script src="../assets/js/form-validator.min.js"></script> -->

  <!-- <script src="../assets/js/contact-form-script.js"></script> -->

  <!-- <script src="../assets/js/jquery.ajaxchimp.min.js"></script> -->

  <script src="../assets/js/myscript.js"></script>
</body>

</html>