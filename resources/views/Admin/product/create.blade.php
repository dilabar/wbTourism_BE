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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>
                    @endif
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Upload Product</h1>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <form class="contact100-form validate-form" action="{{ route('product.store') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="wrap-input100 validate-input" data-validate="Product Name/Title">
                                    <input class="input100" type="text" name="name"
                                        placeholder="Product Name/Title">
                                    <span class="focus-input100"></span>
                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Product Short Description">
                                    <input class="input100" type="text" name="description"
                                        placeholder="Product Short Description">
                                    <span class="focus-input100"></span>
                                </div>
                                {{-- <div class="wrap-input100 validate-input" data-validate="Product Full Description is required">
                        <textarea class="input100 ckeditor" name="message" placeholder="Product Full Description..."> </textarea>
                        <span class="focus-input100"></span>
                      </div> --}}
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Thumbnail Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                        name="thumbnail_image">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Full Image</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1"
                                        name="full_image">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleFormControlFile1">Front Page Selection</label>
                                    <select id="example-getting-started" multiple="multiple">
                                        <option value="cheese">Banner Slider</option>
                                        <option value="tomatoes">Top Ten Destination</option>
                                        <option value="mozarella">Explore in West Bengal</option>

                                    </select>
                                </div> --}}
                                <div class="wrap-input100 validate-input" data-validate="Product Gradient">
                                    <input class="input100" type="text" name="gradient"
                                        placeholder="Product Gradient">
                                    <span class="focus-input100"></span>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input class="btn btn-primary" type="submit" name="" id=""
                                    value="Add" />

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
