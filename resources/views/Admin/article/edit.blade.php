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
                        <h6 class="m-0 font-weight-bold ">Update Article</h6>
                    </div>
                    <div class="row">
                        <div class="card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Upload Article</h6>

                            </div>
                            <form class="contact100-form validate-form" action="{{ route('articleupdate') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">

                                    <div class="wrap-input100 validate-input" data-validate="Book Title">
                                        <input class="input100 {{ $errors->has('title') ? 'form-control is-invalid' : '' }}" type="text" name="title" placeholder="Title"value="{{ $details_db->name }}">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Choose Image</label>
                                        <input type="file" class="form-control-file {{ $errors->has('article_image') ? 'form-control is-invalid' : '' }}" id="exampleFormControlFile1"
                                            name="article_image">
                                            <img height="100" width="100"src="{{$full}}"/>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Short Description">
                                        <input class="input100 {{ $errors->has('shortdescription') ? 'form-control is-invalid' : '' }}" type="text" name="shortdescription"
                                            placeholder="Short Description" value="{{ $details_db->short_description }}">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Date">
                                        <input class="input100 {{ $errors->has('date') ? 'form-control is-invalid' : '' }}" type="date" name="date" value="{{ $details_db->date }}">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Making">
                                        <input class="input100 {{ $errors->has('making') ? 'form-control is-invalid' : '' }}" type="text" name="making" placeholder="Making" value="{{ $details_db->making }}">
                                        <span class="focus-input100"></span>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    <input type="hidden" name="article_id" value="{{ $details_db->id }}" />
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
