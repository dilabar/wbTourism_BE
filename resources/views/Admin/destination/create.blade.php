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
                  @include('Admin.layouts.message')
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        {{-- <h1 class="h3 mb-0 text-gray-800">Upload Destination Category</h1> --}}
                        <a href="{{url('admin/destination/list')}}" class="btn btn-info">View Destination</a>
                        
                    </div>
                    <div class="row">
                    <div class="card col-lg-8 offset-lg-2">
                       <div class="card-header">
                          <h6 class="m-0 font-weight-bold ">Add Destination</h6>
                       </div>
                    <form class="contact100-form validate-form" action="{{ route('destination.store') }}" method="POST" enctype="multipart/form-data">
                      <div class="card-body">

                    
                      <div class="row">
                      <div class="col-md-6" id="cat">
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Select District </label>
            
                          <select class="form-control" name="district" >
                            @foreach ($district as $dist)
                                <option value="{{ $dist->district_code }}">{{ $dist->district_name }}
                                </option>
                              @endforeach

                          </select>
                        </div>
                        
                      </div>
                      <div class="col-md-6" >
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Select Category</label>
                          <select class="form-control" name="category_id">
                            <option value="0">-- Select Page  --</option>

                              @foreach ($category as $cat)
                                <option value="{{ $cat->_id }}">{{ $cat->name }}
                                </option>
                              @endforeach

                          </select>
                        </div>
                      </div>
                      </div>
                      <div class="form-group" id="visible">
                                        
                        <label for="example-getting-started">Showing only  @if ($errors->has('visible'))<div class="alert alert-danger">{{ $errors->first('visible') }}.</div> @endif</label>
                        <select class="form-control" name="visible[]" class="{{ $errors->has('visible') ? 'is-invalid' : '' }}" id="example-getting-started" multiple tabindex="0">
                            <option value="D" {{  @in_array('D',old('visible'))? 'selected' :''  }}>Top Destination</option>
                            <option value="P" {{  @in_array('P',old('visible'))? 'selected' :''  }}>Product</option>
                        
                        </select>
                        @if ($errors->has('visible'))<div class="invalid-feedback">{{ $errors->first('visible') }}.</div> @endif
                    </div>

                      <div class="wrap-input100 validate-input" data-validate="Destination Name/Title">
                            <input class="input100" type="text" name="name" placeholder="Name/Title">
                       <span class="focus-input100"></span>
                      </div>
                      <div class="wrap-input100 validate-input" data-validate="Destination Short Description">
                            <input class="input100" type="text" name="description" placeholder="Short Description">
                       <span class="focus-input100"></span>
                      </div>
                      <!-- <div class="wrap-input100 validate-input" data-validate="Destination Full Description is required">
                        <textarea class="input100 ckeditor" name="message" placeholder="Destination Full Description..."></textarea>
                        <span class="focus-input100"></span>
                      </div> -->
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Thumbnai Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumbnail_image">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Page Title Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="full_image">
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleFormControlFile1">Front Page Selection</label>
                       <select id="example-getting-started" multiple="multiple">
                        <option value="cheese">Banner Slider</option>
                        <option value="tomatoes">Top Ten Destination</option>
                        <option value="mozarella">Explore in West Bengal</option>
                        
                       </select>
                      </div> -->
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
        $("#pcat").hide()

        $("#cat_type").change(function (){
          
          var id =$(this).val()  
			    console.log(id);
          if(id =='main'){
            $("#pcat").hide();
            $("#visible").show();
          }else{
            $("#pcat").show();
            $("#visible").hide();


          }
        })
         $('#example-getting-started').multiselect();
         $('.ckeditor').ckeditor();
    });
     </script>
</body>

</html>