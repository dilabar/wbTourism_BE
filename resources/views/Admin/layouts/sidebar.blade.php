<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
       
    </div>
    <div class="sidebar-brand-text mx-3">West Bengal Tourism</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{url('/admin')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Configuration</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item" href="{{url('/admin/configure/imageWidthHeight')}}">Set Image Width and <br/>
                Height</a>
            <a class="collapse-item" href="utilities-border.html">Edit Image Width and <br/>
                Height</a>
           
        </div>
    </div>
</li>
<!-- Nav Item - Banner Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBanner"
        aria-expanded="true" aria-controls="collapseBanner">
        <i class="fas fa-fw fa-cog"></i>
        <span>Banner</span>
    </a>
    <div id="collapseBanner" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="{{url('/admin/banner/create')}}">Upload Banner</a>
            <a class="collapse-item"  href="{{url('/admin/banner/list')}}">Edit Banner</a>
            <a class="collapse-item"  href="{{url('/admin/banner/details/Add')}}">Add Details Page</a>
        </div>
    </div>
</li>
<!-- Nav Item - Product Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-cog"></i>
        <span>Product</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="{{url('/admin/product/create')}}">Upload Product</a>
            <a class="collapse-item" href="{{url('/admin/product/list')}}">Edit Product</a>
          
        </div>
    </div>
</li>
<!-- Nav Item - Destination Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDestinations"
        aria-expanded="true" aria-controls="collapseDestinations">
        <i class="fas fa-fw fa-cog"></i>
        <span>Destination</span>
    </a>
    <div id="collapseDestinations" class="collapse" aria-labelledby="headingDestinations"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
         
            <a class="collapse-item" href="{{url('/admin/destination/create')}}">Upload Destination</a>
            <a class="collapse-item" href="{{url('/admin/destination/list')}}">Edit Destination</a>
            <a class="collapse-item"  href="{{url('/admin/destination/details/Add')}}">Add Details Page</a>

        </div>
    </div>
</li>



<!-- Nav Festival - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFestival"
        aria-expanded="true" aria-controls="collapseFestival">
        <i class="fas fa-fw fa-cog"></i>
        <span>Festival</span>
    </a>
    <div id="collapseFestival" class="collapse" aria-labelledby="headingFestival" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
           <a class="collapse-item" href="{{url('/admin/festival/create')}}">Upload Festival</a>
           <a class="collapse-item" href="{{url('/admin/festival/list')}}">Edit Festival</a>

        </div>
    </div>
</li>
<!-- Nav Event - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEvent"
        aria-expanded="true" aria-controls="collapseEvent">
        <i class="fas fa-fw fa-cog"></i>
        <span>Event</span>
    </a>
    <div id="collapseEvent" class="collapse" aria-labelledby="headingEvent" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="{{url('/admin/event/create')}}">Upload Event</a>
            <a class="collapse-item" href="{{url('/admin/event/list')}}">Edit Event</a>
        </div>
    </div>
</li>
<!-- Nav Section 4 - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseItem"
        aria-expanded="true" aria-controls="collapseItem">
        <i class="fas fa-fw fa-cog"></i>
        <span>Front Page Tabs</span>
    </a>
    <div id="collapseItem" class="collapse" aria-labelledby="headingItem" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="{{url('/admin/item/create')}}">Upload Item</a>
            <a class="collapse-item" href="{{url('/admin/item/list')}}">Edit Item</a>
        </div>
    </div>
</li>
<!-- Nav Gallery - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGallery"
        aria-expanded="true" aria-controls="collapseGallery">
        <i class="fas fa-fw fa-cog"></i>
        <span>Gallery</span>
    </a>
    <div id="collapseGallery" class="collapse" aria-labelledby="headingGallery" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="{{url('/admin/gallery/create')}}">Upload Gallery</a>
        <a class="collapse-item" href="{{url('/admin/gallery/list')}}">Edit Gallery</a>
        </div>
    </div>
</li>
<!-- Nav Testimonial - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonial"
        aria-expanded="true" aria-controls="collapseTestimonial">
        <i class="fas fa-fw fa-cog"></i>
        <span>Testimonial</span>
    </a>
    <div id="collapseTestimonial" class="collapse" aria-labelledby="headingTestimonail" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="{{url('/admin/testimonial/create')}}">Upload Testimonial</a>
        <a class="collapse-item" href="{{url('/admin/testimonial/list')}}">Edit Testimonial</a>
        </div>
    </div>
</li>
<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="{{url('/admin/configure/fronpage')}}">
        <i class="fas fa-fw fa-cog"></i>
        <span>Front Page Management</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>