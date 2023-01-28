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
                            View Tender</a>
                    </div>
                    <div class="row">
                        <div class=" card col-lg-8 offset-lg-2">
                            <div class="card-header">
                                <h6 class="m-0 font-weight-bold ">Add Tender</h6>

                            </div>
                           
                            <form class="contact100-form validate-form" action="{{ route('tender-create') }}"
                                method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="wrap-input100 validate-input" data-validate="Tender No">
                                        <input class="input100 {{ $errors->has('tender_no') ? 'form-control is-invalid' : '' }}" type="text" name="tender_no" value="{{ @old('tender_no')}}"
                                            placeholder="Tender No">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('tender_no'))<div class="invalid-feedback">{{ $errors->first('tender_no') }}.</div> @endif
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Publishing Date">
                                        <label for="">Publishing Date</label>
                                        <input class="input100 {{ $errors->has('pub_date') ? 'form-control is-invalid' : '' }}" type="date" name="pub_date" value="{{ @old('pub_date')}}"
                                            placeholder="Publishing Date">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('pub_date'))<div class="invalid-feedback">{{ $errors->first('pub_date') }}.</div> @endif
                                    </div>
                                    <div class="wrap-input100 validate-input" data-validate="Closing Date">
                                        <label for="">Closing Date</label>
                                        <input class="input100 {{ $errors->has('close_date') ? 'form-control is-invalid' : '' }}" type="date" name="close_date" value="{{ @old('close_date')}}"
                                            placeholder="Closing Date">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('close_date'))<div class="invalid-feedback">{{ $errors->first('close_date') }}.</div> @endif
                                    </div>

                                    <div class="wrap-input100 validate-input" data-validate="Subject">
                                        <input class="input100 {{ $errors->has('subject') ? 'form-control is-invalid' : '' }}" type="text" name="subject" value="{{ @old('subject')}}"
                                            placeholder="Subject">
                                        <span class="focus-input100"></span>
                                        @if ($errors->has('subject'))<div class="invalid-feedback">{{ $errors->first('subject') }}.</div> @endif
                                    </div>
                                    
                                    <div class="form-group" >
                                        <label for="">Authority</label>
                                       <select name="authority" id="authority" class="form-control form-select {{ $errors->has('authority') ? 'is-invalid' : '' }}">
                                        <option value="0" >Select</option>
                                        <option value="Department" >Department</option>
                                        <option value="WBTDCL">WBTDCL</option>
                                       </select>
                                       @if ($errors->has('authority'))<div class="invalid-feedback">{{ $errors->first('authority') }}.</div> @endif
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
