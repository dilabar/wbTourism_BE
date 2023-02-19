<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{@$meta_description }}" />

    <title>West Bengal Tourism {{ @$title ? '| ' . @$title : '' }} </title>
    @include('layouts.header')
</head>
<body>
    <!--preloader start-->
    {{-- <div id="loading">
        <div class="loader"></div>
    </div> --}}

    <!--preloader end-->
    @include('layouts.navbar')

    @yield('content')

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
            <use xlink:href="#wave-path" x="50" y="9" fill="#2b283d">
        </g>
    </svg>
    <!--RIVER FLOW ANIMNATED end-->
    <footer class="footer-area ">
        <div class="container">
            <div class="footer-top pt-100 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="navbar-brand">
                                <a href="/">
                                    <img data-src="{{ URL::asset('assets/img/logo1.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" alt="Logo" />

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
                                        <a><i class='bx bx-phone'></i> Tourism Centre: <span>033-2243 6440</span></a>
                                        <br>
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
                                    <a href="{{route('sitemap')}}">Sitemap</a>
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
                                    <a href="https://www.wbtdcl.com/">Online Booking</a>
                                </li>
                                <li>
                                    <a href="#">Linked Sites</a>
                                </li>
                                <li>
                                    <a href="/gallery/image_gallery">Gallery</a>
                                </li>
                                <li>
                                    <a href="/legends-view">Legends of Bengal</a>
                                </li>
                                <li>
                                    <a href="/contact-us">Contact Us</a>
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

    @include('layouts.footer')
    <div id="modal_map" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" >
           
            <div class="modal-content">
                <div class="modal-header">
                 
                    <h4 class="modal-title w-100"><span id="item_name"></span></h4>	
                    <button type="button"  class="btn-close" data-bs-dismiss="modal" id="map_btn_close" aria-label="Close">
                        {{-- <span aria-hidden="true">&times;</span> --}}
                    </button>
                    
                </div>
                <div class="modal-body">
                    
                   
                    <div class="card" >
                        <img id="img" src="" class="card-img-top" >
                        <div class="card-body">
                          <h5 class="card-title" id="item_name"></h5>
                          <p class="card-text" id="desc"></p>
                          <a id="ref" target="__blank"  >Read more</a>
                        </div>
                      </div>
                   
                </div>
              
            </div>
        </div>
    </div>

</body>

</html>
