<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
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
  <!-- Page level plugins -->
  <script src="{{ asset ('/assets/Admin/vendor/chart.js/Chart.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset ('/assets/Admin/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset ('/assets/Admin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>