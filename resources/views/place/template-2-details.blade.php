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


<section class="destinations-details-section pt-100 pb-70">
  <div class="container">
   <h1>Template 2 Page under Construction</h1>

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