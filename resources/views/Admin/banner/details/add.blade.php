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
               <!-- Page Heading -->
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Add Detail Page</h1>

               </div>

               <form class="addpagefrm contact100-form validate-form" action="{{ route('bannerdetaisladd') }}"
                  method="POST" enctype="multipart/form-data">

                  <div class="ml-auto">
                     <button type="button" class="btn btn-primary btn-sm openmodal" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="p">Add Image</button>
                  </div>
                  <div class="row">

                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Parent Destination</label>
                           <select class="form-control" id="parent_destination" name="parent_destination">
                              @if(count($place_list)>0)
                              @foreach($place_list as $p_item)
                              <option value="{{$p_item->_id}}">{{$p_item->name}}</option>
                              @endforeach
                              @endif
                           </select>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Template Type</label>
                           <select class="form-control" id="template_type" name="template_type">
                              @if(count($template_type)>0)
                              @foreach($template_type as $template_item)
                              <option value="{{$template_item->template_id}}">{{$template_item->template_name}}
                              </option>
                              @endforeach
                              @endif
                           </select>

                        </div>
                     </div>



                  </div>

                  <div id="ajax_template_content">
                  </div>
                  <div id="gallery_section">
                  </div>

                  <div class="row wrap-input100">
                     <div class="col-md-6">
                        <div class="wrap-input100 validate-input" data-validate="title">
                           <input class="input100" type="text" name="banner_short_info" value="" placeholder="Title">
                           <span class="focus-input100"></span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="wrap-input100 validate-input" data-validate="Banner Short Info">
                           <input class="input100" type="text" name="banner_short_info" value=""
                              placeholder="Banner Short Info">
                           <span class="focus-input100"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wrap-input100 validate-input" data-validate="location">
                           <input class="input100" type="text" name="location" value="" placeholder="Location">
                           <span class="focus-input100"></span>
                        </div>
                     </div>

                     <div class="col-md-4">
                        <div class="wrap-input100 validate-input" data-validate="latitude">
                           <input class="input100" type="text" name="latitude" value="" placeholder="Latitude">
                           <span class="focus-input100"></span>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="wrap-input100 validate-input" data-validate="longitude">
                           <input class="input100" type="text" name="longitude" value="" placeholder="Longitude">
                           <span class="focus-input100"></span>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class=" form-group">
                           <label for="exampleFormControlFile1"> Thumbnail Image</label>
                           <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vImage">
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="form-group">
                           <label for="exampleFormControlFile1">Banner Image</label>
                           <input type="file" class="form-control-file" id="exampleFormControlFile1"
                              name="banner_image">
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="wrap-input100 validate-input" data-validate="Banner Short Info">
                           <input class="input100" type="text" name="tags" value=""
                              placeholder="Tags separate by Comma (,)">
                           <span class="focus-input100"></span>
                        </div>
                     </div>
                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="About_tab">
                     <label for="inputFormRowAbout">About tab</label>
                     <div id="inputFormRowAbout" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="about[0][order]" placeholder="Order">
                           </div>
                        </div>

                        <div class="col-md-2">
                           <select id="about_type_selection" name="about[0][type]" class="form-control m-input"
                              onchange="showDiv('about_img', this)">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext">Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2 myDiv" id="about_img" style="display:none">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="about[0][image]"
                                 onchange="showAligmnent('about_alignment', this)">
                           </div>
                        </div>


                        <div class="col-md-2" id="about_alignment" style="display: none;">
                           <select name="about[0][alignment]" class="form-control m-input">
                              <option value="">--Select image alignment--</option>
                              <option value="l">Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>

                        <div class="col-md-4 mb-3">
                           <!-- <input class="form-control m-input ckeditor" type="text" name="about[0][text]"
                              placeholder="Write Text"> -->
                              <textarea  class="form-control m-input" name="about[0][text]" placeholder="Full Description..." rows="3"></textarea>
                              
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowAbout" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowAbout"></div>
                     <button id="addRowAbout" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>

                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="attractions_tab">
                     <label for="inputFormRowAttractions">Attractions tab</label>
                     <div id="inputFormRowAttractions" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="attractions[0][order]" placeholder="Order">
                           </div>
                        </div>

                        <div class="col-md-2">
                           <select id="attractions_type_selection" name="attractions[0][type]"
                              class="form-control m-input" onchange="showDiv('attractions_img', this)">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext">Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2 myDiv" id="attractions_img" style="display:none">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="attractions[0][image]"
                                 onchange="showAligmnent('attractions_alignment', this)">
                           </div>
                        </div>
                        <div class="col-md-2" id="attractions_alignment" style="display: none;">
                           <select name="attractions[0][alignment]" class="form-control m-input">
                              <option value="">--Select image alignment--</option>
                              <option value="l">Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>

                        <div class="col-md-4">
                           <input class="form-control m-input" type="text" name="attractions[0][text]"
                              placeholder="Write Text">
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowAttractions" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowAttractions"></div>
                     <button id="addRowAttractions" type="button" class="btn btn-info"><i
                           class="fas fa-add"></i></button>

                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="howtoreach_tab">
                     <label for="inputFormRowHowtoreach">How To Reach tab</label>
                     <div id="inputFormRowHowtoreach" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="howtoreach[0][order]" placeholder="Order">
                           </div>
                        </div>

                        <div class="col-md-2">
                           <select id="howtoreach_type_selection" name="howtoreach[0][type]"
                              class="form-control m-input" onchange="showDiv('howtoreach_img', this)">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext">Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2 myDiv" id="howtoreach_img" style="display:none">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="howtoreach[0][image]"
                                 onchange="showAligmnent('howtoreach_alignment', this)">
                           </div>
                        </div>
                        <div class="col-md-2" id="howtoreach_alignment" style="display: none;">
                           <select name="howtoreach[0][alignment]" class="form-control m-input">
                              <option value="">--Select image alignment--</option>
                              <option value="l">Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>

                        <div class="col-md-4">
                           <input class="form-control m-input" type="text" name="howtoreach[0][text]"
                              placeholder="Write Text">
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowHowtoreach" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowHowtoreach"></div>
                     <button id="addRowHowtoreach" type="button" class="btn btn-info"><i
                           class="fas fa-add"></i></button>

                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="stay_tab">
                     <label for="inputFormRowStay">Stay tab</label>
                     <div id="inputFormRowStay" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1" name="stay[0][order]"
                                 placeholder="Order">
                           </div>
                        </div>

                        <div class="col-md-2">
                           <select id="stay_type_selection" name="stay[0][type]" class="form-control m-input"
                              onchange="showDiv('stay_img', this)">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext">Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2 myDiv" id="stay_img" style="display:none">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="stay[0][image]"
                                 onchange="showAligmnent('stay_alignment', this)">
                           </div>
                        </div>
                        <div class="col-md-2" id="stay_alignment" style="display: none;">
                           <select name="stay[0][alignment]" class="form-control m-input">
                              <option value="">--Select image alignment--</option>
                              <option value="l">Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>

                        <div class="col-md-4">
                           <input class="form-control m-input" type="text" name="stay[0][text]"
                              placeholder="Write Text">
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowStay" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowStay"></div>
                     <button id="addRowStay" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="amenties_tab">
                     <label for="inputFormRowAmenties">Amenties tab</label>
                     <div id="inputFormRowAmenties" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="amenties[0][order]" placeholder="Order">
                           </div>
                        </div>

                        <div class="col-md-2">
                           <select id="amenties_type_selection" name="amenties[0][type]" class="form-control m-input"
                              onchange="showDiv('amenties_img', this)">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext">Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2 myDiv" id="amenties_img" style="display:none">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="amenties[0][image]"
                                 onchange="showAligmnent('amenties_alignment', this)">
                           </div>
                        </div>
                        <div class="col-md-2" id="amenties_alignment" style="display: none;">
                           <select name="amenties[0][alignment]" class="form-control m-input">
                              <option value="">--Select image alignment--</option>
                              <option value="l">Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>

                        <div class="col-md-4">
                           <input class="form-control m-input" type="text" name="amenties[0][text]"
                              placeholder="Write Text">
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowAmenties" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowAmenties"></div>
                     <button id="addRowAmenties" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Video URL">
                     <input class="input100" type="text" id="slogan" name="vUrl" value=""
                        placeholder="Youtube Video URL">
                     <span class="focus-input100"></span>
                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="some">
                     <label for="inputFormRowSomeinfo">Some Information</label>
                     <div id="inputFormRowSomeinfo" class="row">

                        <div class="col-md-1">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="someinfo[0][order]" placeholder="Order">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="someinfo[0][key]" placeholder="Key">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="someinfo[0][val]" placeholder="Val">
                           </div>
                        </div>
                        <div class="col-md-2">
                           <div class="form-group">
                              <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="someinfo[0][icon]" placeholder="Icon">
                           </div>
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowSomeinfo" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowSomeinfo"></div>
                     <button id="addRowSomeinfo" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
                  <div class="wrap-input100  form-group validate-input" data-validate="Slider">
                     <label for="inputFormRowSlider">Slider</label>
                     <div id="inputFormRowSlider" class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <input type="file" class="form-control-file" name="slider[0]">
                           </div>
                        </div>
                        <div class="col-md-1">
                           <button id="removeRowSlider" type="button" class="btn btn-danger"><i
                                 class="fas fa-remove"></i></button>
                        </div>

                     </div>
                     <div id="newRowSlider"></div>
                     <button id="addRowSlider" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
                  <div class=" form-group">
                     <label for="exampleFormControlFile1">Video Image</label>
                     <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vImage">
                  </div>

                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <input class="btn btn-primary" type="submit" name="" id="" value="Add" />
               </form>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->

   </div>

   <!-- ---------Modal-------------- -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Image upload</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <label for="recipient-name" class="col-form-label">Type:</label>
                     <select class="form-control" name="" id="txtUserInput">
                        <option value="d">Destination</option>
                        <option value="p">Place</option>

                        <option value="b">Banner</option>
                        <option value="pr">Product</option>
                        <option value="e">Events</option>
                        <option value="o">Other</option>
                     </select>

                  </div>
                  <div class="form-group">
                     <label for="message-text" class="col-form-label">Message:</label>
                     <input type="file" class="form-control-file" id="imgInp" onchange="readURL(this);">
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <img class="img-responsive" id="blah" src="{{ asset('assets/img/no-img.png')}}" width="240"
                           alt="your image" />
                     </div>
                  </div>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" id="btnCloseModal" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Send message</button>
            </div>
         </div>
      </div>
   </div>
   <!-- --------- end modal ---------------- -->
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
         $("#template_type").change(function () {
            alert("befoiee")
            $.ajax({
               url: "{{ url('/admin/template/getHtml') }}",
               type: 'GET',
               cache: false,
               data: { 'id': $(this).val(), _token: '{{ csrf_token() }}' }, //see the $_token
               datatype: 'json',
               beforeSend: function () {
                  //something before send
                  
               },
               success: function (data) {
                  // console.log('success');
                  // console.log(data);
                  $('#ajax_template_content').html(data.html);
                  if (data.gallery_visible) {
                     $('#gallery_section').show();
                  }
                  else {
                     $('#gallery_section').hide();
                  }

               },
               error: function (xhr, textStatus, thrownError) {
                  alert(xhr + "\n" + textStatus + "\n" + thrownError);
               }
            });
         });
         $('[data-toggle="tooltip"]').tooltip();
         var actions = $("table td:last-child").html();
         // Append table with add row form on add new button click
         $(".add-new").click(function () {
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
               '<td><input type="file" class="form-control" name="name" id="name"></td>' +
               '<td><button class="btn btn-info">Add</button></td>' +
               '</tr>';
            $("table").append(row);
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
         });
         // Add row on add button click
         $(document).on("click", ".add", function () {
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function () {
               if (!$(this).val()) {
                  $(this).addClass("error");
                  empty = true;
               } else {
                  $(this).removeClass("error");
               }
            });
            $(this).parents("tr").find(".error").first().focus();
            if (!empty) {
               input.each(function () {
                  $(this).parent("td").html($(this).val());
               });
               $(this).parents("tr").find(".add, .edit").toggle();
               $(".add-new").removeAttr("disabled");
            }
         });
         // Edit row on edit button click
         $(document).on("click", ".edit", function () {
            $(this).parents("tr").find("td:not(:last-child)").each(function () {
               $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
         });
         // Delete row on delete button click
         $(document).on("click", ".delete", function () {
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
         });
      });
   </script>
   <script>

      $('#exampleModal').on('show.bs.modal', function (e) {
         var button = $(e.relatedTarget) // Button that triggered the modal
         var recipient = button.data('whatever')

         // Extract info from data-* attributes
         // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
         // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
         var modal = $(this)
         var d = recipient == 'p' ? 'Place' : 'Other'
         modal.find('.modal-title').text('Image upload to ' + d)
         modal.find('.modal-body #txtUserInput').val("p").attr("selected", "selected");
         $("#btnCloseModal").on('click', function () {

            $("#btnCloseModel").off('click');
            // var slog = $("#txtUserInput").val();
            // $('#slogan').val(slog);

            $("#blah").attr("src", "{{ asset('assets/img/no-img.png')}}");


            // console.log( $(e.target).parent().next().children().val("some other text from the modal"));
            // $(e.target).parent().next().children().val("some other text from the modal");
         });
      });

      function readURL(input) {
         if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
               $('#blah')
                  .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
         }
      }
      function showDiv(divId, element) {
         // alert(divId)
         document.getElementById(divId).style.display = element.value == 'textwithimage' ? 'block' : 'none';

      }
    
      function showAligmnent(divId, element) {
         // alert(divId)
         document.getElementById(divId).style.display = element.value != '' ? 'block' : 'none';
      }
   </script>
   <script>

      // ****************About****************
      var countAbout = 1;
      $("#addRowAbout").click(function () {
         var about_img = "'" + 'about_img_' + countAbout + "'";
         var about_alignment = "'" + 'about_alignment_' + countAbout + "'";
         var html = '';
         html += '<div id="inputFormRowAbout" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="about[' + countAbout + '][order]"  placeholder="Order"></div> </div>';
         html += '<div class="col-md-2"><select id="about_type_selection"  name="about[' + countAbout + '][type]" onchange="showDiv(' + about_img + ', this)" class="form-control m-input"><option value="">--Select Type--</option> <option value="textwithimage">Text With Image</option><option value="onlytext">Text Only</option></select></div>';
         html += '<div class="col-md-2 myDiv"  id="about_img_' + countAbout + '" style="display:none"><div class="form-group"><input type="file" class="form-control-file" name="about[' + countAbout + '][image]" onchange="showAligmnent(' + about_alignment + ', this)"> </div></div>';
         html += '<div class="col-md-2" id="about_alignment_' + countAbout + '" style="display:none"><select  name="about[' + countAbout + '][alignment]" class="form-control m-input" ><option value="">--Select image alignment--</option> <option value="l">Left</option> <option value="r">Right</option></select></div>'
         html += '<div class="col-md-4 mb-3"><textarea class="form-control m-input ckeditor" name="about[' + countAbout + '][text]"placeholder="Full Description..." rows="3"></textarea></div>';
         html += '<div class="col-md-1"><button id="removeRowAbout" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countAbout++;
         $('#newRowAbout').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowAbout', function () {
         $(this).closest('#inputFormRowAbout').remove();
         countAbout--;
      });

      // ****************About End****************

      // ****************Attractions***************

      var countAttractions = 1;
      $("#addRowAttractions").click(function () {
         var attractions_img = "'" + 'attractions_img_' + countAttractions + "'";
         var attractions_alignment = "'" + 'attractions_alignment_' + countAttractions + "'";
         var html = '';
         html += '<div id="inputFormRowAttractions" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="attractions[' + countAttractions + '][order]"  placeholder="Order"></div> </div>';
         html += '<div class="col-md-2"><select id="attractions_type_selection"  name="attractions[' + countAttractions + '][type]" onchange="showDiv(' + attractions_img + ', this)" class="form-control m-input"><option value="">--Select Type--</option> <option value="textwithimage">Text With Image</option><option value="onlytext">Text Only</option></select></div>';
         html += '<div class="col-md-2 myDiv"  id="attractions_img_' + countAttractions + '" style="display:none"><div class="form-group"> <input type="file" class="form-control-file" name="attractions[0][image]" onchange="showAligmnent(' + attractions_alignment + ', this)"> </div></div>';
         html += '<div class="col-md-2" id="attractions_alignment_' + countAttractions + '" style="display:none"><select  name="attractions[' + countAttractions + '][alignment]" class="form-control m-input" ><option value="">--Select image alignment--</option> <option value="l">Left</option> <option value="r">Right</option></select></div>'
         html += '<div class="col-md-4 mb-3"><textarea class="form-control" name="attractions[' + countAttractions + '][text]"placeholder="Write Text" rows="3"></textarea></div>';
         html += '<div class="col-md-1"><button id="removeRowAttractions" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countAttractions++;
         $('#newRowAttractions').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowAttractions', function () {
         $(this).closest('#inputFormRowAttractions').remove();
         countAttractions--;
      });

      // ****************Attractions End****************

      // ****************How To Reach***************

      var countHowtoreach = 1;
      $("#addRowHowtoreach").click(function () {
         var howtoreach_img = "'" + 'howtoreach_img_' + countHowtoreach + "'";
         var howtoreach_alignment = "'" + 'howtoreach_alignment_' + countHowtoreach + "'";
         var html = '';
         html += '<div id="inputFormRowHowtoreach" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="attractions[' + countHowtoreach + '][order]"  placeholder="Order"></div> </div>';
         html += '<div class="col-md-2"><select id="howtoreach_type_selection"  name="howtoreach[' + countHowtoreach + '][type]" onchange="showDiv(' + howtoreach_img + ', this)" class="form-control m-input"><option value="">--Select Type--</option> <option value="textwithimage">Text With Image</option><option value="onlytext">Text Only</option></select></div>';
         html += '<div class="col-md-2 myDiv"  id="howtoreach_img_' + countHowtoreach + '" style="display:none"><div class="form-group"> <input type="file" class="form-control-file" name="howtoreach[0][image]" onchange="showAligmnent(' + howtoreach_alignment + ', this)"></div></div>';
         html += '<div class="col-md-2" id="howtoreach_alignment_' + countHowtoreach + '" style="display:none"><select  name="howtoreach[' + countHowtoreach + '][alignment]" class="form-control m-input" ><option value="">--Select image alignment--</option> <option value="l">Left</option> <option value="r">Right</option></select></div>'
         html += '<div class="col-md-4"><input class="form-control m-input" type="text" name="howtoreach[' + countHowtoreach + '][text]"placeholder="Write Text"></div>';
         html += '<div class="col-md-1"><button id="removeRowHowtoreach" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countHowtoreach++;
         $('#newRowHowtoreach').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowHowtoreach', function () {
         $(this).closest('#inputFormRowHowtoreach').remove();
         countHowtoreach--;
      });

      // ****************How to reach End****************

      // ****************Stay***************

      var countStay = 1;
      $("#addRowStay").click(function () {
         var stay_img = "'" + 'stay_img_' + countStay + "'";
         var stay_alignment = "'" + 'stay_alignment_' + countStay + "'";
         var html = '';
         html += '<div id="inputFormRowStay" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="stay[' + countStay + '][order]"  placeholder="Order"></div> </div>';
         html += '<div class="col-md-2"><select id="stay_type_selection"  name="stay[' + countStay + '][type]" onchange="showDiv(' + stay_img + ', this)" class="form-control m-input"><option value="">--Select Type--</option> <option value="textwithimage">Text With Image</option><option value="onlytext">Text Only</option></select></div>';
         html += '<div class="col-md-2 myDiv"  id="stay_img_' + countStay + '" style="display:none"><div class="form-group"> <input type="file" class="form-control-file" name="stay[0][image]" onchange="showAligmnent(' + stay_alignment + ', this)"></div></div>';
         html += '<div class="col-md-2" id="stay_alignment_' + countStay + '" style="display:none"><select  name="stay[' + countStay + '][alignment]" class="form-control m-input" ><option value="">--Select image alignment--</option> <option value="l">Left</option> <option value="r">Right</option></select></div>'
         html += '<div class="col-md-4"><input class="form-control m-input" type="text" name="stay[' + countStay + '][text]"placeholder="Write Text"></div>';
         html += '<div class="col-md-1"><button id="removeRowStay" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countStay++;
         $('#newRowStay').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowStay', function () {
         $(this).closest('#inputFormRowStay').remove();
         countStay--;
      });

      // ****************Stay End****************

      // ****************Amenties***************

      var countAmenties = 1;
      $("#addRowAmenties").click(function () {
         var amenties_img = "'" + 'amenties_img_' + countAmenties + "'";
         var amenties_alignment = "'" + 'amenties_alignment_' + countAmenties + "'";
         var html = '';
         html += '<div id="inputFormRowAmenties" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="amenties[' + countAmenties + '][order]"  placeholder="Order"></div> </div>';
         html += '<div class="col-md-2"><select id="amenties_type_selection"  name="amenties[' + countAmenties + '][type]" onchange="showDiv(' + amenties_img + ', this)" class="form-control m-input"><option value="">--Select Type--</option> <option value="textwithimage">Text With Image</option><option value="onlytext">Text Only</option></select></div>';
         html += '<div class="col-md-2 myDiv"  id="amenties_img_' + countAmenties + '" style="display:none"><div class="form-group"><input type="file" class="form-control-file" name="amenties[0][image]" onchange="showAligmnent(' + amenties_alignment + ', this)"> </div></div>';
         html += '<div class="col-md-2" id="amenties_alignment_' + countAmenties + '" style="display:none"><select  name="amenties[' + countAmenties + '][alignment]" class="form-control m-input" ><option value="">--Select image alignment--</option> <option value="l">Left</option> <option value="r">Right</option></select></div>'
         html += '<div class="col-md-4"><input class="form-control m-input" type="text" name="amenties[' + countAmenties + '][text]"placeholder="Write Text"></div>';
         html += '<div class="col-md-1"><button id="removeRowAmenties" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countAmenties++;
         $('#newRowAmenties').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowAmenties', function () {
         $(this).closest('#inputFormRowAmenties').remove();
         countAmenties--;
      });

      // ****************Amenties End****************

      // ****************Some Information***************

      var countSomeinfo = 1;
      $("#addRowSomeinfo").click(function () {
         var html = '';
         html += '<div id="inputFormRowSomeinfo" class="row">';
         html += '<div class="col-md-1"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="someinfo[' + countSomeinfo + '][order]" placeholder="Order"></div> </div>';
         html += '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1"name="someinfo[' + countSomeinfo + '][key]" placeholder="Key"></div></div>';
         html += '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="someinfo[' + countSomeinfo + '][val]" placeholder="Val"></div></div>';
         html += '<div class="col-md-2"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1"name="someinfo[' + countSomeinfo + '][icon]" placeholder="Icon"></div></div>'
         html += '<div class="col-md-1"><button id="removeRowSomeinfo" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countSomeinfo++;
         $('#newRowSomeinfo').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowSomeinfo', function () {
         $(this).closest('#inputFormRowSomeinfo').remove();
         countSomeinfo--;
      });

      // ****************Some Information****************

      // ****************Slider***************

      var countSlider = 1;
      $("#addRowSlider").click(function () {
         var html = '';
         html += '<div id="inputFormRowSlider" class="row">';
         html += '  <div class="col-md-4"><div class="form-group"><input type="file" class="form-control-file" name="slider[' + countSlider + ']"></div></div>'
         html += '<div class="col-md-1"><button id="removeRowSlider" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
         html += '</div>';
         countSlider++;
         $('#newRowSlider').append(html);
      });

      // remove row
      $(document).on('click', '#removeRowSlider', function () {
         $(this).closest('#inputFormRowSlider').remove();
         countSlider--;
      });

      // ****************Slider end***************



   </script>
</body>

</html>