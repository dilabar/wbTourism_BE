<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Author: HiBootstrap, Category: Tourism, Multipurpose, HTML, SASS, Bootstrap"
    />

    <title>West Bengal Tourism</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/css/fontawesome.min.css" />

    <link rel="stylesheet" href="../assets/css/boxicons.min.css" />

    <link rel="stylesheet" href="../assets/css/animate.min.css" />

    <!-- <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css"> -->

    <link rel="stylesheet" href="../assets/css/nice-select.css" />

    <!-- <link rel="stylesheet" href="assets/css/magnific-popup.min.css" /> -->

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="../assets/css/meanmenu.min.css" />

    <link rel="stylesheet" href="../assets/css/mystyle.css" />

    <link rel="stylesheet" href="../assets/css/myresponsive.css" />

    <link rel="stylesheet" href="../assets/css/theme-dark.css" />

    <link rel="icon" href="../assets/img/logo/favicon.ico" type="image/png" />
  </head>
  <style>
    .box{
      background: #FFFFFF;
    box-shadow: -4px -5px 14px rgb(0 0 0 / 8%), 5px 8px 16px rgb(0 0 0 / 8%);
    border-radius: 10px;
    padding: 20px 20px;
    margin-top: 30px;
    }
    .map_area{
      width: 100%;
    }
  </style>

  <body>
    <!-- <div id="loading">
        <div class="loader"></div>
    </div> -->

    <header class="header-area">
      <div class="top-header-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7">
              <div class="contact-info">
                <div class="content">
                  <i class="bx bx-phone"></i>
                  <a href="tel:+0123456987">+0123 456 987</a>
                </div>

                <div class="content">
                  <i class="bx bx-map"></i>
                  <a href="#">Mon-Fri: 8 AM – 7 PM</a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-5">
              <div class="side-option">
                <div class="item">
                  <div class="language">
                    <a
                      href="#language"
                      id="languageButton"
                      class="btn-secondary"
                    >
                      Language <i class="bx bxs-chevron-down"></i>
                    </a>
                    <ul class="menu">
                      <li class="menu-item">
                        <a href="#" class="menu-link">
                          <img src="../assets/img/flag-uk.png" alt="flag" />
                          English
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#" class="menu-link">
                          <img src="../assets/img/flag-germany.png" alt="flag" />
                          Deutsch</a
                        >
                      </li>
                      <li class="menu-item">
                        <a href="#" class="menu-link">
                          <img src="../assets/img/flag-jordan.png" alt="flag" />
                          العربية
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="#" class="menu-link">
                          <img src="../assets/img/flag-china.png" alt="flag" />
                          中文
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="item">
                  <a href="#" class="btn-secondary">
                    Login <i class="bx bx-log-in-circle"></i>
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
                <a href="{{url('/')}}">
                  <img src="../assets/img/logo1.png" class="logo1" alt="Logo" />
                  <img src="../assets/img/logo1.png" class="logo2" alt="Logo" />
                </a>
              </div>
              <!-- <div class="cart responsive">
                <a href="cart.html" class="cart-btn"
                  ><i class="bx bx-cart"></i>
                  <span class="badge">0</span>
                </a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="main-nav">
          <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
              <a class="navbar-brand" href="{{url('/')}}">
                <img src="../assets/img/logo1.png" class="logo1" alt="Logo">
                <img src="../assets/img/logo1.png" class="logo2" alt="Logo">
              </a>
              <div class="collapse navbar-collapse mean-menu">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a href="#" class="nav-link active toggle"
                      >Home<i class="bx bxs-chevron-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Home Demo - 1</a>
                      </li>
                      <li class="nav-item">
                        <a href="index-2.html" class="nav-link"
                          >Home Demo - 2</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="index-3.html" class="nav-link active"
                          >Home Demo - 3</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link toggle"
                      >Pages<i class="bx bxs-chevron-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="team.html" class="nav-link">Team</a>
                      </li>
                      <li class="nav-item">
                        <a href="testimonials.html" class="nav-link"
                          >Testimonials</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="booking.html" class="nav-link">Booking</a>
                      </li>
                      <li class="nav-item">
                        <a href="cart.html" class="nav-link">Cart</a>
                      </li>
                      <li class="nav-item">
                        <a href="faq.html" class="nav-link">FAQ</a>
                      </li>
                      <li class="nav-item">
                        <a href="error-404.html" class="nav-link">404 Error</a>
                      </li>
                      <li class="nav-item">
                        <a href="coming-soon.html" class="nav-link"
                          >Coming Soon</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="login.html" class="nav-link">Login</a>
                      </li>
                      <li class="nav-item">
                        <a href="register.html" class="nav-link">Register</a>
                      </li>
                      <li class="nav-item">
                        <a href="privacy-policy.html" class="nav-link"
                          >Privacy Policy</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="terms-of-service.html" class="nav-link"
                          >Terms of Service</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="forgot-password.html" class="nav-link"
                          >Forgot Password</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link toggle"
                      >Destinations<i class="bx bxs-chevron-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="destinations.html" class="nav-link"
                          >Destinations</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="destination-details.html" class="nav-link"
                          >Destinations Details</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link toggle"
                      >Tours<i class="bx bxs-chevron-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="tours.html" class="nav-link">Tours</a>
                      </li>
                      <li class="nav-item">
                        <a href="special-offers.html" class="nav-link"
                          >Trip Offers</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="about-us.html" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link toggle"
                      >Blog<i class="bx bxs-chevron-down"></i
                    ></a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="blog-style-1.html" class="nav-link"
                          >Blog Style One</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="blog-style-2.html" class="nav-link"
                          >Blog Style Two</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="blog-style-3.html" class="nav-link"
                          >Blog Style Three</a
                        >
                      </li>
                      <li class="nav-item">
                        <a href="blog-details.html" class="nav-link"
                          >Blog Details</a
                        >
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="contact.html" class="nav-link">Contact</a>
                  </li>
                </ul>
                <!-- <div class="cart">
                  <a href="cart.html" class="cart-btn"
                    ><i class="bx bx-cart"></i>
                    <span class="badge">0</span>
                  </a>
                </div> -->
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <div class="page-title-area ptb-100">
      <div class="container">
      <div class="page-title-content">
      <h1>The Mountains</h1>
      <p class="text-light">Front row seats to the Himalayas</p>
      <!-- <ul>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="blog-details.html"><i class='bx bx-chevrons-right'></i>Destination Details</a></li>
      </ul> -->
      </div>
      </div>
      <div class="bg-image">
      <img src="../assets/img/banner/dh-banner.jpg" alt="Demo Image">
      </div>
      </div>

<!-- *************Dilabar Hussain ************ -->

<!-- <section>
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">About</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="how-tab" data-bs-toggle="tab" data-bs-target="#how-to" type="button" role="tab" aria-controls="how-to" aria-selected="false">How to Reach</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="attraction-tab" data-bs-toggle="tab" data-bs-target="#attraction" type="button" role="tab" aria-controls="attraction" aria-selected="false">Attractions</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="stay-tab" data-bs-toggle="tab" data-bs-target="#stay" type="button" role="tab" aria-controls="stay" aria-selected="false">Stay</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
        home tab
      </div>
      <div class="tab-pane fade" id="how-to" role="tabpanel" aria-labelledby="how-tab">
        profile
      </div>
      <div class="tab-pane fade" id="attraction" role="tabpanel" aria-labelledby="attraction-tab">
        contact
      </div>
      <div class="tab-pane fade" id="stay" role="tabpanel" aria-labelledby="stay-tab">
        stay
      </div>
    </div>
  </div>
</section> -->
<style>
  .destinations-details-section .nav-item{
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
.destinations-details-section .nav-tabs{
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
                 
                  <div class="row align-items-center">
                    
                      <!-- <div class="col-md-6 col-sm-12"> -->
                      <div class="single-slider owl-carousel">
                        <div class="image mb-30 p-2" >
                            <img src="../assets/img/destination13.jpg" alt="Demo Image" />
                        </div>
                 
                      </div>
                    
                  </div>
                  <div class="content mb-20">
                      <h3>Greek Cottage, Greece.</h3>
                      <p>
                          I have personally participated in many of the programs mentioned on this site. One of
                          the programs is Save Our I have personally participated in many of the programs
                          mentioned on this site. One of Save Our I have personally in many of the programs
                          mentioned on this site.I have personally in many of the programs mentioned on this site.
                          One of the programs is Save.
                      </p>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                          incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                          commodo
                      </p>
                  </div>
                  <div class="row align-items-center">
                      <div class="col-md-4 col-sm-12">
                          <div class="image mb-30">
                              <img src="../assets/img/destination5.jpg" alt="Demo Image" />
                          </div>
                      </div>
                      <div class="col-md-8 col-sm-12">
                          <p class="mb-30">
                              I have personally participated in many of the programs mentioned on this site. One
                              of the programs is Save Our I have personally participated in many of the programs
                              mentioned on this site. One of Save Our I have personally in many of the programs
                              mentioned on this site.
                          </p>
                      </div>
                  </div>
                  <p class="mb-20">
                      Lorem ipsum dolor sit amet, participated consectetur adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                      commodo viverra maecenas accumsan lacus
                      vel facilisis consectetur adipiscing.
                  </p>
                  <div class="info-content">
                      <h3 class="sub-title">Some Information</h3>
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-map-alt'></i>
                                  <h6><span>Country :</span> Oia, Greece</h6>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-book-reader'></i>
                                  <h6><span>Language Spoken :</span> English</h6>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-notepad'></i>
                                  <h6><span>Visa Requirments :</span> Yes</h6>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-area'></i>
                                  <h6><span>Area (km2) :</span> 1770.80 km2</h6>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-user'></i>
                                  <h6><span>Per Person :</span> ₹1200</h6>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="content-list">
                                  <i class='bx bx-group'></i>
                                  <h6><span>Guide :</span> Local Guide Available</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <p class="mb-20">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                      maecenas accumsan lacus
                      vel facilisis consectetur adipiscing.
                  </p>
               
              
              </div>
              </div>
              <div class="tab-pane fade show" id="how-to-reach" role="tabpanel" aria-labelledby="how-to-reach-tab">
                <div class="tour_details_boxed">
                  <h3 class="heading_theme">Itinerary</h3>
                  <div class="tour_details_boxed_inner">
                      <div class="accordion" id="accordionExample">
                          <div class="accordion_flex_area">
                              <div class="accordion_left_side">
                                  <h5>Day 1</h5>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                          Stet clita kasd gubergren, no sea takimata sanctus est
                                      </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                      <div class="accordion-body">
                                          <div class="accordion_itinerary_list">
                                              <ul>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      There are many variations of passages of Lorem Ipsum
                                                      available, but the majority have
                                                      suffered alteration in some form
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Contrary to popular belief, Lorem Ipsum is not simply
                                                      random
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Many desktop publishing packages and web page editors
                                                      now
                                                      use
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Lorem Ipsum is that it has a more-or-less normal
                                                      distribution of letters, to using 'Content here
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      The standard chunk of Lorem Ipsum used since the 1500s
                                                      is
                                                      reproduced below for those interested.
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion_flex_area">
                              <div class="accordion_left_side">
                                  <h5>Day 2</h5>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          Stet clita kasd gubergren, no sea takimata sanctus est
                                      </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                      <div class="accordion-body">
                                          <div class="accordion_itinerary_list">
                                              <ul>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      There are many variations of passages of Lorem Ipsum
                                                      available, but the majority have
                                                      suffered alteration in some form
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Lorem Ipsum is that it has a more-or-less normal
                                                      distribution of letters, to using 'Content here
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      The standard chunk of Lorem Ipsum used since the 1500s
                                                      is
                                                      reproduced below for those interested.
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion_flex_area">
                              <div class="accordion_left_side">
                                  <h5>Day 3</h5>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Stet clita kasd gubergren, no sea takimata sanctus est
                                      </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                      <div class="accordion-body">
                                          <div class="accordion_itinerary_list">
                                              <ul>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Contrary to popular belief, Lorem Ipsum is not simply
                                                      random
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Many desktop publishing packages and web page editors
                                                      now
                                                      use
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Lorem Ipsum is that it has a more-or-less normal
                                                      distribution of letters, to using 'Content here
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      The standard chunk of Lorem Ipsum used since the 1500s
                                                      is
                                                      reproduced below for those interested.
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="accordion_flex_area">
                              <div class="accordion_left_side">
                                  <h5>Day 4</h5>
                              </div>
                              <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingFour">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                          Stet clita kasd gubergren, no sea takimata sanctus est
                                      </button>
                                  </h2>
                                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <div class="accordion_itinerary_list">
                                              <ul>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      There are many variations of passages of Lorem Ipsum
                                                      available, but the majority have
                                                      suffered alteration in some form
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Contrary to popular belief, Lorem Ipsum is not simply
                                                      random
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      Many desktop publishing packages and web page editors
                                                      now
                                                      use
                                                  </li>
                                                  <li>
                                                      <i class="fas fa-circle"></i>
                                                      The standard chunk of Lorem Ipsum used since the 1500s
                                                      is
                                                      reproduced below for those interested.
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              </div>
              <div class="tab-pane fade show" id="attractions" role="tabpanel" aria-labelledby="attractions-tab">
                attraction  content
              </div>
              <div class="tab-pane fade show" id="stay" role="tabpanel" aria-labelledby="stay-tab">
                stay  content
              </div>
              <div class="tab-pane fade show" id="nearby-amenties" role="tabpanel" aria-labelledby="nearby-amenties-tab">
                nearby amenties  content
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
                          <img src="../assets/img/video-bg3.jpg" alt="video" />
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

    <footer class="footer-area">
      <div class="container">
        <div class="footer-top pt-100 pb-70">
          <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6 col-12">
              <div class="footer-widget">
                <div class="navbar-brand">
                  <a href="{{url('/')}}">
                    <img src="../assets/img/logo1.png" alt="Logo" />
                  </a>
                </div>
                <p>
                  You can dream, create, design, and build the most wonderful
                  place.
                </p>

                <!-- <div class="contact-info">
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
                              
                            </div> -->
              </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6 col-12">
              <div class="footer-widget">
                <div class="contact-info">
                  <h5>Booking Office</h5>
                  <div class="content">
                    <p>
                      Regional Tourist Office<br />
                      <a
                        ><i class="bx bx-phone"></i> Tourism Centre:
                        <span>033-2243 6440</span></a
                      >
                      <br />
                      <a
                        ><i class="bx bx-phone"></i> Tol Free No:
                        <span>1800 2121 655</span></a
                      >
                    </p>
                  </div>
                  <div class="content">
                    <a
                      ><i class="bx bx-phone"></i
                      ><span>90733 86803, 90733 86804, 90733 27315</span></a
                    >
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
        <hr />
        <div class="copy-right-area">
          <div class="container">
            <div class="copy-right-content">
              <p>
                Copyright @ 2018 - 2022
                <a> Dept. of Tourism, West Bengal </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="assets/js/bootstrap-datepicker.min.js"></script> -->

    <script src="../assets/js/jquery.nice-select.min.js"></script>

    <!-- <script src="assets/js/jquery.magnific-popup.min.js"></script> -->

    <!-- <script src="assets/js/jquery.filterizr.min.js"></script> -->

    <script src="../assets/js/owl.carousel.min.js"></script>

    <script src="../assets/js/meanmenu.min.js"></script>

    <!-- <script src="assets/js/form-validator.min.js"></script> -->

    <!-- <script src="assets/js/contact-form-script.js"></script> -->

    <!-- <script src="assets/js/jquery.ajaxchimp.min.js"></script> -->

    <script src="../assets/js/myscript.js"></script>
  </body>
</html>
