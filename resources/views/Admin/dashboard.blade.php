<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
</head>
<style>
    .small-box {
        border-radius: 0.25rem;
        box-shadow: 0 0 1px rgb(0 0 0 / 13%), 0 1px 3px rgb(0 0 0 / 20%);
        display: block;
        margin-bottom: 20px;
        position: relative;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    .bg-info,
    .bg-info>a {
        color: #fff !important;
    }

    .small-box>.inner {
        padding: 10px;
    }

    .small-box .icon {
        color: rgba(0, 0, 0, .15);
        z-index: 0;
    }

    .small-box>.small-box-footer {
        background-color: rgba(0, 0, 0, .1);
        color: rgba(255, 255, 255, .8);
        display: block;
        padding: 3px 0;
        position: relative;
        text-align: center;
        text-decoration: none;
        z-index: 10;
    }

    .small-box .icon>i.ion {
        font-size: 70px;
        top: 20px;
    }

    .small-box .icon>i {
        font-size: 90px;
        position: absolute;
        right: 15px;
        top: 15px;
        transition: -webkit-transform .3s linear;
        transition: transform .3s linear;
        transition: transform .3s linear, -webkit-transform .3s linear;
    }

    .bg-info,
    .bg-info>a {
        color: #fff !important;
    }

    .bg-success,
    .bg-success>a {
        color: #fff !important;
    }

    .bg-success {
        background-color: #28a745 !important;
    }

    .bg-warning,
    .bg-warning>a {
        color: #1f2d3d !important;
    }

    .bg-warning {
        background-color: #ffc107 !important;
    }

    .bg-danger,
    .bg-danger>a {
        color: #fff !important;
    }

    .bg-danger {
        background-color: #dc3545 !important;
    }
 
</style>

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
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $page }}</h3>
                                    <p>New Pages</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-link"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $image }}</h3>
                                    <p>Images</p>
                                </div>
                                <div class="icon">
                                    <i class="fas  fa-images"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $user }}</h3>
                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $product }}</h3>
                                    <p>Products</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-photo-video"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
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
    <!-- Page level plugins -->
    <script src="{{ asset('/assets/Admin/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('/assets/Admin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('/assets/Admin/js/demo/chart-pie-demo.js') }}"></script>
</body>

</html>
