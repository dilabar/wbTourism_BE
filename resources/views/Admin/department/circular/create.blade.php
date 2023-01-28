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
                        <a href="{{ url('/admin/department/tender/list') }}" class="btn btn-info"> <i class="fas fa-list-ol"></i>
                            View Circular</a>
                    </div>
                    <div class="row">
                        <div class=" card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Add Circular</h6>

                            </div>
                           
                            <form class="contact100-form validate-form" action="{{ route('circular-create') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="wrap-input100 validate-input" data-validate="Circular No">
                                        <input class="input100 {{ $errors->has('rti_letter_no') ? 'form-control is-invalid' : '' }}" type="text" name="circular_no" value="{{ @old('circular_no')}}"
                                            placeholder="Circular No">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('circular_no'))<div class="invalid-feedback">{{ $errors->first('circular_no') }}.</div> @endif
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Circular Date">
                                        <label for="">Circular Date</label>
                                        <input class="input100 {{ $errors->has('circular_date') ? 'form-control is-invalid' : '' }}" type="date" name="circular_date" value="{{ @old('circular_date')}}"
                                            placeholder="RTI Letter Date">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('circular_date'))<div class="invalid-feedback">{{ $errors->first('circular_date') }}.</div> @endif
                                    </div>
                                 

                                    <div class="wrap-input100 validate-input" data-validate="Subject">
                                        <input class="input100 {{ $errors->has('subject') ? 'form-control is-invalid' : '' }}" type="text" name="subject" value="{{ @old('subject')}}"
                                            placeholder="Subject">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('subject'))<div class="invalid-feedback">{{ $errors->first('subject') }}.</div> @endif
                                    </div>
                                    
                                  
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Pdf</label>
                                        <input type="file" class="form-control form-control-file {{ $errors->has('pdf') ? 'form-control is-invalid' : '' }}" id="exampleFormControlFile1"
                                            name="pdf">
                                        @if ($errors->has('pdf'))<div class="invalid-feedback">{{ $errors->first('pdf') }}.</div> @endif

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



   
</body>

</html>
