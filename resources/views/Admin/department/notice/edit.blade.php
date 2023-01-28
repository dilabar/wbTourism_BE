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
               {{-- @if ($message = Session::get('success'))

               <div class="alert alert-success">

                  <p>{{ $message }}</p>

               </div>

               @endif --}}
               @include('Admin.layouts.message')
               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">

               </div>
               <div class="row">
                  <div class="card col-lg-8 offset-lg-2">
                     <div class="card-header">
                        <h6 class="m-0 font-weight-bold ">Update Gallery</h6>
                     </div>
                     <form class="contact100-form validate-form" action="{{ route('galleryupdate') }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="card-body">

                       
                        {{-- @csrf   --}}
                        {{-- @method('PUT') --}}
                        <div class="wrap-input100 validate-input" data-validate="Gallery Name/Title">
                           <input class="input100" type="text" name="name" placeholder="Gallery Name/Title" value="{{ $details_db->name }}">
                           <span class="focus-input100"></span>
                        </div>
                     
                       
                        {{-- <div class="wrap-input100 validate-input" data-validate="Product Full Description is required">
                           <textarea class="input100 ckeditor" name="message"
                              placeholder="Product Full Description..."></textarea>
                           <span class="focus-input100"></span>
                        </div> --}}
                        {{-- <div class="form-group">
                           <label for="exampleFormControlFile1">Thumbnail Image</label>
                           <input type="file" class="form-control-file" id="exampleFormControlFile1"
                              name="thumbnail_image" value="{{$img}}">
                           <img height="100" width="100"src="{{$img}}"/>
                        </div> --}}
                      
                        <div class="form-group">
                           <label for="example-getting-started">Showing only</label>
                           <select name="visible[]" id="example-getting-started" multiple tabindex="0">
                               <option value="0" {{in_array('0',$details_db->visible) ? 'selected':''}} >Home</option>
                               <option value="1" {{in_array('1',$details_db->visible) ? 'selected':''}}>Menu</option>
                           
                           </select>
                       </div>
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Full Image</label>
                           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="full_image">
                           <img height="100" width="100"src="{{$full}}"/>
                        </div>
                       
                       
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="gallery_id" value="{{ $details_db->id }}" />
                        <input class="btn btn-primary" type="submit" name="" id="" value="update" />
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
      $(document).ready(function () {
         $('#example-getting-started').multiselect();
         $('.ckeditor').ckeditor();
      });
   </script>
</body>

</html>