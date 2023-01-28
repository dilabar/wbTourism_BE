<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Admin/css/bootstrap-multiselect.css') }}">
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
                    @include('admin.layouts.message')

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="{{ url('/admin/consulates/list') }}" class="btn btn-info"> <i class="fas fa-list-ol"></i>
                            View Consulates</a>
                    </div>
                    <div class="row">
                        <div class="card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Edit Consulates</h6>

                            </div>
                            <form class="contact100-form validate-form" action="{{ route('update') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                <div class="wrap-input100 validate-input" data-validate="Country Name">
                                    <input class="input100" type="text" name="countryname"
                                        placeholder="Country Name" value="{{$details_db->country_name}}">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Office Name">
                                    <input class="input100" type="text" name="officename" placeholder="Office Name" value="{{$details_db->office_name}}">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Address">
                                    <input class="input100" type="text" name="address" placeholder="Address" value="{{$details_db->address}}">
                                    <span class="focus-input100"></span>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="consulate_id" value="{{ $details_db->id }}" />
                                <input class="btn btn-primary" type="submit" name="" id=""
                                    value="Update" />
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
    <script src="{{ asset('/assets/Admin/js/bootstrap-multiselect.js') }}"></script>

    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-getting-started').multiselect();
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

</html>
