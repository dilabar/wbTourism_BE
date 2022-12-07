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
                              <a href="index.html">
                                  <img src="{{ URL::asset('assets/img/logo1.png') }}" alt="Logo" />

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

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/bootstrap-datepicker.min.js') }}"></script> -->
  <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
   <script src="{{ asset('assets/js/jquery.filterizr.min.js') }}"></script> -->

  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
   <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
         
   <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="{{ asset('assets/js/myscript.js') }}"></script>
  <script src="{{ asset('assets/js/navscript.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/plugin.js') }}"></script> -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>



  @yield('script')

  </body>

  </html>
