<style>
    .toggled .sidebar-brand-icon img{
        width: 90px
    }
    .sidebar{
        background-image: url({{asset('assets/img/bg/sidebar-victoria.png')}});
        color: #fff;
        -webkit-transition: all .3s;
        -o-transition: all .3s;
        transition: all .3s;
        position: relative;
        z-index: 0;
    }
    .sidebar::after{
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        content: '';
        --primary-color: #009688;
	--secondary-color: #090031;
        background: #009688;
        background: -moz-linear-gradient(45deg,#009688 0%,#090031 100%);
        background: -webkit-gradient(left bottom,right top,color-stop(0%,#009688),color-stop(100%,#090031));
        background: -webkit-linear-gradient(45deg,#009688 0%,#090031 100%);
        background: -o-linear-gradient(45deg,#009688 0%,#090031 100%);
        background: -ms-linear-gradient(45deg,#009688 0%,#090031 100%);
        background: linear-gradient(45deg,#009688 0%,#090031 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#009688',endColorstr='#090031',GradientType=1 );
        opacity: .8;
        z-index: -1;
    }

</style>
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
        <div class="sidebar-brand-icon ">
            <img src="{{asset('assets/img/logo/logo_footer.png')}}" alt="" width="140">
        </div>
        {{-- <div class="sidebar-brand-text mx-3"><img src="{{asset('assets/img/logo/logo_footer.png')}}" alt="" width="140"></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span> </a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Configuration</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/admin/configure/imageWidthHeight') }}">Set Image Width and
                    <br />
                    Height</a>
                <a class="collapse-item" href="utilities-border.html">Edit Image Width and <br />
                    Height</a>

            </div>
        </div>
    </li> --}}
    <!-- Nav Item - Banner Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBanner"
            aria-expanded="true" aria-controls="collapseBanner">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Banner</span>
        </a>

        <div id="collapseBanner" class="collapse " aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/banner/create') ? 'active' : '' }}" href="{{ url('/admin/banner/create') }}"><i class="fas fa-upload"></i> Create Banner</a>
                <a class="collapse-item {{ Request::url() == url('/admin/banner/list') ? 'active' : '' }}" href="{{ url('/admin/banner/list') }}"><i class="fas fa-fw fa-th-list"></i> List Banner</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/banner/details/Add') ? 'active' : '' }}" href="{{ url('/admin/banner/details/Add') }}">Add Details Page</a> --}}
            </div>
        </div>
    </li>
    <!-- Nav Item - Product Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Product</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/product/create') ? 'active' : '' }}"  href="{{ url('/admin/product/create') }}"><i class="fas fa-upload"></i> Create Product</a>
                <a class="collapse-item {{ Request::url() == url('/admin/product/list') ? 'active' : '' }}" href="{{ url('/admin/product/list') }}"><i class="fas fa-fw fa-th-list"></i> List Product</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/product/details/Add') ? 'active' : '' }}" href="{{ url('/admin/product/details/Add') }}">Add Details Page</a> --}}
            </div>
        </div>
    </li>
    <!-- Nav Item - Destination Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDestinations"
            aria-expanded="true" aria-controls="collapseDestinations">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Destination</span>
        </a>
        <div id="collapseDestinations" class="collapse" aria-labelledby="headingDestinations"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/destination/create') ? 'active' : '' }}" href="{{ url('/admin/destination/create') }}"><i class="fas fa-upload"></i> Create Destination</a>
                <a class="collapse-item {{ Request::url() == url('/admin/destination/list') ? 'active' : '' }}" href="{{ url('/admin/destination/list') }}"><i class="fas fa-fw fa-th-list"></i> list Destination</a>

                <a class="collapse-item {{ Request::url() == url('/admin/destination/category/Add') ? 'active' : '' }}" href="{{ url('/admin/destination/category/Add') }}"><i class="fas fa-upload"></i> Add Category</a>
                <a class="collapse-item {{ Request::url() == url('/admin/destination/category/list') ? 'active' : '' }}" href="{{ url('/admin/destination/category/list') }}"><i class="fas fa-fw fa-th-list"></i> list Category</a>
                <a class="collapse-item {{ Request::url() == url('/admin/destination/details/Add') ? 'active' : '' }}" href="{{ url('/admin/destination/details/Add') }}"><i class="fas fa-upload"></i> Add Details Page</a>
                <a class="collapse-item {{ Request::url() == url('/admin/destination/page/list') ? 'active' : '' }}" href="{{ url('/admin/destination/page/list') }}"><i class="fas fa-fw fa-th-list"></i> All Details Page</a>


            </div>
        </div>
    </li>



    <!-- Nav Festival - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFestival"
            aria-expanded="true" aria-controls="collapseFestival">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Festival</span>
        </a>
        <div id="collapseFestival" class="collapse" aria-labelledby="headingFestival" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/festival/create') ? 'active' : '' }}" href="{{ url('/admin/festival/create') }}"><i class="fas fa-upload"></i> Create Festival</a>
                <a class="collapse-item {{ Request::url() == url('/admin/festival/list') ? 'active' : '' }}" href="{{ url('/admin/festival/list') }}"><i class="fas fa-fw fa-th-list"></i> List Festival</a>

            </div>
        </div>
    </li>
    <!-- Nav Event - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent"
            aria-expanded="true" aria-controls="collapseEvent">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Event</span>
        </a>
        <div id="collapseEvent" class="collapse" aria-labelledby="headingEvent" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item  {{ Request::url() == url('/admin/event/create') ? 'active' : '' }}" href="{{ url('/admin/event/create') }}"><i class="fas fa-upload"></i> Create Event</a>
                <a class="collapse-item  {{ Request::url() == url('/admin/event/list') ? 'active' : '' }}" href="{{ url('/admin/event/list') }}"><i class="fas fa-fw fa-th-list"></i> List Event</a>
            </div>
        </div>
    </li>
    <!-- Nav Section 4 - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseItem"
            aria-expanded="true" aria-controls="collapseItem">
            <i class="fas fa-fw fa-plus-square"></i>
            <span>Front Page Tabs</span>
        </a>
        <div id="collapseItem" class="collapse" aria-labelledby="headingItem" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/item/create') ? 'active' : '' }}" href="{{ url('/admin/item/create') }}">Upload Item</a>
                <a class="collapse-item {{ Request::url() == url('/admin/item/list') ? 'active' : '' }}" href="{{ url('/admin/item/list') }}">Edit Item</a>
            </div>
        </div>
    </li> --}}
    <!-- Nav Gallery - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery"
            aria-expanded="true" aria-controls="collapseGallery">
            <i class="fas fa-fw fa-images" aria-hidden="true"></i>
            <span>Gallery</span>
        </a>
        <div id="collapseGallery" class="collapse" aria-labelledby="headingGallery" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/gallery/create') ? 'active' : '' }}" href="{{ url('/admin/gallery/create') }}">
                    <i class="fas fa-upload"></i>Create Gallery
                </a>
                <a class="collapse-item {{ Request::url() == url('/admin/gallery/list') ? 'active' : '' }}" href="{{ url('/admin/gallery/list') }}"><i class="fas fa-fw fa-th-list"></i> list Gallery</a>
                <a class="collapse-item {{ Request::url() == url('/admin/gallery/image/add') ? 'active' : '' }}" href="{{ route('addImageFrm') }}"><i class="fas fa-fw fa-add"></i> Add Image</a>
                <a class="collapse-item {{ Request::url() == url('/admin/gallery/image/list') ? 'active' : '' }}" href="{{ route('image-list') }}"><i class="fas fa-fw fa-th-list"></i> list Images</a>
                
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBook"
            aria-expanded="true" aria-controls="collapseBook">
            <i class="fas fa-fw fa-book-open"></i>
            <span>Book</span>
        </a>
        <div id="collapseBook" class="collapse" aria-labelledby="headingBook" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/books/create') ? 'active' : '' }}" href="{{ url('/admin/books/create') }}"><i class="fas fa-upload"></i> Create Book</a>
                <a class="collapse-item {{ Request::url() == url('/admin/books/list') ? 'active' : '' }}" href="{{ url('/admin/books/list') }}"><i class="fas fa-fw fa-th-list"></i>list Book</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConsulates"
            aria-expanded="true" aria-controls="collapseConsulates">
            <i class="fas fa-fw fa-users"></i>
            <span>Consulates</span>
        </a>
        <div id="collapseConsulates" class="collapse" aria-labelledby="headingConsulates"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/consulates/create') ? 'active' : '' }}" href="{{ url('/admin/consulates/create') }}"><i class="fas fa-upload"></i>Create Consulates</a>
                <a class="collapse-item {{ Request::url() == url('/admin/consulates/list') ? 'active' : '' }}" href="{{ url('/admin/consulates/list') }}"><i class="fas fa-fw fa-th-list"></i>List Consulates</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTouristGuide"
            aria-expanded="true" aria-controls="collapseTouristGuide">
            <i class="fas fa-fw fa-users"></i>
            <span>Tourist Guide</span>
        </a>
        <div id="collapseTouristGuide" class="collapse" aria-labelledby="headingTouristGuide"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/touristguide/create') ? 'active' : '' }}" href="{{ url('/admin/touristguide/create') }}">Create Tourist Guide</a>
                <a class="collapse-item {{ Request::url() == url('/admin/touristguide/list') ? 'active' : '' }}" href="{{ url('/admin/touristguide/list') }}"><i class="fas fa-fw fa-th-list"></i>List Tourist Guide</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMarketingAgent"
            aria-expanded="true" aria-controls="collapseMarketingAgent">
            <i class="fas fa-fw fa-cog"></i>
            <span>Marketing Agent</span>
        </a>
        <div id="collapseMarketingAgent" class="collapse" aria-labelledby="headingMarketingAgent"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/marketingagent/create') ? 'active' : '' }}" href="{{ url('/admin/marketingagent/create') }}"><i class="fas fa-upload"></i> Create Marketing Agent</a>
                <a class="collapse-item {{ Request::url() == url('/admin/marketingagent/list') ? 'active' : '' }}" href="{{ url('/admin/marketingagent/list') }}"><i class="fas fa-fw fa-th-list"></i>List Marketing Agent</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMallsnMarket"
            aria-expanded="true" aria-controls="collapseMallsnMarket">
            <i class="fas fa-fw fa-cog"></i>
            <span>Malls & Markets</span>
        </a>
        <div id="collapseMallsnMarket" class="collapse" aria-labelledby="headingMallsnMarket"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/mallsnmarket/create') ? 'active' : '' }}" href="{{ url('/admin/mallsnmarket/create') }}"><i class="fas fa-upload"></i> Create Malls & Markets</a>
                <a class="collapse-item {{ Request::url() == url('/admin/mallsnmarket/list') ? 'active' : '' }}" href="{{ url('/admin/mallsnmarket/list') }}"><i class="fas fa-fw fa-th-list"></i>List Malls & Markets</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArticle"
            aria-expanded="true" aria-controls="collapseArticle">
            <i class="fas fa-fw fa-cog"></i>
            <span>Article</span>
        </a>
        <div id="collapseArticle" class="collapse" aria-labelledby="headingArticle"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/admin/article/create') }}"><i class="fas fa-upload"></i>Create Article</a>
                <a class="collapse-item" href="{{ url('/admin/article/list') }}"><i class="fas fa-fw fa-th-list"></i>List Article</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNewsletter"
            aria-expanded="true" aria-controls="collapseNewsletter">
            <i class="fas fa-fw fa-cog"></i>
            <span>Newsletter</span>
        </a>
        <div id="collapseNewsletter" class="collapse" aria-labelledby="headingNewsletter"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/admin/newsletter/create') }}"><i class="fas fa-upload"></i>Create Newsletter</a>
                <a class="collapse-item" href="{{ url('/admin/newsletter/list') }}"><i class="fas fa-upload"></i>List Newsletter</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLegends"
            aria-expanded="true" aria-controls="collapseLegends">
            <i class="fas fa-fw fa-cog"></i>
            <span>Legends Of Bengal</span>
        </a>
        <div id="collapseLegends" class="collapse" aria-labelledby="headingLegends"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('/admin/legends/create') }}"><i class="fas fa-upload"></i>Create Legend</a>
                <a class="collapse-item" href="{{ url('/admin/legends/list') }}"><i class="fas fa-upload"></i>List Legend</a>
            </div>
        </div>
    </li>
    <!-- Nav Testimonial - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonial"
            aria-expanded="true" aria-controls="collapseTestimonial">
            <i class="fas fa-fw fa-comment"></i>
            <span>Testimonial</span>
        </a>
        <div id="collapseTestimonial" class="collapse" aria-labelledby="headingTestimonail"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/testimonial/create') ? 'active' : '' }}" href="{{ url('/admin/testimonial/create') }}"><i class="fas fa-upload"></i> Create Testimonial</a>
                <a class="collapse-item {{ Request::url() == url('/admin/testimonial/list') ? 'active' : '' }}" href="{{ url('/admin/testimonial/list') }}"><i class="fas fa-fw fa-th-list"></i> List Testimonial</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('/admin/configure/fronpage') }}">
            <i class="fas fa-fw fa-cog"></i>
            <span>Front Page Management</span></a>
    </li> --}}
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDepartment"
            aria-expanded="true" aria-controls="collapseDepartment">
            <i class="fas fa-fw fa-cog"></i>
            <span>Department</span>
        </a>
        <div id="collapseDepartment" class="collapse" aria-labelledby="collapseDepartment"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item {{ Request::url() == url('/admin/department/tender/create') ? 'active' : '' }}" href="{{ url('/admin/department/tender/create') }}"><i class="fas fa-upload"></i> Create Tender</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/department/tender/list') ? 'active' : '' }}" href="{{ url('/admin/department/tender/list') }}"><i class="fas fa-list"></i> List Tender</a> --}}
                <a class="collapse-item {{ Request::url() == url('/admin/department/rti/create') ? 'active' : '' }}" href="{{ url('/admin/department/rti/create') }}"><i class="fas fa-upload"></i> Create RTI</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/department/rti/list') ? 'active' : '' }}" href="{{ url('/admin/department/rti/list') }}"><i class="fas fa-list"></i> List RTI</a> --}}

                <a class="collapse-item {{ Request::url() == url('/admin/department/circular/create') ? 'active' : '' }}" href="{{ url('/admin/department/circular/create') }}"><i class="fas fa-upload"></i> Create Circular</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/department/circular/list') ? 'active' : '' }}" href="{{ url('/admin/department/circular/list') }}"><i class="fas fa-list"></i> List Circular</a> --}}

                <a class="collapse-item {{ Request::url() == url('/admin/department/notice/create') ? 'active' : '' }}" href="{{ url('/admin/department/notice/create') }}"><i class="fas fa-upload"></i> Create Notice</a>
                {{-- <a class="collapse-item {{ Request::url() == url('/admin/department/notice/list') ? 'active' : '' }}" href="{{ url('/admin/department/notice/list') }}"><i class="fas fa-list"></i> List Notice</a> --}}
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
