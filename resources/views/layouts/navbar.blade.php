<header class="header-area">
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-sm-6">
                    <div class="contact-info">
                        <div class="content">
                            <i class='bx bx-phone'></i>
                            <a href="tel:+0123456987">18002121655</a>
                        </div>
                        <div class="content">
                            <i class='bx bx-map'></i>
                            <a href="#">Mon-Fri: 8 AM – 7 PM</a>
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
                            <a href="#" class="btn-secondary">
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
                        <!-- <div class="font_increase">
                        <a href="#"><span class="increase">A-</span></a>
                        <a href="#"><span class="increase">A<span></a>
                        <a href=""><span class="increase">A+</span></a>
                     </div> -->
                        <div class="item lng">

                            <span class="hline">&nbsp;</span>
                            <button type="button" class="btnAless">A-</button>
                            <button type="button" class="btnA">A</button>
                            <button type="button" class="btnAplus">A+</button>
                            <span class="hline">&nbsp;</span>

                        </div>
                        <div class="choto-logo">
                            <a class="" href="/">
                                <!-- <img src="assets/img/wb_logo.png" class="logo1" alt="Logo" style="width:35px;margin-left: 21px;"> -->
                                <!-- <img src="assets/img/wb_logo.png" class="logo2" alt="Logo" style="width:40px;margin-left: 100px;"> -->
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
                            <img src="{{ asset('assets/img/logo/logo1.png') }}" class="logo1" alt="Logo">
                            <img src="{{ asset('assets/img/logo/logo1.png') }}" class="logo2" alt="Logo">
                        </a>

                    </div>

                </div>
            </div>
        </div>
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo/logo1.png') }}" class="logo1" alt="Logo">
                        <img src="{{ asset('assets/img/logo/logo1.png') }}" class="logo2" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Most Popular<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu" style="width: 600px;columns: 2;">
                                    @foreach (@$most_popular as $p_item)
                                            <li class="nav-item">
                                                <a href="{{ route('most-popular', ['id' => @$p_item->id]) }}"
                                                    style="padding: 0px;">

                                                    <div class="d-flex flex-row m-1 border">
                                                        <img class="img-responsive"
                                                            src="{{ asset('assets/img/mostpopular/' . @$p_item->img) }}"
                                                            alt="" width="60" height="50">
                                                        <div class="p-2">{{ @$p_item->name }}</div>
                                                    </div>
                                                </a>
                                            </li>
                                    @endforeach
                                </ul>


                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#explore-thng" class="nav-link ">Destination</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">E-Booking<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Online Properties Booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Online Package Booking</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Tourism Corner<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="tsp.html" class="nav-link">Tourism Service Provider</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">Gallery<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#galary" class="nav-link">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="360_view.html" class="nav-link">360 Gallery</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link toggle">WBTDCL<i
                                        class='bx bxs-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Organization</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Board of Directors</a>
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
                        <img src="{{ asset('assets/img/logo/wb_logo.png') }}" class="logo-wb" alt="Logo"
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
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Gallery</span></a></div>
                <ul class="col-md-12">

                    <li class="nav-item">
                        <a href="sunanda.html#galary" class="nav-link">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a href="360_view.html" class="nav-link">360 Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="boxlink2" class="boxlink" style="display: none;">
            <div class="row">
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Publications</span></a></div>
                <ul class="col-md-12">
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
                <div class="col-md-12 subMenuTitle"><a href="#"><span>Registration Form</span></a></div>
                <ul class="col-md-12">
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

        <li> <a href="sunanda.html">Home</a> </li>
        <li class="nav-item">
            <a href="#explore-thng" class="nav-link ">Destination</a>
        </li>
        <li> <a onclick="location.href='javascript:void(0);'" id="link1" class="menu-link active">Gallery</a>
        </li>
        <li> <a onclick="location.href='javascript:void(0);'" id="link2" class="menu-link">Publications
            </a></li>

        <!-- <li> <a href=".html"></a> </li> -->
        <li> <a onclick="location.href='javascript:void(0);'" id="link3" class="menu-link">Tourism Corner
            </a>
        </li>
        <li> <a onclick="location.href='javascript:void(0);'" id="link4" class="menu-link">Registration Form </a>
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
