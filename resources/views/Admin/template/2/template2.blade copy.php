<!-- <div class="wrap-input100 validate-input" data-validate="Banner Slogan">
<input class="input100" type="text" name="slogan" placeholder="Banner2 Slogan">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Banner Short Description">
<input class="input100" type="text" name="description" placeholder="Banner Short Description">
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Product Full Description is required">
<textarea class="input100 ckeditor" name="message" placeholder="Product Full Description..."></textarea>
<span class="focus-input100"></span>
</div>
<div class="form-group">
<label for="exampleFormControlFile1">Thumbnail Image</label>
<input type="file" class="form-control-file" id="exampleFormControlFile1" name="thumbnail_image">
</div>
<div class="form-group">
<label for="exampleFormControlFile1">Full Image</label>
<input type="file" class="form-control-file" id="exampleFormControlFile1" name="full_image">
</div>
 -->

<style>
   .file_upload {
      display: none !important;
   }

   .p-image {
      position: absolute;
      top: 194px;
      right: 30px;
      color: #666666;
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   }

   .item-photo__preview {
      width: 150px;
      height: 150px;
   }

   input[type="file"] {
      display: block;
   }

   .imageThumb {
      max-height: 75px;
      border: 2px solid;
      padding: 1px;
      cursor: pointer;
   }

   .pip {
      display: inline-block;
      margin: 10px 10px 0 0;
   }

   .remove {
      display: block;
      background: #444;
      border: 1px solid black;
      color: white;
      text-align: center;
      cursor: pointer;
   }

   .remove:hover {
      background: white;
      color: black;
   }

   html * {
      box-sizing: border-box;
   }

   p {
      margin: 0;
   }

   .upload__box {
      padding: 40px;
   }

   .upload__inputfile {
      width: 0.1px;
      height: 0.1px;
      opacity: 0;
      overflow: hidden;
      position: absolute;
      z-index: -1;
   }

   .upload__btn {
      display: inline-block;
      font-weight: 600;
      color: #fff;
      text-align: center;
      min-width: 116px;
      padding: 5px;
      transition: all 0.3s ease;
      cursor: pointer;
      border: 2px solid;
      background-color: #4045ba;
      border-color: #4045ba;
      border-radius: 10px;
      line-height: 26px;
      font-size: 14px;
   }

   .upload__btn:hover {
      background-color: unset;
      color: #4045ba;
      transition: all 0.3s ease;
   }

   .upload__btn-box {
      margin-bottom: 10px;
   }

   .upload__img-wrap {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
   }

   .upload__img-box {
      width: 200px;
      padding: 0 10px;
      margin-bottom: 12px;
   }

   .upload__img-close {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background-color: rgba(0, 0, 0, 0.5);
      position: absolute;
      top: 10px;
      right: 10px;
      text-align: center;
      line-height: 24px;
      z-index: 1;
      cursor: pointer;
   }

   .upload__img-close:after {
      content: '\2716';
      font-size: 14px;
      color: white;
   }

   .img-bg {
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      position: relative;
      padding-bottom: 100%;
   }
</style>


<!-- <section class="top-header" style="">
   <div class="page-title-area ptb-100">
      <div class="container">
         <div class="page-title-content">
            <h1>Template 2 title</h1>

         </div>
      </div>
   </div>
</section> -->
<!-- <div class="field" align="left">
  <h3>Upload your images</h3>
  <input type="file" id="files" name="files[]" multiple />
</div> -->

<div class="upload__box">
   <div class="upload__btn-box">
      <label class="upload__btn">
         <p>Upload images</p>
         <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
      </label>
   </div>
   <div class="upload__img-wrap"></div>
</div>
<section class="details-section pb-70">
   <div class="container ">
      <div class="details-slider owl-carousel">

         <div class="slider-item">
            <img src="{{ asset('assets/img/1.jpg')}}" alt="">
         </div>
         <div class="slider-item">
            <img src="assets/img/biswa.jpg" alt="">
         </div>
      </div>

      <div class="strip-slider filmstrip owl-carousel">
         <div class="slider-item">
            <img src="assets/img/10.jpg" alt="">
         </div>
         <div class="slider-item">
            <img src="assets/img/10.jpg" alt="">
         </div>
      </div>
   </div>

   </div>
</section>

<section class="template1-details-section pb-70">
   <div class="container">

      <div class="row">

         <div class="col-lg-12 col-md-12">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-about-tab" data-toggle="pill" data-target="#pills-about"
                     type="button" role="tab" aria-controls="pills-about" aria-selected="true">About</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-how-to-reach-tab" data-toggle="pill"
                     data-target="#pills-how-to-reach" type="button" role="tab" aria-controls="pills-how-to-reach"
                     aria-selected="false">How to reach</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-attractions-tab" data-toggle="pill"
                     data-target="#pills-attractions" type="button" role="tab" aria-controls="pills-attractions"
                     aria-selected="false">Attractions</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-stay-tab" data-toggle="pill" data-target="#pills-stay"
                     type="button" role="tab" aria-controls="pills-stay" aria-selected="false">Stay</button>
               </li>
               <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-nearby-amenties-tab" data-toggle="pill"
                     data-target="#pills-nearby-amenties" type="button" role="tab" aria-controls="pills-nearby-amenties"
                     aria-selected="false">Nearby Amenties</button>
               </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-about" role="tabpanel"
                  aria-labelledby="pills-about-tab">
                  <div class="template-details-desc  mb-30">
                     <div class="align-items-center">
                        <div id="inputFormRowAbout" class="row mb-20">
                           <div class="col-md-12" id="aB-onlytext_0" style="display: block">
                              <div class="content mb-20 aB-contentText_0" id="aB-contentText_0">
                                 <textarea class="form-control" name="about[0][content]" id="" cols="10" rows="5"
                                    placeholder="Your Content Here . . ."></textarea>
                              </div>
                           </div>
                           <div id="aB-contentTextWithImg_0" class="col-md-12 align-items-center"
                              style="display: none;">
                              <div id="aB-Img_0" class="row">
                                 <div class="col-md-4 col-sm-12 img-section">
                                    <div class="bg-image image mb-30">
                                       <img id="aB-output_0" src="{{asset('assets/img/default/600x400.png')}}"
                                          alt="Demo Image">
                                       <div class="p-image">
                                          <i class="fas fa-camera" id="upload-button"
                                             onClick="document.getElementById('aB-fileUpload_0').click();"></i>
                                          <input id="aB-fileUpload_0" class="file_upload" type="file"
                                             name="about[0][img]" accept="image/*"
                                             onchange="loadFile(event,'aB-output_0')" />
                                       </div>
                                    </div>
                                    <!-- <div class="image mb-30">
                                       <img src="{{asset('assets/img/default/600x400.png')}}" alt="Demo Image" />
                                    </div> -->
                                 </div>
                                 <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                    id="aB-contentText_0">
                                    <textarea class="form-control" name="about[0][content]" id="" cols="10" rows="5"
                                       placeholder="Your Content Here . . ."></textarea>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2">
                              <select name="about[0][type]" class="form-control m-input"
                                 onchange="showDiv('aB-Alignment_0',this);">
                                 <option value="">--Select type--</option>
                                 <option value="textwithimage">Text With Image</option>
                                 <option value="onlytext" selected>Text Only</option>
                              </select>
                           </div>

                           <div class="col-md-2" id="aB-Alignment_0" style="display: none;">
                              <select name="about[0][alignment]" class="form-control m-input"
                                 onchange="showPosition('aB-Img_0',this)">
                                 <option value="">--Select image alignment--</option>
                                 <option value="l" selected>Left</option>
                                 <option value="r">Right</option>
                              </select>
                           </div>
                        </div>
                        <div id="newRowAbout"></div>
                        <button id="addRowAbout" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                     </div>
                     <div class="info-content">
                        <h3 class="sub-title">Some Information</h3>
                        <div id="inputFormRowSomeinfo" class="row">
                           <div class="col-md-2">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="exampleFormControlFile1"
                                    name="someinfo[0][icon]" placeholder="Icon">
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
                              <button id="removeRowSomeinfo" type="button" class="btn btn-danger"><i
                                    class="fas fa-remove"></i></button>
                           </div>

                        </div>
                        <div id="newRowSomeinfo"></div>
                        <button id="addRowSomeinfo" type="button" class="btn btn-info"><i
                              class="fas fa-add"></i></button>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-how-to-reach" role="tabpanel"
                  aria-labelledby="pills-how-to-reach-tab">
                  <div class="how-to-reach">
                     <div id="inputFormRowHtr" class="row mb-20">
                        <div class="col-md-12" id="hT-onlytext_0" style="display: block">
                           <div class="content mb-20 contentText_0" id="hT-contentText_0">
                              <textarea class="form-control" name="htr[0][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . ."></textarea>
                           </div>
                        </div>
                        <div id="hT-contentTextWithImg_0" class="col-md-12 align-items-center" style="display: none;">
                           <div id="hT-Img_0" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="hT-output_0" src="{{asset('assets/img/default/600x400.png')}}"
                                       alt="Demo Image">
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button"
                                          onClick="document.getElementById('hT-fileUpload_0').click();"></i>
                                       <input id="hT-fileUpload_0" class="file_upload" type="file" name="htr[0][img]"
                                          accept="image/*" onchange="loadFile(event,'hT-output_0')" />
                                    </div>
                                 </div>
                                 <!-- <div class="image mb-30">
                                    <img src="{{asset('assets/img/default/600x400.png')}}" alt="Demo Image" />
                                 </div> -->
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="hT-contentText_0">
                                 <textarea class="form-control" name="htr[0][content]" id="" cols="10" rows="5"
                                    placeholder="Your Content Here . . ."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="htr[0][type]" class="form-control m-input"
                              onchange="showDiv('hT-Alignment_0',this);">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext" selected>Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="hT-Alignment_0" style="display: none;">
                           <select name="htr[0][alignment]" class="form-control m-input"
                              onchange="showPosition('hT-Img_0',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="l" selected>Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>
                     </div>
                     <div id="newRowHtr"></div>
                     <button id="addRowHtr" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-attractions" role="tabpanel"
                  aria-labelledby="pills-attractions-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowAttractions" class="row mb-20">
                        <div class="col-md-12" id="aT-onlytext_0" style="display: block">
                           <div class="content mb-20 contentText_0" id="aT-contentText_0">
                              <textarea class="form-control" name="attraction[0][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . ."></textarea>
                           </div>
                        </div>
                        <div id="aT-contentTextWithImg_0" class="col-md-12 align-items-center" style="display: none;">
                           <div id="aT-Img_0" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="aT-output_0" src="{{asset('assets/img/default/600x400.png')}}"
                                       alt="Demo Image">
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button"
                                          onClick="document.getElementById('aT-fileUpload_0').click();"></i>
                                       <input id="aT-fileUpload_0" class="file_upload" type="file"
                                          name="attraction[0][img]" accept="image/*"
                                          onchange="loadFile(event,'aT-output_0')" />
                                    </div>
                                 </div>
                                 <!-- <div class="image mb-30">
                                    <img src="{{asset('assets/img/default/600x400.png')}}" alt="Demo Image" />
                                 </div> -->
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="aT-contentText_0">
                                 <textarea class="form-control" name="attraction[0][content]" id="" cols="10" rows="5"
                                    placeholder="Your Content Here . . ."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="attraction[0][type]" class="form-control m-input"
                              onchange="showDiv('aT-Alignment_0',this);">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext" selected>Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="aT-Alignment_0" style="display: none;">
                           <select name="attraction[0][alignment]" class="form-control m-input"
                              onchange="showPosition('aT-Img_0',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="l" selected>Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>
                     </div>
                     <div id="newRowAttraction"></div>
                     <button id="addRowAttraction" type="button" class="btn btn-info"><i
                           class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-stay" role="tabpanel" aria-labelledby="pills-stay-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowStay" class="row mb-20">
                        <div class="col-md-12" id="sT-onlytext_0" style="display: block">
                           <div class="content mb-20 sT-contentText_0" id="sT-contentText_0">
                              <textarea class="form-control" name="stay[0][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . ."></textarea>
                           </div>
                        </div>
                        <div id="sT-contentTextWithImg_0" class="col-md-12 align-items-center" style="display: none;">
                           <div id="sT-Img_0" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="sT-output_0" src="{{asset('assets/img/default/600x400.png')}}"
                                       alt="Demo Image">
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button"
                                          onClick="document.getElementById('sT-fileUpload_0').click();"></i>
                                       <input id="sT-fileUpload_0" class="file_upload" type="file" name="stay[0][img]"
                                          accept="image/*" onchange="loadFile(event,'sT-output_0')" />
                                    </div>
                                 </div>
                                 <!-- <div class="image mb-30">
                                    <img src="{{asset('assets/img/default/600x400.png')}}" alt="Demo Image" />
                                 </div> -->
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="sT-contentText_0">
                                 <textarea class="form-control" name="stay[0][content]" id="" cols="10" rows="5"
                                    placeholder="Your Content Here . . ."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="stay[0][type]" class="form-control m-input"
                              onchange="showDiv('sT-Alignment_0',this);">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext" selected>Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="sT-Alignment_0" style="display: none;">
                           <select name="stay[0][alignment]" class="form-control m-input"
                              onchange="showPosition('sT-Img_0',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="l" selected>Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>
                     </div>
                     <div id="newRowStay"></div>
                     <button id="addRowStay" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-nearby-amenties" role="tabpanel"
                  aria-labelledby="pills-nearby-amenties-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowAmenties" class="row mb-20">
                        <div class="col-md-12" id="aM-onlytext_0" style="display: block">
                           <div class="content mb-20 aB-contentText_0" id="aM-contentText_0">
                              <textarea class="form-control" name="about[0][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . ."></textarea>
                           </div>
                        </div>
                        <div id="aM-contentTextWithImg_0" class="col-md-12 align-items-center" style="display: none;">
                           <div id="aM-Img_0" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="aM-output_0" src="{{asset('assets/img/default/600x400.png')}}"
                                       alt="Demo Image">
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button"
                                          onClick="document.getElementById('aM-fileUpload_0').click();"></i>
                                       <input id="aM-fileUpload_0" class="file_upload" type="file"
                                          name="amenties[0][img]" accept="image/*"
                                          onchange="loadFile(event,'aM-output_0')" />
                                    </div>
                                 </div>
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="aM-contentText_0">
                                 <textarea class="form-control" name="amenties[0][content]" id="" cols="10" rows="5"
                                    placeholder="Your Content Here . . ."></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="amenties[0][type]" class="form-control m-input"
                              onchange="showDiv('aM-Alignment_0',this);">
                              <option value="">--Select type--</option>
                              <option value="textwithimage">Text With Image</option>
                              <option value="onlytext" selected>Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="aM-Alignment_0" style="display: none;">
                           <select name="amenties[0][alignment]" class="form-control m-input"
                              onchange="showPosition('aM-Img_0',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="l" selected>Left</option>
                              <option value="r">Right</option>
                           </select>
                        </div>
                     </div>
                     <div id="newRowAmenties"></div>
                     <button id="addRowAmenties" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
</section>

<script>
   var countAbout = 1;
   $("#addRowAbout").click(function () {

      var about_img = "'" + 'aboutImg_' + countAbout + "'";
      var output = "'" + 'aB-output_' + countAbout + "'";
      var file_upload = "'" + 'aB-fileUpload_' + countAbout + "'";
      var about_alignment = "'" + 'aB-Alignment_' + countAbout + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAbout" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aB-onlytext_' + countAbout + '" style="display: block"><div class="content mb-20 aBcontentText_' + countAbout + '" id="aB-contentText_' + countAbout + '"><textarea class="form-control" name="about[' + countAbout + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="aB-contentTextWithImg_' + countAbout + '" class="col-md-12 align-items-center" style="display: none;"><div id="aboutImg_' + countAbout + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aB-output_' + countAbout + '" src="' + img + '" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById (' + file_upload + ').click();"></i><input id="aB-fileUpload_' + countAbout + '" class="file_upload"  type="file" name="about[' + countAbout + '][img]" accept="image/*" onchange="loadFile(event, ' + output + ') "/></div></div></div><div class="col-md-8 col-sm-12 content-section"><textarea class="form-control" name="about[' + countAbout + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div> </div>';
      html += '<div class="col-md-2"><select id="aboutImg_' + countAbout + '" name="about[' + countAbout + '][type]" class="form-control m-input"  onchange="showDiv(' + about_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aB-Alignment_' + countAbout + '" style="display: none;"><select name="about[' + countAbout + '][alignment]" class="form-control m-input" onchange="showPosition(' + about_img + ',this)"> <option value="">--Select image alignment--</option><option value="l" selected>Left</option><option value="r">Right</option></select></div>';
      html += '<div class="col-md-2 ml-auto"><button id="removeRowAbout" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countAbout++;
      $('#newRowAbout').append(html);

   });


   // remove row
   $(document).on('click', '#removeRowAbout', function () {
      $(this).closest('#inputFormRowAbout').remove();
      countAbout--;
   });

   // ********************How To Reach*********

   var countHtr = 1;
   $("#addRowHtr").click(function () {

      var htr_img = "'" + 'htrImg_' + countHtr + "'";
      var output = "'" + 'hT-output_' + countHtr + "'";
      var file_upload = "'" + 'hT-fileUpload_' + countHtr + "'";
      var htr_alignment = "'" + 'hT-Alignment_' + countHtr + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowHTr" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="hT-onlytext_' + countHtr + '" style="display: block"><div class="content mb-20" id="hT-contentText_' + countHtr + '"><textarea class="form-control" name="htr[' + countHtr + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="hT-contentTextWithImg_' + countHtr + '" class="col-md-12 align-items-center" style="display: none;"><div id="htrImg_' + countHtr + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="hT-output_' + countHtr + '" src="' + img + '" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById (' + file_upload + ').click();"></i><input id="hT-fileUpload_' + countHtr + '" class="file_upload"  type="file" name="htr[' + countHtr + '][img]" accept="image/*" onchange="loadFile(event, ' + output + ') "/></div></div></div><div class="col-md-8 col-sm-12 content-section"><textarea class="form-control" name="htr[' + countHtr + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div> </div>';
      html += '<div class="col-md-2"><select id="htrImg_' + countHtr + '" name="htr[' + countHtr + '][type]" class="form-control m-input"  onchange="showDiv(' + htr_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="hT-Alignment_' + countHtr + '" style="display: none;"><select name="htr[' + countHtr + '][alignment]" class="form-control m-input" onchange="showPosition(' + htr_img + ',this)"> <option value="">--Select image alignment--</option><option value="l" selected>Left</option><option value="r">Right</option></select></div>';
      html += '<div class="col-md-2 ml-auto"><button id="removeRowHtr" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countHtr++;
      $('#newRowHtr').append(html);

   });


   // remove row
   $(document).on('click', '#removeRowHtr', function () {
      $(this).closest('#inputFormRowHTr').remove();
      countHtr--;
   });


   // ***********************End****************

   // <!-- ****************Attractions********************** -->

   var countAttractions = 1;
   $("#addRowAttraction").click(function () {

      var attraction_img = "'" + 'attrationImg_' + countAttractions + "'";
      var output = "'" + 'aT-output_' + countAttractions + "'";
      var file_upload = "'" + 'aT-fileUpload_' + countAttractions + "'";
      var attraction_alignment = "'" + 'aT-Alignment_' + countAttractions + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAttractions" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aT-onlytext_' + countAttractions + '" style="display: block"><div class="content mb-20 contentText_' + countAttractions + '" id="aT-contentText_' + countAttractions + '"><textarea class="form-control" name="atraction[' + countAttractions + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="aT-contentTextWithImg_' + countAttractions + '" class="col-md-12 align-items-center" style="display: none;"><div id="attrationImg_' + countAttractions + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aT-output_' + countAttractions + '" src="' + img + '" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById (' + file_upload + ').click();"></i><input id="aT-fileUpload_' + countAttractions + '" class="file_upload"  type="file" name="attraction[' + countAttractions + '][img]" accept="image/*" onchange="loadFile(event, ' + output + ') "/></div></div></div><div class="col-md-8 col-sm-12 content-section"><textarea class="form-control" name="attraction[' + countAttractions + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div> </div>';
      html += '<div class="col-md-2"><select id="attrationImg_' + countAttractions + '" name="attraction[' + countAttractions + '][type]" class="form-control m-input"  onchange="showDiv(' + attraction_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aT-Alignment_' + countAttractions + '" style="display: none;"><select name="attraction[' + countAttractions + '][alignment]" class="form-control m-input" onchange="showPosition(' + attraction_img + ',this)"> <option value="">--Select image alignment--</option><option value="l" selected>Left</option><option value="r">Right</option></select></div>';
      html += '<div class="col-md-2 ml-auto"><button id="removeRowAttraction" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countAttractions++;
      $('#newRowAttraction').append(html);

   });
   // remove row
   $(document).on('click', '#removeRowAttraction', function () {
      $(this).closest('#inputFormRowAttractions').remove();
      countAttractions--;
   });

   // <!-- *******************End******************* -->


   //**************Stay****************
   var countStay = 1;
   $("#addRowStay").click(function () {

      var stay_img = "'" + 'stayImg_' + countStay + "'";
      var output = "'" + 'sT-output_' + countStay + "'";
      var file_upload = "'" + 'sT-fileUpload_' + countStay + "'";
      var stay_alignment = "'" + 'sT-Alignment_' + countStay + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowStay" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="sT-onlytext_' + countStay + '" style="display: block"><div class="content mb-20 contentText_' + countStay + '" id="sT-contentText_' + countStay + '"><textarea class="form-control" name="stay[' + countStay + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="sT-contentTextWithImg_' + countStay + '" class="col-md-12 align-items-center" style="display: none;"><div id="stayImg_' + countStay + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="sT-output_' + countStay + '" src="' + img + '" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById (' + file_upload + ').click();"></i><input id="sT-fileUpload_' + countStay + '" class="file_upload"  type="file" name="stay[' + countStay + '][img]" accept="image/*" onchange="loadFile(event, ' + output + ') "/></div></div></div><div class="col-md-8 col-sm-12 content-section"><textarea class="form-control" name="stay[' + countStay + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div> </div>';
      html += '<div class="col-md-2"><select id="stayImg_' + countStay + '" name="stay[' + countStay + '][type]" class="form-control m-input"  onchange="showDiv(' + stay_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="sT-Alignment_' + countStay + '" style="display: none;"><select name="stay[' + countStay + '][alignment]" class="form-control m-input" onchange="showPosition(' + stay_img + ',this)"> <option value="">--Select image alignment--</option><option value="l" selected>Left</option><option value="r">Right</option></select></div>';
      html += '<div class="col-md-2 ml-auto"><button id="removeRowStay" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countStay++;
      $('#newRowStay').append(html);

   });
   // remove row
   $(document).on('click', '#removeRowStay', function () {
      $(this).closest('#inputFormRowStay').remove();
      countStay--;
   });
   //***************End***************


   // ****************Amenties*******************


   var countAmenties = 1;
   $("#addRowAmenties").click(function () {

      var amenties_img = "'" + 'amentiesImg_' + countAmenties + "'";
      var output = "'" + 'aM-output_' + countAmenties + "'";
      var file_upload = "'" + 'aM-fileUpload_' + countAmenties + "'";
      var amenties_alignment = "'" + 'aM-Alignment_' + countAmenties + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAmenties" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aM-onlytext_' + countAmenties + '" style="display: block"><div class="content mb-20 contentText_' + countAmenties + '" id="aM-contentText_' + countAmenties + '"><textarea class="form-control" name="amenties[' + countAmenties + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="aM-contentTextWithImg_' + countAmenties + '" class="col-md-12 align-items-center" style="display: none;"><div id="amentiesImg_' + countAmenties + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aM-output_' + countAmenties + '" src="' + img + '" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById (' + file_upload + ').click();"></i><input id="aM-fileUpload_' + countAmenties + '" class="file_upload"  type="file" name="amenties[' + countAmenties + '][img]" accept="image/*" onchange="loadFile(event, ' + output + ') "/></div></div></div><div class="col-md-8 col-sm-12 content-section"><textarea class="form-control" name="amenties[' + countAmenties + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div> </div>';
      html += '<div class="col-md-2"><select id="stayImg_' + countAmenties + '" name="amenties[' + countAmenties + '][type]" class="form-control m-input"  onchange="showDiv(' + amenties_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aM-Alignment_' + countAmenties + '" style="display: none;"><select name="amenties[' + countAmenties + '][alignment]" class="form-control m-input" onchange="showPosition(' + amenties_img + ',this)"> <option value="">--Select image alignment--</option><option value="l" selected>Left</option><option value="r">Right</option></select></div>';
      html += '<div class="col-md-2 ml-auto"><button id="removeRowAmenties" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countAmenties++;
      $('#newRowAmenties').append(html);

   });
   // remove row
   $(document).on('click', '#removeRowAmenties', function () {
      $(this).closest('#inputFormRowAmenties').remove();
      countAmenties--;
   });

   // ****************End*******************

   // **************Some Information*****************


   var countSomeinfo = 1;
   $("#addRowSomeinfo").click(function () {
      var html = '';
      html += '<div id="inputFormRowSomeinfo" class="row">';
      html += '<div class="col-md-2"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1"name="someinfo[' + countSomeinfo + '][icon]" placeholder="Icon"></div></div>';
      html += '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1"name="someinfo[' + countSomeinfo + '][key]" placeholder="Key"></div></div>';
      html += '<div class="col-md-4"><div class="form-group"><input type="text" class="form-control" id="exampleFormControlFile1" name="someinfo[' + countSomeinfo + '][val]" placeholder="Val"></div></div>';
      html += '<div class="col-md-2"><button id="removeRowSomeinfo" type="button" class="btn btn-danger"><i class="fas fa-remove"></i></button></div>';
      html += '</div>';
      countSomeinfo++;
      $('#newRowSomeinfo').append(html);
   });

   // remove row
   $(document).on('click', '#removeRowSomeinfo', function () {
      $(this).closest('#inputFormRowSomeinfo').remove();
      countSomeinfo--;
   });
// ****************End***************


</script>

<script>
   function loadFile(event, divId, t = 0) {
      if (t == 1) {
         if (event.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               const image = new Image();
               image.src = e.target.result;
               // console.log( e.target.result)
               image.onload = (e) => {
                  const height = e.target.height;
                  const width = e.target.width;
                  // if (height > 500 && width == 1920 ) {
                  $('#' + divId).attr('src', image.src);

                  // }
                  //   else{
                  //       alert("Height and Width must not exceed 100px.");
                  //       return true;
                  //    }
                  // alert("Uploaded image has valid Height and Width.");
                  // $('#'+divId).attr('src', image.src);
                  // return true;
               };
            }
            reader.readAsDataURL(event.target.files[0]);
         }
      } else {
         if (event.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               const image = new Image();
               image.src = e.target.result;
               // console.log( e.target.result)
               image.onload = (e) => {
                  const height = e.target.height;
                  const width = e.target.width;
                  if (height == 400 && width == 600) {
                     $('#' + divId).attr('src', image.src);

                  }
                  else {
                     alert("Height and Width must not exceed 100px.");
                     return true;
                  }
                  // alert("Uploaded image has valid Height and Width.");
                  // $('#'+divId).attr('src', image.src);
                  // return true;
               };
            }
            reader.readAsDataURL(event.target.files[0]);
         }
      }

   };

</script>

<!-- <script>
   $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });
          
          // Old code here
          /*$("<img></img>", {
            class: "imageThumb",
            src: e.target.result,
            title: file.name + " | Click to remove"
          }).insertAfter("#files").click(function(){$(this).remove();});*/
          
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script> -->

<script>
   jQuery(document).ready(function () {
      ImgUpload();
   });

   function ImgUpload() {
      var imgWrap = "";
      var imgArray = [];

      $('.upload__inputfile').each(function () {
         $(this).on('change', function (e) {
            imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
            var maxLength = $(this).attr('data-max_length');

            var files = e.target.files;
            var filesArr = Array.prototype.slice.call(files);
            var iterator = 0;
            filesArr.forEach(function (f, index) {

               if (!f.type.match('image.*')) {
                  return;
               }

               if (imgArray.length > maxLength) {
                  return false
               } else {
                  var len = 0;
                  for (var i = 0; i < imgArray.length; i++) {
                     if (imgArray[i] !== undefined) {
                        len++;
                     }
                  }
                  if (len > maxLength) {
                     return false;
                  } else {
                     imgArray.push(f);

                     var reader = new FileReader();
                     reader.onload = function (e) {
                        var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                        imgWrap.append(html);
                        iterator++;
                     }
                     reader.readAsDataURL(f);
                  }
               }
            });
         });
      });

      $('body').on('click', ".upload__img-close", function (e) {
         var file = $(this).parent().data("file");
         for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i].name === file) {
               imgArray.splice(i, 1);
               break;
            }
         }
         $(this).parent().parent().remove();
      });
   }
</script>