<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Admin/css/dataTables.bootstrap.css') }}">
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
                        <h1 class="h3 mb-0 text-gray-800">Banner List</h1>
                        <button type="button" class="btn btn-info" >Bulk</button>
                    </div>
                    <div class="row">
					<div class="preloader1"><img src="{{ asset('assets/admin/img/ZKZg.gif') }}" class="loader_img" width="150px" id="loader_img_personal"></div>
                    <table class="table table-responsive-xl" id="example">
						  <thead>
						    <tr>
							   <th>&nbsp;</th>
                  <th>Image</th>
						      <th>Title</th>
						      <th>Status</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody></tbody>   
						</table>
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
	<script src="{{ asset ('/assets/Admin/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset ('/assets/Admin/js/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">
       $(document).ready(function() {
		var sessiontimeoutmessage='{{$sessiontimeoutmessage}}';
        var base_url='{{ url('/') }}';
		var dataTable = "";
		if ( $.fn.DataTable.isDataTable('#example') ) {
					$('#example').DataTable().destroy();
		}
		dataTable=$('#example').DataTable( {
          dom: 'Blfrtip',
          "scrollX": true,
          "paging": true,
          "searchable": true,
          "ordering":false,
          "bFilter": true,
          "bInfo": true,
          "pageLength":10,
          'lengthMenu': [[10,50,100], [10,50,100]],
          "serverSide": true,
          "processing":true,
          "bRetrieve": true,
          "oLanguage": {
            "sProcessing": '<div class="preloader1" align="center"><img src="{{ asset('assets/admin/img/ZKZg.gif') }}" width="150px"></div>'
          },
          "ajax": 
          {
            url: "{{ url('admin/banner/list') }}",
            type: "get",
            data:function(d){
                 d._token= "{{csrf_token()}}"
            },
            error: function (jqXHR, textStatus, errorThrown) {
              $('.preloader1').hide();
              alert(errorThrown);
           // alert(sessiontimeoutmessage);
            // window.location.href=base_url;
            }
          },
          "initComplete":function(){
            $('.preloader1').hide();
          },
          "columns": [
		      	{ "data": "check" },
            { "data": "img" },
            { "data": "title" },
            { "data": "status" },
            { "data": "action" }
          ]
    
        });
		 $("#active_inactive").click(function(){
           $("#myModal").modal('show');
         }); 
       });
     </script>

	 
</body>

</html>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div> 