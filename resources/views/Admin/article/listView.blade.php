<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.common.meta_title')
    @include('Admin.common.includecommoncss')
  <link href="{{ asset('assets/Admin/vendor/datatables/dataTables.bootstrap4.min.css') }} " rel="stylesheet">
 
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
                     
                        <a href="{{url('/admin/article/create')}}" class="btn btn-info" > <i class="fas fa-plus-circle"></i>Add New article</a>
                    </div>
                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Article List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th>&nbsp;</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    
                                    </tfoot>
                                    <tbody>
                                        
                                      
                                    </tbody>
                                </table>
                            </div>
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
	<script src="{{asset ('/assets/Admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset ('/assets/Admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
	var sessiontimeoutmessage='{{$sessiontimeoutmessage}}';
    var base_url='{{ url('/') }}';
    var csrf_token='{{ csrf_token() }}';
    var dataTable = "";
    $('#confirm_action #id').val('');
    $('#confirm_action #action_type').val('');
   
    $('#confirm_action #cur_status').val('');
	if ( $.fn.DataTable.isDataTable('#example') ) {
		$('#example').DataTable().destroy();
	}
	dataTable=$('#dataTable').DataTable( {
        dom: 'Blfrtip',
          "scrollX": true,
          "paging": true,
          "searchable": true,
          "ordering":true,
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
            url: "{{ url('admin/article/list') }}",
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
            $(".btn-modal").click(function(){
             $('#confirm_action #id').val('');
             $('#confirm_action #action_type').val('');
             $('#confirm_action #cur_status').val('');
             var cur_status = $(this).attr('cur_status');
             var action_type = $(this).attr('action_type');
             var title = $(this).attr('title');
             var slno = $(this).attr('slno');
             var value = $(this).attr('value');
             if(action_type==1){
                if(cur_status==1){
                    var action_text='Inactive';
                }
                else if(cur_status==0){
                    var action_text='Active';
                }
             }
             else if(action_type==2){
                if(cur_status==1){
                    var action_text='UnApprove';
                }
                else if(cur_status==0){
                    var action_text='Approve';
                }
             }
         
             $("#op_type").text(action_text);
             $("#item_name").text(title);
             $('#confirm_action #article_id').val(value);
             $('#confirm_action #action_type').val(action_type);
             $('#confirm_action #cur_status').val(cur_status);
             $("#modal_confirm").modal('show');
             }); 
          },
          "columns": [
		      	{ "data": "check" },
            { "data": "img" },
            { "data": "title" },
            { "data": "status" },
            { "data": "action" }
          ]
    
        });
        $("#submit-btn").click(function(){
             var action_type=$('#confirm_action #action_type').val();
             var cur_status=$('#confirm_action #cur_status').val();
             var id=$('#confirm_action #article_id').val();
             var form = $(document.createElement('form'));
             var url = base_url+"/admin/article/delete/";
             console.log(url);
             $(form).attr("action", url);
             $(form).attr("method", "POST");
             var input_token = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "_token")
                    .val(csrf_token);
             $(form).append($(input_token));
             form.appendTo(document.body);
             var id = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "id")
                    .val(id);
             $(form).append($(id));
             var cur_status = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "cur_status")
                    .val(cur_status);
             $(form).append($(cur_status));
             var action_type = $("<input>")
                    .attr("type", "hidden")
                    .attr("name", "action_type")
                    .val(action_type);
             $(form).append($(action_type));
             form.appendTo(document.body);
             $(form).submit();
        });
    });
 </script>

	 
</body>

</html>

<!-- Modal HTML -->
<div id="modal_confirm" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
								
				<h4 class="modal-title w-100">Are you sure?</h4>	
                
			</div>
			<div class="modal-body">
				<p>Do you really want to <span id="op_type">delete</span> the Article <span id="item_name"></span> ?</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="confirm_action">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <input type="hidden" name="id" id="article_id" value="" />
                <input type="hidden" name="action_type" id="action_type" value="" />
                <input type="hidden" name="cur_status" id="cur_status" value="" />
                <input type="hidden" name="_method" value="delete">
				<button type="button" class="btn btn-danger" id="submit-btn">OK</button>
			</div>
		</div>
	</div>
</div> 