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
                        <a href="{{ url('/admin/legends/list') }}" class="btn btn-info"> <i class="fas fa-list-ol"></i>
                            View Legends</a>
                    </div>
                    <div class="row">
                        <div class="card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Upload Legends</h6>

                            </div>
                            <form class="contact100-form validate-form" action="{{ route('legends.store') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="wrap-input100 validate-input" data-validate="Legends Name">
                                        <input class="input100 {{ $errors->has('legends_name') ? 'form-control is-invalid' : '' }}" type="text" name="legends_name" placeholder="Legends Name">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Image Upload</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                            name="legends_img">
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Date">
                                        <label for="exampleFormControlFile1">About</label>
                                        <textarea class="form-control-file" name="about"></textarea>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Date">
                                        <label for="exampleFormControlFile1">Born</label>
                                        <textarea class="form-control-file" name="born_place"></textarea>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Date">
                                        <label for="exampleFormControlFile1">Related Post</label>
                                        <textarea class="form-control-file" name="related_post"></textarea>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Legends Subject">
                                        <input class="input100 {{ $errors->has('letter_subject') ? 'form-control is-invalid' : '' }}" type="text" name="external_link"
                                            placeholder="External Link">
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
