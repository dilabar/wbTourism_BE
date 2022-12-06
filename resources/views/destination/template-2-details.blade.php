@include('layouts.header')
    <!-- <div id="loading">
        <div class="loader"></div>
    </div> -->

    <!--header start-->
   @include('layouts.navbar')
    <!-- Header End -->
      <div class="page-title-area ptb-100">
         <div class="container">
            <div class="page-title-content">
               <h1>{{$details->name}}</h1>
               <p class="text-light">{{$details->short_desc}}</p>
               <!-- <ul>
                  <li class="item"><a href="../index.html">Home</a></li>
                  <li class="item"><a href="blog-details.html"><i class='bx bx-chevrons-right'></i>Destination Details</a></li>
                  </ul> -->
            </div>
         </div>
         <div class="bg-image">
            <img src="{{getImage($details->full_image_obj_id)}}" alt="Demo Image">
         </div>
      </div>
      <style>
         .left-side-box{
         background: #FFFFFF;
         border: 1px solid #00000030;
         border-radius: 6px;
         padding: 20px 15px;
         margin-bottom: 30px;
         }
         .left-side-heading h5 {
         border-bottom: 1px solid #00000030;
         padding-bottom: 7px;
         font-size: 16px;
         font-weight: 500;
         }
         .search_type{
         padding-top: 10px;
         }
         .search_type .form-check {
         padding-top: 15px;
         }
         .form-check-label {
         width: 100%;
         }
         .area_flex_one {
         display: flex;
         justify-content: space-between;
         }
         .review_star {
         padding-top: 10px;
         }
         .review_star .form-check {
         margin-top: 15px;
         margin-bottom: 0;
         }
         .top_destinations_box {
         position: relative;
         margin-bottom: 30px;
         border-radius: 12px;
         }
         .item-single {
         overflow: hidden;
         border-radius: 3px;
         -webkit-transition: .5s;
         transition: .5s;
         -webkit-box-shadow: 0 -2px 30px 0 rgb(102 102 102 / 9%);
         box-shadow: 0 -2px 30px 0 rgb(102 102 102 / 9%);
         }
         .item-single .content p {
         padding-top: 15px;
         font-size: 15px;
         }
         .item-single .content {
         padding: 25px 16px;
         }
         .item-single .content span {
         color: #797979;
         }
         .item-single .content i {
         color: #797979;
         margin-right: 4px;
         vertical-align: -1px;
         }
         .item-single .content h3 {
         margin-top: 10px;
         margin-bottom: 0;
         }
         .item-single:hover {
         -webkit-box-shadow: 0 40px 44px 0 rgb(102 102 102 / 9%), 0 40px 44px 0 rgb(102 102 102 / 9%);
         box-shadow: 0 40px 44px 0 rgb(102 102 102 / 9%), 0 40px 44px 0 rgb(102 102 102 / 9%);
         -webkit-transform: scale(1.08);
         transform: scale(1.08);
         }
         /* position: absolute;
         width: 100%;
         z-index: 9999; */
         .img-list img {
         width: 100%;
         transition: 0.5s;
         height: 264px;
         }
         .img-list:hover img {
         transform: scale(1.15);
         }
         .img-list {
         overflow: hidden;
         position: relative;
         cursor: pointer;
         width: 102%;
         }
         .img-list .gallery-info {
         position: absolute;
         top: 65%;
         left: 0px;
         right: 0px;
         bottom: 0px;
         text-align: left;
         padding: 20px 25px;
         transition: 0.5s 0.2s;
         }
         .gallery-info .gallery-item {
         float: left;
         }
         .img-list .gallery-info h3 {
         color: #ffffff;
         font-size: 20px;
         margin-top: 0px;
         }
         .img-list .gallery-info h3 a {
         color: #ffffff;
         }
         .img-list .gallery-info span{
         color: #ffffff;
         font-size: 15px;
         margin-top: 0px;
         }
         .img-list .gallery-info p {
         color: #d9d9d9;
         text-transform: uppercase;
         font-size: 10px;
         font-weight: bold;
         letter-spacing: 1px;
         }
         .img-list:hover .gallery-info {
         background: linear-gradient(360deg , Black , Transparent)
         }
         .img-list {
         overflow: hidden;
         position: relative;
         cursor: pointer;
         width: 102%;
         }
      </style>
      <section class="top-destination" style="padding: 100px 0;">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="left-side">
                     <div class="left-side-box">
                        <div class="left-side-heading">
                           <h5>filter by</h5>
                        </div>
                        <div class="search_type">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                              <label class="form-check-label" for="flexCheckDefaultf1">
                              <span class="area_flex_one">
                              <span>Top places</span>
                              <span>17</span>
                              </span>
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                              <label class="form-check-label" for="flexCheckDefaultf1">
                              <span class="area_flex_one">
                              <span>Top places</span>
                              <span>17</span>
                              </span>
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                              <label class="form-check-label" for="flexCheckDefaultf1">
                              <span class="area_flex_one">
                              <span>Top places</span>
                              <span>17</span>
                              </span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="left-side-box">
                        <div class="left-side-heading">
                           <h5>filter by</h5>
                        </div>
                        <div class="filter_review">
                           <form class="review_star">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                 <label class="form-check-label" for="flexCheckDefault">
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                 <label class="form-check-label" for="flexCheckDefault1">
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star" ></i>
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                 <label class="form-check-label" for="flexCheckDefault2">
                                 <i class="bx bx-star" ></i>
                                 <i class="bx bx-star"></i>
                                 <i class="bx bx-star"></i>
                                 <i class="bx bx-star"></i>
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                 <label class="form-check-label" for="flexCheckDefault3">
                                 <i class="bx bx-star"></i>
                                 <i class="bx bx-star"></i>
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                 <label class="form-check-label" for="flexCheckDefault5">
                                 <i class="bx bx-star"></i>
                                 </label>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
               @if(count($place_list)>0)
                  <div class="row">
                     
                     @foreach($place_list as $place_item)
                     <div class="col-md-4 col-sm-6"style="padding:10px;">
                        <div class="img-list">
                           @if($place_item->img)
                              <img src="{{$place_item->img}}" class="img-responsive" alt="">
                           @else
                           <img src="../assets/img/place/dh-pic3.jpg" class="img-responsive" alt="">
                           @endif

                              <div class="gallery-info">
                                 <div class="gallery-item">
                                    <span><i class="bx bx-map"></i>{{$place_item->desc}}</span>
                                    <h3>
                                       @if($place_item->template_id == 1)
                                          <a href="../place/details?template_id=1&id={{($place_item->reference) ? $place_item->reference:$place_item->id}}">{{$place_item->name}}</a>

                                       
                                       @else
                                       <a href="/destination/details?template_id=2&id={{$place_item->id}}">{{$place_item->name}} </a>
                                       @endif
                                    </h3>
                                 </div>
                              </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </section>
      <section
         id="top-destination"
         class="top-destination-section pt-100 pb-70 bg-light"
         >
         <div class="container">
            <div class="section-title">
               <h2>Top Destinations</h2>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-6">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="../assets/img/place/dh-pic3.jpg" alt="Demo Image" />
                     </div>
                     <div class="content">
                        <!-- <span class="location"
                           ><i class="bx bx-map"></i>95 Fleet St, London</span
                           >
                           <h3>
                           <a href="destination-details.html">Venice The Dream Place</a>
                           </h3>
                           <div class="review">
                           <i class="bx bx-smile"></i>
                           <span>9</span>
                           <span>Superb</span>
                           </div> -->
                        <p>
                           Two short getaway breaks in the Greece together and one mini
                           caravan holiday.
                        </p>
                        <!-- <hr />
                           <ul class="list">
                             <li><i class="bx bx-time"></i>7 Days</li>
                             <li><i class="bx bx-group"></i>65+</li>
                             <li>₹2000</li>
                           </ul> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="../assets/img/place/dh-pic2.jpg" alt="Demo Image" />
                     </div>
                     <div class="content">
                       
                       
                     
                        <p>
                           A simple hunting lodging and later a small château with a moat
                           occupied the site.
                        </p>
                        <!-- <hr />
                           <ul class="list">
                             <li><i class="bx bx-time"></i>3 Days</li>
                             <li><i class="bx bx-group"></i>160+</li>
                             <li>₹1500</li>
                           </ul> -->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 m-auto">
                  <div class="item-single mb-30">
                     <div class="image">
                        <img src="../assets/img/place/dh-pic1.jpg" alt="Image" />
                     </div>
                     <div class="content">
                        <!-- <span class="location"
                           ><i class="bx bx-map"></i>Inca Trail, Peru</span
                           >
                           <h3>
                           <a href="destination-details.html">Inca Trail Machu Picchu</a>
                           </h3>
                           <div class="review">
                           <i class="bx bx-smile"></i>
                           <span>8.5</span>
                           <span>Superb</span>
                           </div> -->
                        <p>
                           The gorgeous play of light did justice to the mystique of the
                           ancient ruins that.
                        </p>
                        <!-- <div class="cta-btn text-center">
                           <a href="#" class="btn-primary">DISCOVER</a>
                        </div> -->
                        <!-- <hr />
                           <ul class="list">
                             <li><i class="bx bx-time"></i>3 Days</li>
                             <li><i class="bx bx-group"></i>160+</li>
                             <li>₹1500</li>
                           </ul> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="blog" class="blog-section pt-100 pb-70">
         <div class="container">
            <div class="section-title">
               <h2>Popular places</h2>
               <p>
                  Travel has helped us to understand the meaning of life and it has
                  helped us become better people. Each time we travel, we see the
                  world with new eyes.
               </p>
            </div>
            <div class="row">
               <div class="col-lg-6">
                  <div class="item-single item-big mb-30 tour-layer">
                     <div class="image tour-mig-lc-img">
                        <img src="../assets/img/destination/tour5.jpg" alt="Demo Image" />
                     </div>
                     <div class="tour-mig-lc-con tour-mig-lc-con2">
                        <h5 style="text-transform: uppercase;">Darjeeling</h5>
                     </div>
                     <!-- <div class="content">
                        <ul class="info-list">
                          <li><i class="bx bx-calendar"></i> October 5, 2021</li>
                          <li><i class="bx bx-tag"></i>Tour, Tourism, Travel</li>
                        </ul>
                        <h3>
                          <a href="blog-details.html"
                            >The real voyage does not consist in seeking new landscapes,
                            but in having new eyes.</a
                          >
                        </h3>
                        <p>
                          I have personally participated in many of the programs
                          mentioned on this site. One of the programs is Save Our I have
                          personally in many of the programs mentioned on this site.
                        </p>
                        <ul class="list">
                          <li>
                            <div class="author">
                              <img src="../assets/img/blog/author1.jpg" alt="Demo Image" />
                              <span>By - Envy Jeqlin</span>
                            </div>
                          </li>
                          <li>
                            <a href="blog.html" class="btn-primary">Read More</a>
                          </li>
                        </ul>
                        </div> -->
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="item-single mb-30 tour-layer">
                           <div class="image tour-mig-lc-img">
                              <img src="../assets/img/destination/tour5.jpg" alt="Demo Image" />
                           </div>
                           <div class="tour-mig-lc-con tour-mig-lc-con2">
                              <h5 style="text-transform: uppercase;">Digha</h5>
                           </div>
                           <!-- <div class="content">
                              <ul class="info-list">
                                <li><i class="bx bx-calendar"></i> Oct 10, 2021</li>
                                <li><i class="bx bx-tag"></i>Tour</li>
                              </ul>
                              <h3>
                                <a href="blog-details.html"
                                  >Take only memories, leave only footprints.</a
                                >
                              </h3>
                              <ul class="list">
                                <li>
                                  <div class="author">
                                    <img
                                      src="../assets/img/blog/author2.jpg"
                                      alt="Demo Image"
                                    />
                                    <span>By - David Stiffen</span>
                                  </div>
                                </li>
                              </ul>
                              </div> -->
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="item-single mb-30 tour-layer">
                           <div class="image tour-mig-lc-img">
                              <img src="../assets/img/destination/tour5.jpg" alt="Demo Image" />
                           </div>
                           <div class="tour-mig-lc-con tour-mig-lc-con2">
                              <h5 style="text-transform: uppercase;">kolkata</h5>
                           </div>
                           <!-- <div class="content">
                              <ul class="info-list">
                                <li><i class="bx bx-calendar"></i> Nov 10, 2021</li>
                                <li><i class="bx bx-tag"></i>Travel</li>
                              </ul>
                              <h3>
                                <a href="blog-details.html"
                                  >Life is either a daring adventure.</a
                                >
                              </h3>
                              <ul class="list">
                                <li>
                                  <div class="author">
                                    <img
                                      src="../assets/img/blog/author3.jpg"
                                      alt="Demo Image"
                                    />
                                    <span>By - David Milan</span>
                                  </div>
                                </li>
                              </ul>
                              </div> -->
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="item-single mb-30 tour-layer">
                           <div class="image tour-mig-lc-img">
                              <img src="../assets/img/destination/tour5.jpg" alt="Demo Image" />
                           </div>
                           <div class="tour-mig-lc-con tour-mig-lc-con2">
                              <h5 style="text-transform: uppercase;">Sundarban</h5>
                           </div>
                           <!-- <div class="content">
                              <ul class="info-list">
                                <li><i class="bx bx-calendar"></i> Oct 5, 2021</li>
                                <li><i class="bx bx-tag"></i>Travel</li>
                              </ul>
                              <h3>
                                <a href="blog-details.html"
                                  >Not all those who wander are lost.</a
                                >
                              </h3>
                              <ul class="list">
                                <li>
                                  <div class="author">
                                    <img
                                      src="../assets/img/blog/author4.jpg"
                                      alt="Demo Image"
                                    />
                                    <span>By - Christina</span>
                                  </div>
                                </li>
                              </ul>
                              </div> -->
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <div class="item-single mb-30 tour-layer">
                           <div class="image tour-mig-lc-img">
                              <img src="../assets/img/destination/tour5.jpg" alt="Demo Image" />
                           </div>
                           <div class="tour-mig-lc-con tour-mig-lc-con2">
                              <h5 style="text-transform: uppercase;">Bishnupur</h5>
                           </div>
                           <!-- <div class="content">
                              <ul class="info-list">
                                <li><i class="bx bx-calendar"></i> Nov 9, 2021</li>
                                <li><i class="bx bx-tag"></i>Tour</li>
                              </ul>
                              <h3>
                                <a href="blog-details.html"
                                  >Mountains is always right destination.</a
                                >
                              </h3>
                              <ul class="list">
                                <li>
                                  <div class="author">
                                    <img
                                      src="../assets/img/blog/author5.jpg"
                                      alt="Demo Image"
                                    />
                                    <span>By - Emma Watson</span>
                                  </div>
                                </li>
                              </ul>
                              </div> -->
                        </div>
                     </div>
                  </div>
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