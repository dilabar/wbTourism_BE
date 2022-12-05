<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
<link href="{{ asset('assets/Admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Front Page Management</h1>
                        
                    </div>
                    <div class="row">
                    <div class="col-lg-12">
                       
                    <form class="contact100-form validate-form" method="post" action="{{url('/admin/configure/fronpage')}}">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                     <div class="form-group">
                        <label for="exampleFormControlFile1">Selection</label>
                         <select class="">
                          <option value="cheese">Banner Slider</option>
                          <option value="tomatoes">Top Ten Destination</option>
                          <option value="mozarella">Explore in West Bengal</option>
                       </select>
                       <input type="submit" class="btn btn-primary" type="submit" name="submitbtn" value="GO">   
                      </div>  
                      
                     </form>
                         
                     @if($is_submit==1)
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                        <a href="#" class="btn btn-primary">
                                        Add Item to FrontPage
                         </a>
                         <br/><br/>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name/Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name/Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Digha</td>
                                            <td><img class="img-profile rounded-circle"
                src="{{ asset('assets/Admin/img/undraw_profile.svg') }}" width="50"  height="50"></td>
                                            <td>  
                                            <a href="#" class="btn btn-danger">Delete from Frontpage</a>
                                            </td>
                                        </tr>
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    @endif
                     <!-- End of DataTales Example -->
                       
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
<!-- Page level custom scripts -->
<script src="{{ asset ('/assets/Admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset ('/assets/Admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset ('/assets/Admin/js/demo/datatables-demo.js') }}"></script>
</body>

</html>