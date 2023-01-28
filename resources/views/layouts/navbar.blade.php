<header class="header-area">
    <div class="top-header-area">
        <div class="container-fluid">
            {{-- <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-sm-6">
                    <div class="contact-info">
                        <div class="content">
                            <i class='bx bx-phone'></i>
                            <a href="tel:+0123456987">18002121655</a>
                            <div style="padding-left: 1.5rem;">
                                <i class='bx bx-map'></i>
                                <a href="#">Mon-Fri: 8 AM – 7 PM</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-sm-6">
                    <div class="side-option">
                        <div class="item">
                            <div class="language">
                                <a href="#language" id="languageButton" class="btn-secondary">
                                    Language <i class='bx bxs-chevron-down'></i>
                                </a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <img src="{{ asset('assets/img/flag-uk.png') }}" alt="flag">
                                            English
                                        </a>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-link">
                                            <img src="{{ asset('assets/img/india.png') }}" alt="flag">
                                            বাংলা</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{ route('login') }}" class="btn-secondary">
                                Login <i class='bx bx-log-in-circle'></i>
                            </a>
                        </div>
                        <style>
                            .lng button {
                                color: #fff;
                                display: inline-block;
                                padding: 5px;
                                margin: 0;
                                background: 0;
                                border: 0;
                            }

                            .lng button:hover {
                                color: var(--primary-color);
                            }
                        </style>
                        <div class="item lng">

                            <span class="hline">&nbsp;</span>
                            <button type="button" class="btnAless">A-</button>
                            <button type="button" class="btnA">A</button>
                            <button type="button" class="btnAplus">A+</button>
                            <span class="hline">&nbsp;</span>

                        </div>
                        <div class="choto-logo">
                            <a class="" href="/">
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row align-items-center flex-column-reverse flex-sm-row">
                <div class="col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#">Tollfree No</a>
                        <div style="padding-left: 1.5rem;">
                            <i class='bx bx-phone'></i>
                            <a href="tel:+0123456987">18002121655</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="side-option">
                        <div class="item">
                            <div class="language">
                                <a href="#language" id="languageButton" class="btn-secondary">
                                    Language <i class='bx bxs-chevron-down'></i>
                                </a>
                                <ul class="menu">
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <img data-src="{{ asset('assets/img/flag-uk.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" alt="flag">
                                            English
                                        </a>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-link">
                                            <img data-src="{{ asset('assets/img/india.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" alt="flag">
                                            বাংলা</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <a href="{{ route('login') }}" class="btn-secondary">
                                Login <i class='bx bx-log-in-circle'></i>
                            </a>
                        </div>
                        <style>
                            .lng button {
                                color: #fff;
                                display: inline-block;
                                padding: 5px;
                                margin: 0;
                                background: 0;
                                border: 0;
                            }

                            .lng button:hover {
                                color: var(--primary-color);
                            }
                        </style>
                        <div class="item lng">

                            <span class="hline">&nbsp;</span>
                            <button type="button" class="btnAless">A-</button>
                            <button type="button" class="btnA">A</button>
                            <button type="button" class="btnAplus">A+</button>
                            <span class="hline">&nbsp;</span>

                        </div>
                        <div class="choto-logo">
                            <a class="" href="/">
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
                        <a href="/">
                            <img data-src="{{ asset('assets/img/logo/logo1.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" class="logo1" alt="Logo">
                            <img data-src="{{ asset('assets/img/logo/logo1.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" class="logo2" alt="Logo">
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img data-src="{{ asset('assets/img/logo/logo1.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" class="logo1" alt="Logo">
                        <img data-src="{{ asset('assets/img/logo/logo1.png') }}" src="{{ asset('assets/img/default/loding_logo.png')}}" class="logo2" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">About Us<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('mission') }}" class="nav-link">Mission</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('vission') }}" class="nav-link">Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('organization') }}" class="nav-link">Organisation
                                            Structure</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('department') }}" class="nav-link">Key Personnel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle "><b>Most Popular</b><i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu" style="width: 600px;columns: 2;">
                                    @foreach (getMostpupular() as $p_item)
                                        <li class="nav-item">
                                            <a href="{{ route('most-popular', ['id' => @$p_item->id]) }}"
                                                style="padding: 0px;">

                                                <div class="d-flex flex-row m-1">
                                                    <img class="img-responsive"
                                                        data-src="{{ asset('assets/img/mostpopular/' . @$p_item->img) }}" src="{{ asset('assets/img/default/loding_logo.png')}}"
                                                        alt=" {{ $p_item->name }}" width="70" height="50">
                                                    <div>
                                                        <div class=" p-2 text-capitalize"
                                                            style="font-size:18px;font-weight:bold;">
                                                            {{ $p_item->name }}</div>
                                                        <div class=" p-2 text-capitalize" style="margin-top:-20px;">
                                                            {{ $p_item->place }}</div>
                                                    </div>

                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="https://wbtdcl.wbtourismgov.in/home#viewdiv" class="nav-link toggle">WBTDCL Recommendation<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('wbtdcl-organisation') }}"
                                            class="nav-link">Organization</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('board-of-directors') }}" class="nav-link">Board
                                            of Directors</a>
                                    </li>
                                    <li class="nav-item"><a
                                            href="https://www.wbtdcl.com/assets/uploads/house_boat.pdf"
                                            title="WBTDCL House Boat" target="_blank" class="nav-link">House Boat</a>
                                    </li>
                                    <li class="nav-item"><a href="https://www.wbtdcl.com/assets/uploads/sumangal.PDF"
                                            title="WBTDCL Sumangal" target="_blank" class="nav-link">Sumangal</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('booking_contact') }}"
                                            title="WBTDCL Booking Contacts" class="nav-link">Booking Contacts</a></li>
                                    <li class="nav-item"><a href="https://www.wbtdcl.com/feedback"
                                            title="WBTDCL Online Booking" target="_blank" class="nav-link">May I help
                                            U</a></li>
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="#" class="nav-link ">Other Properties</a>
                            </li> --}}
                            <li class="nav-item">
                                <a href="#explore-thng" class="nav-link ">Exciting Destination</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Gallery<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/#galary" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('gallery-360') }}" class="nav-link">360 Degree View</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('media_gallery') }}">Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://wbtourism.gov.in/gallery/puja_celebration_album"
                                            title="Media Gallery Menu" target="_self">Durga Puja News 2022 </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://wbtourism.gov.in/gallery/photo_gallery"
                                            title="Place Gallery Menu" target="_self">Photo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://wbtourism.gov.in/gallery/video_gallery"
                                            title="Video Gallery Menu" target="_self">Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('inauguration')}}"
                                            title="Inauguration Gallery Menu" target="_self">Inauguration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('achievement')}}" target="_self">Achievement</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Tourist Corner<i
                                        class='bx bxs-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('tsp') }}" class="nav-link">Tourism Service Provider</a>
                                            </li>
                                     
                                            <li class="nav-item"><a href="{{route('covid_19')}}"
                                                    class="nav-link">Covid - 19 Guideline</a></li>
                                            <li class="nav-item"><a href="{{route('book-type',['Brochure'])}}"
                                                    class="nav-link">Tourism Brochure</a></li>
                                            <li class="nav-item"><a href="{{route('book-type',['Leaflet'])}}"
                                                    class="nav-link">Tourism Leaflet</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('currency_converter')}}"
                                                    class="nav-link">Currency Converter</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('consulates')}}"
                                                    class="nav-link">Consulates</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('getdistlist')}}"
                                                    class="nav-link">Tourist Guides</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('marketing_agents')}}"
                                                    class="nav-link">Marketing Agents</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('travel_tips')}}"
                                                    class="nav-link">Travel Tips</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('biswa_bangla_store')}}"
                                                    class="nav-link">Biswa Bangla Store</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('distance_chart')}}"
                                                    class="nav-link">Distance Matrix</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('transport_services')}}"
                                                    class="nav-link">Transport Services</a></li class="nav-item">
                                            <li class="nav-item"><a href="{{route('private_malls')}}"
                                                    class="nav-link">Malls &amp; Markets</a></li>
                                        </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">e-Services<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link"
                                            href="https://discoverkolkata.wb.gov.in/DKWebApp/">Discover Kolkata
                                            (Integrated City Pass)</a></li>
                                    <li class="nav-item"><a class="nav-link" href="https://wbtconline.in/"
                                            target="_blank">Kolkata HOHO Bus Service</a></li>
                                    <li class="nav-item"><a class="nav-link" href="http://pujapermit.in/"
                                            target="_blank">Special Puja Pass, 2022</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('incentive_scheme')}}">Incentive Scheme 2021
                                            (Tourism Units)</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{route('rtsp_2021')}}">Recognition of Tourism
                                            Service Providers 2021</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('tgcs') }}">Tourist
                                            Guide Certification Scheme 2021</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('home-stay') }}">Home
                                            Stay</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">e-Booking<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="https://wbtdcl.wbtourismgov.in/home" class="nav-link">Online
                                            Properties Booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.wbtdcl.com/package" class="nav-link">Online Package
                                            Booking</a>
                                    </li>

                                </ul>
                            </li>

                            <!-- <li class="nav-item">
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
                        </li> -->

                            <li class="nav-item">
                                <a onclick="location.href='javascript:void(0);'" class="smolNav ght"
                                    class="ght"><i class='bx bx-menu'></i></a>
                                <!-- <a onclick="location.href='javascript:void(0);'" class="smolNav"> <span></span><span></span><span class="lastChild"></span> </a> -->
                            </li>

                        </ul>
                    </div>

                    <a class="navbar-brand" href="index.html">
                        <img data-src="{{ asset('assets/img/logo/wb_logo.png') }}"  src="{{ asset('assets/img/default/loding_logo.png')}}"class="logo-wb" alt="Logo"
                            width="50" height="50">

                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>

<nav class="menuBox">
    <div class="subMenu">
        <div id="boxlink1" class="boxlink">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Policy Act</span></a></div>
                <ul class="col-md-12">
                    <li><a href="{{ route('tourism_policy') }}"
                            title="Tourism Policy 2019 Menu">Tourism Policy</a></li>
                    <li><a href="{{ route('tea_tourism_policy') }}"
                            title="Tea Tourism Policy 2019 Menu">Tea Tourism Policy</a></li>
                    <li><a href="{{ route('homestay_tourism_policy') }}"
                            title="Homestay Tourism Policy 2017">Home Stay Tourism Policy</a></li>
                    <li><a href="{{ route('incentive_tourism_policy') }}"
                            title="Incentive Scheme Menu">Incentive Scheme</a></li>
                    <li><a href="https://wbtourism.gov.in/home/download/pdf/timeline_notification_wbis_2021.pdf"
                            target="_blank" title="Timeline Notification for WBIS 2021 Menu">Timeline Notification for
                            WBIS 2021</a></li>
                    <li><a href="{{ route('paryatan_tourism_policy') }}" title="Paryatan Sahayata Prokolpo 2021">Paryatan Sahayata Prakalpa</a></li>
                    <li><a href="{{ route('recognition_tsp_tourism_policy') }}"
                            title="Recognition of Tourism Service Providers of West Bengal 2021">Recognition of Tourism
                            Service Providers 2021</a></li>
                    <li><a href="{{ route('tourist_guide_tourism_policy') }}"
                            title="West Bengal Tourist Guide Certification Scheme 2021">West Bengal Tourist Guide
                            Certification Scheme 2021</a></li>

                </ul>
                {{-- <ul class="col-md-12">

                    <li class="nav-item">
                        <a href="#" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">360 Gallery</a>
                    </li>
                </ul> --}}
            </div>
        </div>
        <div id="boxlink2" class="boxlink" style="display: none;">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Publications</span></a></div>
                <ul class="col-md-12">
                    <li class="nav-item">
                        <a href="{{route('experience-bengal')}}" class="nav-link">Article</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://wbtourismdotblog.wordpress.com/" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('newsletter')}}" class="nav-link">News Letter</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="boxlink3" class="boxlink" style="display: none;">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Tourism corner</span></a></div>
                <ul class="col-md-12">
                    <li class="nav-item">
                        <a href="tsp.html" class="nav-link">Tourism Service Provider</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="boxlink4" class="boxlink" style="display: none;">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Events</span></a></div>
                <ul class="col-md-12">
                    <li>
                        <a href="{{route('tourism_gallery')}}">1st
                            Joint Tourism Strategy Meet 2022</a>
                    </li>
                    <li><a href="{{route('btif')}}">Bengal Tourism Information Fair (BTIF)</a></li>
                    <li><a href="{{route('kolkata_christmas_festival')}}">Kolkata Christmas
                            Festival</a></li>
                    <li><a href="{{route('kolkata_connect')}}">Kolkata Connect</a></li>
                    <li><a href="{{route('destination_east')}}" title="Destination East Menu"
                            target="_self">Destination East</a></li>
                    <li><a href="{{route('events_gallery')}}"
                            title="Sub-regional Conference on World Heritage Menu" target="_self">Sub-regional
                            Conference on World Heritage</a></li>
                    <li><a href="{{route('other_events_gallery')}}" title="Others" target="_self">Other Tourism
                            Events</a></li>
                    <li><a href="{{route('bgbs')}}" title="Bengal Global Business Summit"
                            target="_self">BGBS</a></li>

                </ul>
            </div>
        </div>
        <div id="boxlink5" class="boxlink">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Explore</span></a></div>
                <ul class="col-md-12">
                    @foreach (getExplores() as $explore)
                    <li><a href="{{$explore->url}}">{{$explore->title}}</a></li>
                    @endforeach
                   
                </ul>
            </div>
        </div>

        <a onclick="location.href='javascript:void(0);'" class="subMenuClose">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="23px" height="23px">
                <g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10">
                    <path d="M23.5 12.5h-22M9 20l-7.5-7.5L9 5"></path>
                </g>
            </svg>
        </a>

    </div>
    <ul class="menuList">
        <li> <a href="/">Home</a> </li>
        <li> <a onclick="location.href='javascript:void(0);'" id="link2" class="menu-link">Publications
            </a>
        </li>
        <li> <a onclick="location.href='javascript:void(0);'" id="link4" class="menu-link">Events</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="location.href='javascript:void(0);'" id="link1" class="menu-link">Policy
                Act</a>
        </li>
        <li class="nav-item">
            <a href="#" onclick="location.href='javascript:void(0);'" id="link5"
                class="menu-link">Explore</a>
        </li>
    </ul>
    <a onclick="location.href='javascript:void(0);'" class="menuBoxClose">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="15px" height="15px" fill="#fff">
            <path
                d="M16.7 15.1L28.1 3.7c.5-.5.5-1.2 0-1.7s-1.2-.5-1.7 0L15 13.3 3.6 1.9c-.5-.5-1.2-.5-1.7 0s-.5 1.2 0 1.7L13.3 15 1.9 26.5c-.5.5-.5 1.2 0 1.7.2.2.7.2 1 .2s.7 0 .7-.2L15 16.8l11.4 11.4c.2.2.7.2 1 .2.2 0 .7 0 .7-.2.5-.5.5-1.2 0-1.7L16.7 15.1z">
            </path>
        </svg>
    </a>
</nav>
