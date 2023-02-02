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
                        {{-- <h1 class="h3 mb-0 text-gray-800">Upload Image</h1> --}}
                        <a href="{{route('image-list')}}" class="btn btn-info" > <i class="fas fa-list-ol"></i> View Image</a>
                        
                    </div>
                    <div class="row">
                    <div class="card col-lg-8 offset-lg-2">
                      <div class="card-header">
                        <h6 class="m-0 font-weight-bold ">Upload Image</h6>

                      </div>
                       
                    <form class="contact100-form validate-form " action="{{ route('addImage') }}" method="POST" enctype="multipart/form-data"  >
                      <div class="card-body">
                      <div class="wrap-input100 invalidate-input" data-validate="Image Name/Title">
                            <input class="form-control input100 {{ $errors->has('name') ? ' is-invalid' : '' }}" id="validationCustom01" type="text" name="name" placeholder="Image Name/Title" value="{{ old('name') }}" required>
                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))<div class="invalid-feedback">{{ $errors->first('name') }}.</div> @endif
                      </div>

                      <div class="form-group">
                        <select name="gallery_cat" class="form-control  form-select {{ $errors->has('gallery_cat') ? ' is-invalid' : '' }}" >
                          <option value="">Select gallery</option>
                          @foreach ($gal_category as $gcat)
                          <option value="{{$gcat->name.'_'.$gcat->_id}}"  >{{$gcat->name}}</option>
                              
                          @endforeach
                       
                        </select>
                        @if ($errors->has('gallery_cat'))<div class="invalid-feedback">{{ $errors->first('gallery_cat') }}.</div> @endif

                      </div>
                   
                    <div class="form-group">
                      <select name="dist" class="form-control form-select {{ $errors->has('dist') ? ' is-invalid' : '' }}" >
                        <option value="">Select District</option>
                        @foreach ($district as $dist)
                        <option value="{{$dist->district_code}}">{{$dist->district_name}}</option>
                            
                        @endforeach
                     
                      </select>
                      @if ($errors->has('dist'))<div class="invalid-feedback">{{ $errors->first('dist') }}.</div> @endif

                    </div>
                   
                      {{-- <div class="wrap-input100 validate-input" data-validate="Gallery Full Description is required">
                        <textarea class="input100 ckeditor" name="message" placeholder="Gallery Full Description..."></textarea>
                        <span class="focus-input100"></span>
                      </div> --}}
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control form-control-file {{ $errors->has('gallery_image') ? ' is-invalid' : '' }}" id="exampleFormControlFile1" name="gallery_image" aria-label="file example">
                       @if ($errors->has('gallery_image'))
                       <div class="invalid-feedback">{{ $errors->first('gallery_image') }}.</div> 
                       @endif

                      </div>
                 
                     
                     
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           <input class="btn btn-primary" type="submit" name="" id="" value="Add"/>
                           
                           
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
    <script src="{{ asset ('/assets/Admin/js/bootstrap-multiselect.js') }}"></script>

    <script src="{{ asset ('/ckeditor/ckeditor.js') }}"></script>

    <script type="text/javascript">
       $(document).ready(function() {
         $('#example-getting-started').multiselect();
         $('.ckeditor').ckeditor();
    });


  
     </script>
</body>

</html>