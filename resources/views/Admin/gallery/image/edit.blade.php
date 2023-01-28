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
                  {{-- <h1 class="h3 mb-0 text-gray-800">Update gallery Image</h1> --}}

               </div>
               <div class="row">
                  <div class="card col-lg-8 offset-lg-2">
                     <div class="card-header">
                  <h6 class="m-0 font-weight-bold ">Update gallery Image</h6>

                     </div>
                     <form class="contact100-form validate-form" action="{{ route('updateImage') }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="card-body">

                        
                        {{-- @csrf   --}}
                        {{-- @method('PUT') --}}
                        <div class="wrap-input100 validate-input" data-validate="Image Name/Title">
                           <input class="input100" type="text" name="name" placeholder="Image Name/Title" value="{{ $details_db->name }}">
                           <span class="focus-input100"></span>
                        </div>
                     
                       
                        <div class="form-group">
                           <select name="gallery_cat" class="form-control  form-select" >
                             <option >Select gallery</option>
                             @foreach ($gal_category as $gcat)
                             <option value="{{$gcat->name.'_'.$gcat->_id}}" {{$details_db->gallery_category_id == $gcat->_id ?'selected':''}}>{{$gcat->name}}</option>
                                 
                             @endforeach
                          
                           </select>
                         </div>
                          
                    <div class="form-group">
                     <select name="dist" class="form-control form-select" >
                       <option >Select District</option>
                       @foreach ($district as $dist)
                       <option value="{{$dist->district_code}}" {{$details_db->district == $dist->district_code ?'selected':''}}>{{$dist->district_name}}</option>
                           
                       @endforeach
                    
                     </select>
                   </div>
                        
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Gallery Image</label>
                           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gallery_image">
                           <img height="100" width="100"src="{{$img}}"/>
                        </div>
                       
                       
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="img_id" value="{{ $details_db->id }}" />
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