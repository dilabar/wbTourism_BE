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
                        <a href="{{ url('/admin/touristguide/list') }}" class="btn btn-info"> <i class="fas fa-list-ol"></i>
                            View Tourist Guide</a>
                    </div>
                    <div class="row">
                        <div class="card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Create Tourist Guide</h6>
                            </div>
                            <form class="contact100-form validate-form" action="{{ route('touristguide.store') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                <label>District Name</label>
                                <select class="form-select" name="district_name">
                                    @foreach($district as $dlist)
                                    <option value="{{$dlist->district_name .'_'.$dlist->district_code}}">{{$dlist->district_name}}</option>
                                    @endforeach
                                </select>
                                <label>Category Name</label>
                                <select class="form-select" name="category">
                                    <option value="Veteran">Veteran</option>
                                </select>   
                                <div class="wrap-input100 validate-input" data-validate="">
                                    <input class="input100" type="text" name="name" placeholder="Name">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Photo Upload</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                        name="guide_image">
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="">
                                    <input class="input100" type="text" name="contactinfo"
                                        placeholder="Contact Info">
                                    <span class="focus-input100"></span>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input class="btn btn-primary" type="submit" name="" id=""
                                    value="Add" />
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
