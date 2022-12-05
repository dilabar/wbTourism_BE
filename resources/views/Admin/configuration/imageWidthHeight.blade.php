<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/Admin/css/select2.min.css') }}">
<link href="{{ asset('assets/Admin/css/form.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Admin.layouts.sidebar')
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('Admin.layouts.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Set Image Width and Height</h1>
                        
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                       
                    <form class="contact100-form validate-form">
                    <div class="wrap-input100 input100-select">
                            <div>
                            <select class="selection-2" name="service">
                            <option>Please Select Section</option>
                            <option>Banner</option>
                            <option>Top 10 Destination</option>
                            <option>Explore in West Bengal</option>
                            </select>
                            </div>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Thumbnai Image Min Width">
                            <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Thumbnai Image Min Height">
                            <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Full Image Min Width">
                            <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <input class="input100" type="text" name="name" placeholder="Full Image Min Height">
                            <span class="focus-input100"></span>
                            </div>
                            <div class="container-contact100-form-btn">
                            <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button class="contact100-form-btn">
                            <span>
                            Submit
                            <i class="fa fa-long-arrow-right m-l-2" aria-hidden="true"></i>
                            </span>
                            </button>
                            </div>
                            </div>
                     </form>
                          
                          
                       
                    </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Admin.layouts.footer')
           
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 
    @include('Admin.common.includecommonjs')

</body>

</html>