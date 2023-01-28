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
                    @include('Admin.layouts.message')
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <a href="{{ url('/admin/gallery/list') }}" class="btn btn-info"> <i class="fas fa-list-ol"></i>
                            View Gallery</a>
                    </div>
                    <div class="row">
                        <div class=" card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Upload Gallery</h6>

                            </div>
                           
                            <form class="contact100-form validate-form" action="{{ route('gallery.store') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">


                                    <div class="wrap-input100 validate-input" data-validate="Gallery Name/Title">
                                        <input class="input100 {{ $errors->has('name') ? 'form-control is-invalid' : '' }}" type="text" name="name" value="{{ @old('name')}}"
                                            placeholder="Gallery Name/Title">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('name'))<div class="invalid-feedback">{{ $errors->first('name') }}.</div> @endif
                                    </div>
                                  
                                    <div class="form-group">
                                        
                                        <label for="example-getting-started">Showing only  @if ($errors->has('visible'))<div class="alert alert-danger">{{ $errors->first('visible') }}.</div> @endif</label>
                                        <select class="form-control" name="visible[]" class="{{ $errors->has('visible') ? 'is-invalid' : '' }}" id="example-getting-started" multiple tabindex="0">
                                            <option value="0" {{  @in_array('0',old('visible'))? 'selected' :''  }}>Home</option>
                                            <option value="1" {{  @in_array('1',old('visible'))? 'selected' :''  }}>Menu</option>
                                        
                                        </select>
                                        @if ($errors->has('visible'))<div class="invalid-feedback">{{ $errors->first('visible') }}.</div> @endif
                                    </div>
                                    {{-- <div class="wrap-input100 validate-input" data-validate="Gallery Short Description">
                            <input class="input100" type="text" name="description" placeholder="Gallery Short Description">
                       <span class="focus-input100"></span>
                      </div> --}}
                                    {{-- <div class="wrap-input100 validate-input" data-validate="Gallery Full Description is required">
                        <textarea class="input100 ckeditor" name="message" placeholder="Gallery Full Description..."></textarea>
                        <span class="focus-input100"></span>
                      </div> --}}
                                    {{-- <div class="form-group">
                        <label for="exampleFormControlFile1">Thumbnail Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumbnail_image">
                      </div> --}}
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Full Image</label>
                                        <input type="file" class="form-control-file {{ $errors->has('full_image') ? 'form-control is-invalid' : '' }}" id="exampleFormControlFile1"
                                            name="full_image">
                                        @if ($errors->has('full_image'))<div class="invalid-feedback">{{ $errors->first('full_image') }}.</div> @endif

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
            $('#example-getting-started').multiselect({
                includeSelectAllOption: true
            });
            $('.ckeditor').ckeditor();
        });
    </script>
</body>

</html>
