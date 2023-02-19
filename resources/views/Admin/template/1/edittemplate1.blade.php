{{-- <!-- <div class="wrap-input100 validate-input" data-validate="Banner Slogan">
<input class="input100" type="text" name="slogan" placeholder="Banner1 Slogan">
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
</div> --> --}}

<style>
   /* .editable:hover {
      border: 2px inset #f5f5f5;
   } */

   input[type=text]:focus{
      border: 1px solid #333 !important;
      /* background: #FFFFEB; */
   }
   .page-title-content input::placeholder{
      color: #f3f3f3 !important;
   }
   .file_upload {
    display: none;
   }
   .p-image {
      position: absolute;
      top: 115px;
      right: 30px;
      color: #666666;
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   }
   .banner-image{
      position: absolute;
      top: 215px;
      right: 30px;
      color: #666666;
      transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
   }
   .template1-details-section .template-details-desc .info-content {
    background: #e2ece5;
   
}

</style>
<div class="page-title-area ptb-100">
   <div class="container">
      <div class="page-title-content">
         <h1><input type="text" name="name" required class="editable bg-transparent text-light text-center" value="{{$edit_list['name']}}"></h1>
      
         {{-- <h1><input type="text" name="title" class="editable bg-transparent text-light text-center" placeholder="The Mountains"></h1> --}}
         <p class="text-light"><input name="slogan" type="text" class="editable bg-transparent text-light text-center"value="{{$edit_list['banner_short_info']}}"></p>
      </div>
   </div>
  
   @php
       //getimage($edit_list->banner_image);
   @endphp
   <div class="bg-image">
      <img id="banner_img" src="{{ getImage($edit_list->banner_image)}}" alt="Demo Image">
      <div class="banner-image">
         <i class="fas fa-camera upload-button"  onClick="document.getElementById('test').click();"></i>
         @if ($edit_list->banner_image)
         <input  name="banner_image_id" hidden type="text"  value="{{ $edit_list->banner_image}}"/>
             
         @endif
         <input id="test" name="banner_image"  class="file_upload" type="file" accept="image/*" onchange="loadFile(event,'banner_img',1)" />
      </div>
   </div>
</div>

<section class="template1-details-section pt-100 pb-70">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-12">
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
                        @foreach ($edit_list['about_text'] as $key => $about_text)
                            <div class="col-md-12" id="aB-onlytext_{{$key}}" {{ (@!empty($about_text['image_id']))? "style = display:none": ''}}>
                              <div class="content mb-20 content-section" id="aB-content_{{$key}}" >
                                 <textarea  class="form-control" name="about[{{$key}}][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . .">{{$about_text['text']}}</textarea>
                              </div>
                           </div>
                           @php
                         
                           @endphp
                           <div id="aB-contentTextWithImg_{{$key}}" class="col-md-12 align-items-center" {{  (empty($about_text['image_id']))? "style = display:none": ''}}>
                              <div id="aB-Img_{{$key}}" class="row">
                                 <div class="col-md-4 col-sm-12 img-section">
                                    <div class="bg-image image mb-30">
                                       <img id="aB-output_{{$key}}" src="{{ (!empty($about_text['image_id']))? getImage($about_text['image_id']) : ''}}" alt="Demo Image" >
                                       <div class="p-image">
                                          <i class="fas fa-camera" id="upload-button" onClick="document.getElementById('aB-fileUpload_{{$key}}').click();"></i>
                                          <input hidden type="text" value="{{$about_text['type'] == 'textwithimage'? ($about_text['image_id']):''}}" name="about[{{$key}}][id]" >
                                          <input id="aB-fileUpload_{{$key}}" class="file_upload" type="file" name="about[{{$key}}][img]"  accept="image/*"value="" onchange="loadFile(event,'aB-output_{{$key}}')"/>
                                       </div>
                                   </div>
                                 
                                 </div>
                                 <div class="content col-md-8 col-sm-12 content-section" id="aB-contentText_{{$key}}">
                                    @if (!empty($about_text['image_id']))
                                        <textarea class="form-control" name="about[{{$key}}][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . .">{{$about_text['text']}}</textarea>
                                    @endif
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              @php
                              //  dd($about_text['type']);
                           @endphp
                              <select name="about[{{$key}}][type]" class="form-control m-input"
                                 onchange="showDiv('aB-Alignment_{{$key}}',this);">
                                 <option value="">--Select type--</option>
                                 <option {{ ($about_text['type']=='textwithimage')? 'selected': ''}} value="textwithimage">Text With Image</option>
                                 <option {{ ($about_text['type']=='onlytext')? 'selected': ''}} value="onlytext">Text Only</option>
                              </select>
                           </div>

                           <div class="col-md-2" id="aB-Alignment_{{$key}}" {{ (empty($about_text['image_id']))? "style = display:none": ''}}>
                              <select name="about[{{$key}}][alignment]" class="form-control m-input"
                                 onchange="showPosition('aB-Img_{{$key}}',this)">
                                 <option value="">--Select image alignment--</option>
                                 @if (!empty($about_text['imagealignment']))
                                 <option value="left" {{ ($about_text['imagealignment']=='left')? 'selected': ''}}>Left</option>
                                 <option value="right" {{ ($about_text['imagealignment']=='right')? 'selected': ''}}>Right</option>
                                 @else
                                 <option value="left">Left</option>
                                 <option value="right">Right</option>
                                 @endif
                              </select>
                           </div>
                           @endforeach
                        </div>
               
                        <div id="newRowAbout"></div>
                        <button id="addRowAbout" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                       
                     </div>
                     <div class="info-content mt-20">
                        <h3 class="sub-title">Some Information</h3>
                        <div id="inputFormRowSomeinfo" class="row">
                           @foreach ($edit_list['about_tab_some_info'] as $key =>$some_info )
                           <div class="col-md-2">
                              <div class="form-group">
                                 <!-- <input type="text" class="form-control" id="exampleFormControlFile1"
                                 name="someinfo[0][icon]" placeholder="Icon"> -->
                                 <select name="someinfo[{{$key}}][icon]" class="form-control m-input"><option value="">--Select Icon--</option><option value="bx bx-location-plus" >Location</option> <option value="bx bx-home" >Home</option></select>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="exampleFormControlFile1"
                                    name="someinfo[{{$key}}][key]" placeholder="Key" value={{$some_info['key']}}>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="exampleFormControlFile1"
                                    name="someinfo[{{$key}}][val]" placeholder="Val" value="{{$some_info['val']}}">
                              </div>
                           </div>
                           <div class="col-md-2">
                              <button id="removeRowSomeinfo" type="button" class="btn btn-danger"><i
                                    class="fas fa-remove"></i></button>
                           </div>
                           @endforeach
                        </div>
                        <div id="newRowSomeinfo"></div>
                        <button id="addRowSomeinfo" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-how-to-reach" role="tabpanel"
                  aria-labelledby="pills-how-to-reach-tab">
                  <div class="how-to-reach">
                     <div id="inputFormRowHtr" class="row mb-20">
                        @php
                           //  dd($edit_list);
                        @endphp
                        @foreach ($edit_list['how_to_reach'] as $key => $htr)
                        <div class="col-md-12" id="hT-onlytext_{{$key}}" {{ (@!empty($htr['image_id']))? "style = display:none": ''}}>
                           <div class="content mb-20 contentText_0" id="hT-content_{{$key}}">
                              <textarea class="form-control" name="htr[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$htr['text']}}</textarea>
                           </div>
                        </div>
                        <div id="hT-contentTextWithImg_{{$key}}" class="col-md-12 align-items-center" {{ (empty($htr['image_id']))? "style = display:none": ''}}>
                           <div id="hT-Img_{{$key}}" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="hT-output_{{$key}}" src="{{ (!empty($htr['image_id']))? getImage($htr['image_id']) : ''}}" alt="Demo Image" >
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button" onClick="document.getElementById('hT-fileUpload_{{$key}}').click();"></i>
                                       <input hidden type="text" value="{{$htr['type'] == 'textwithimage'? ($htr['image_id']):''}}" name="htr[{{$key}}][id]" >
                                       <input id="hT-fileUpload_{{$key}}" class="file_upload" type="file" name="htr[{{$key}}][img]"  accept="image/*" onchange="loadFile(event,'hT-output_{{$key}}')"/>
                                    </div>
                                 </div>
                             
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0" id="hT-contentText_{{$key}}">
                                 @if (!empty($htr['image_id']))
                                    <textarea class="form-control" name="htr[{{$key}}][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . .">{{$htr['text']}}</textarea>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="htr[{{$key}}][type]" class="form-control m-input"
                              onchange="showDiv('hT-Alignment_{{$key}}',this);">
                              <option value="">--Select type--</option>
                              <option {{ ($htr['type']=='textwithimage')? 'selected': ''}} value="textwithimage">Text With Image</option>
                              <option {{ ($htr['type']=='onlytext')? 'selected': ''}} value="onlytext">Text Only</option>
                           </select>
                        </div>
                        <div class="col-md-3" id="hT-Alignment_{{$key}}" {{ (empty($htr['image_id']))? "style = display:none": ''}}>
                           <select name="htr[{{$key}}][alignment]" class="form-control m-input"
                              onchange="showPosition('hT-Img_{{$key}}',this)">
                              <option value="">--Select image alignment--</option>
                              @if (!empty($htr['imagealignment']))
                              <option value="left" {{ ($htr['imagealignment']=='left')? 'selected': ''}}>Left</option>
                              <option value="right" {{ ($htr['imagealignment']=='right')? 'selected': ''}}>Right</option>
                              @else
                              <option value="left">Left</option>
                              <option value="right">Right</option>
                              @endif
                           </select>
                        </div>
                        @endforeach
                        
                     </div>
                     <div id="newRowHtr"></div>
                     <button id="addRowHtr" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-attractions" role="tabpanel"aria-labelledby="pills-attractions-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowAttractions" class="row mb-20">
                        @foreach ($edit_list['attractions'] as $key => $attraction)
                       
                        <div class="col-md-12" id="aT-onlytext_{{$key}}" {{ (!empty($attraction['image_id']))? "style = display:none": ''}}>
                           <div class="content mb-20 contentText_0" id="aT-content_{{$key}}">
                            @if ($attraction['type'] == 'onlytext')
                                <input type="text" class="form-control" name="attraction[{{$key}}][name]" placeholder="Attraction name" value="{{$attraction['name']}}" >
                              <textarea class="form-control" name="attraction[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$attraction['text']}}</textarea>
                              <textarea class="ckeditor form-control" name="attraction[{{$key}}][how_to_reach]" id="" cols="10" rows="5"
                                 placeholder="How to reach Content Here . . .">{{@$attraction['how_to_reach']}}</textarea>
                            @endif
                           
                           </div>
                        </div>
                        <div id="aT-contentTextWithImg_{{$key}}" class="col-md-12 align-items-center" {{ (empty($attraction['image_id']))? "style = display:none": ''}}>
                           <div id="aT-Img_{{$key}}" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="aT-output_{{$key}}" src="{{(!empty($attraction['image_id']))? getImage($attraction['image_id']) : ''}}" alt="Demo Image" >
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button" onClick="document.getElementById('aT-fileUpload_{{$key}}').click();"></i>
                                       <input hidden type="text" value="{{$attraction['type'] == 'textwithimage'? ($attraction['image_id']):''}}" name="attraction[{{$key}}][id]" >
                                       <input id="aT-fileUpload_{{$key}}" class="file_upload" type="file" name="attraction[{{$key}}][img]"  accept="image/*" onchange="loadFile(event,'aT-output_{{$key}}')"/>
                                    </div>
                                 </div>
                             
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="aT-contentText_{{$key}}">
                                 @if ($attraction['type'] == 'textwithimage')
                                    <input type="text" class="form-control" name="attraction[{{$key}}][name]" placeholder="Attraction name" value="{{$attraction['name']}}" >
                                 <textarea class="form-control" name="attraction[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$attraction['text']}}</textarea>
                                 <textarea class="ckeditor form-control" name="attraction[{{$key}}][how_to_reach]" id="" cols="10" rows="5"
                                 placeholder="How to reach Content Here . . .">{{@$attraction['how_to_reach']}}</textarea>
                                 @endif
                              
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <select name="attraction[{{$key}}][type]" class="form-control m-input"
                              onchange="showDiv('aT-Alignment_{{$key}}',this);">
                              <option value="">--Select type--</option>
                              <option  {{ ($attraction['type']=='textwithimage')? 'selected': ''}} value="textwithimage">Text With Image</option>
                              <option {{ ($attraction['type']=='onlytext')? 'selected': ''}} value="onlytext" >Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="aT-Alignment_{{$key}}"  {{ ($attraction['type']=='onlytext')? "style = display:none": ''}}>
                           <select name="attraction[{{$key}}][alignment]" class="form-control m-input"
                              onchange="showPosition('aT-Img_{{$key}}',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="left" {{ (@$attraction['imagealignment']=='left')? 'selected': ''}}>Left</option>
                              <option value="right" {{ (@$attraction['imagealignment']=='right')? 'selected': ''}}>Right</option>
                           </select>
                        </div>
                        @endforeach
                     </div>
                     <div id="newRowAttraction"></div>
                     <button id="addRowAttraction" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-stay" role="tabpanel" aria-labelledby="pills-stay-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowStay" class="row mb-20">
                        @foreach ($edit_list['stay'] as $key => $stay)
                        <div class="col-md-12" id="sT-onlytext_{{$key}}" {{ (!empty($stay['image_id']))? "style = display:none": ''}}>
                           <div class="content mb-20 sT-contentText_0" id="sT-content_{{$key}}">
                              @if ($stay['type']=='onlytext')
                                  <input type="text" class="form-control" name="stay[{{$key}}][name]" placeholder="Attraction name" value="{{@$stay['name']}}" >
                              <textarea class="form-control" name="stay[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$stay['text']}}</textarea>
                              @endif
                              
                           </div>
                        </div>
                        <div id="sT-contentTextWithImg_{{$key}}" class="col-md-12 align-items-center" {{ (empty($stay['image_id']))? "style = display:none": ''}}>
                           <div id="sT-Img_{{$key}}" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="sT-output_{{$key}}" src="{{ (!empty($stay['image_id']))? getImage($stay['image_id']) : ''}}" alt="Demo Image" >
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button" onClick="document.getElementById('sT-fileUpload_0').click();"></i>
                                       <input hidden type="text" value="{{$stay['type'] == 'textwithimage'? ($stay['image_id']):''}}" name="stay[{{$key}}][id]" >
                                       <input id="sT-fileUpload_{{$key}}" class="file_upload" type="file" name="stay[{{$key}}][img]"  accept="image/*" onchange="loadFile(event,'sT-output_{{$key}}')"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="sT-contentText_{{$key}}">
                                 @if (!empty($stay['image_id']))
                                    <input type="text" class="form-control" name="stay[{{$key}}][name]" placeholder="Attraction name" value="{{$stay['name']}}" >
                                    <textarea class="form-control" name="about[{{$key}}][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . .">{{$stay['text']}}</textarea>
                                 @endif
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2">
                           <select name="stay[{{$key}}][type]" class="form-control m-input"
                              onchange="showDiv('sT-Alignment_{{$key}}',this);">
                              <option value="">--Select type--</option>
                              <option {{ ($stay['type']=='textwithimage')? 'selected': ''}} value="textwithimage">Text With Image</option>
                              <option {{ ($stay['type']=='onlytext')? 'selected': ''}}  value="onlytext">Text Only</option>
                           </select>
                        </div>
                        <div class="col-md-3" id="sT-Alignment_{{$key}}" style="display: none;">
                           <select name="stay[{{$key}}][alignment]" class="form-control m-input"
                              onchange="showPosition('sT-Img_{{$key}}',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="left" {{ (@$stay['imagealignment']=='left')? 'selected': ''}}>Left</option>
                              <option value="right" {{ (@$stay['imagealignment']=='right')? 'selected': ''}}>Right</option>
                           </select>
                        </div>
                        @endforeach
                     </div>
                     <div id="newRowStay"></div>
                     <button id="addRowStay" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
               <div class="tab-pane fade" id="pills-nearby-amenties" role="tabpanel"
                  aria-labelledby="pills-nearby-amenties-tab">
                  <div class="align-items-center">
                     <div id="inputFormRowAmenties" class="row mb-20">
                        @foreach ($edit_list['nearby_amenties'] as $key => $nearby_amenties)
                        <div class="col-md-12" id="aM-onlytext_{{$key}}" {{(!empty($nearby_amenties['image_id']))? "style = display:none": ''}}>
                           <div class="content mb-20" id="aM-content_0">
                              @if ($nearby_amenties['type']=='onlytext')
                                   <textarea class="form-control" name="amenties[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$nearby_amenties['text']}}</textarea>
                              @endif
                             
                           </div>
                        </div>
                        <div id="aM-contentTextWithImg_{{$key}}" class="col-md-12 align-items-center" {{ (empty($nearby_amenties['image_id']))? "style = display:none": ''}}>
                           <div id="aM-Img_{{$key}}" class="row">
                              <div class="col-md-4 col-sm-12 img-section">
                                 <div class="bg-image image mb-30">
                                    <img id="aM-output_0" src="{{ (!empty($nearby_amenties['image_id']))? getImage($nearby_amenties['image_id']) : ''}}" alt="Demo Image" >
                                    <div class="p-image">
                                       <i class="fas fa-camera" id="upload-button" onClick="document.getElementById('aM-fileUpload_{{$key}}').click();"></i>
                                       <input hidden type="text" value="{{$nearby_amenties['type'] == 'textwithimage'? ($nearby_amenties['image_id']):''}}" name="amenties[{{$key}}][id]" >
                                       <input id="aM-fileUpload_{{$key}}" class="file_upload" type="file" name="amenties[{{$key}}][img]"  accept="image/*" onchange="loadFile(event,'aM-output_0')"/>
                                    </div>
                                 </div>
                              </div>
                              <div class="content col-md-8 col-sm-12 content-section contentText_0"
                                 id="aM-contentText_{{$key}}">
                                 @if ($nearby_amenties['type']=='textwithimage')
                                      <textarea class="form-control" name="amenties[{{$key}}][content]" id="" cols="10" rows="5"
                                 placeholder="Your Content Here . . .">{{$nearby_amenties['text']}}</textarea>
                                 @endif
                                
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <select name="amenties[{{$key}}][type]" class="form-control m-input"
                              onchange="showDiv('aM-Alignment_{{$key}}',this);">
                              <option value="">--Select type--</option>
                              <option {{ ($nearby_amenties['type']=='textwithimage')? 'selected': ''}}value="textwithimage">Text With Image</option>
                              <option {{ ($nearby_amenties['type']=='onlytext')? 'selected': ''}}  value="onlytext" selected>Text Only</option>
                           </select>
                        </div>

                        <div class="col-md-2" id="aM-Alignment_{{$key}}" style="display: none;">
                           <select name="amenties[{{$key}}][alignment]" class="form-control m-input"
                              onchange="showPosition('aM-Img_{{$key}}',this)">
                              <option value="">--Select image alignment--</option>
                              <option value="left" {{ (@$nearby_amenties['imagealignment ']=='left')? 'selected': ''}}>Left</option>
                              <option value="right" {{ (@$nearby_amenties['imagealignment ']=='right')? 'selected': ''}}>Right</option>
                           </select>
                        </div>
                        @endforeach
                     </div>
                     <div id="newRowAmenties"></div>
                     <button id="addRowAmenties" type="button" class="btn btn-info"><i class="fas fa-add"></i></button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-12">
            <aside class="widget-area">
               <div class="widget widget-video mb-30">
                  <div class="video-image">
                     <img src="{{ getImage($edit_list->video_image)}}" alt="video" id="v_image" />
                     <div class="banner-image">
                        <i class="fas fa-camera upload-button"  onClick="document.getElementById('v_file').click();"></i>
                        <input id="v_file" class="file_upload"   type="file" name="vImage" accept="image/*" onchange="loadFile(event,'v_image',1)" value="{{ getImage($edit_list->video_image)}}"/>
                     </div>
                     <input  class="form-control mt-20" name="vUrl"  type="text" value="{{$edit_list->vedio_link}}" placeholder="Youtube URL"/>
                  </div>
                  <a href="https://www.youtube.com/watch?v=QSwvg9Rv2EI" class="youtube-popup video-btn">
                     <i class='bx bx-right-arrow'></i>
                  </a>
               </div>
               {{-- <div class="widget widget-article mb-30">
                  <h3 class="sub-title">Popular Places</h3>
                  <article class="article-item">
                     <div class="image">
                        <img src="{{ asset('assets/img/tour/tigerhill.jpg')}}" alt="Demo Image" />
                     </div>
                     <div class="content">
                        <span class="location"><i class='bx bx-map'></i>Darjeeling, West Bengal</span>
                        <h3>
                           <a href="destination-details.html">Tiger Hill.</a>
                        </h3>
                     </div>
                  </article>
               </div> --}}
               {{-- <div class="widget widget-gallery mb-30">
                  <h3 class="sub-title">Related top Destination</h3>
                  <ul class="instagram-post">
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                     <li>
                        <img src="{{asset('assets/img/instagram1.jpg')}}" alt="Demo Image">
                        <i class='bx bx-images'></i>
                     </li>
                  </ul>
               </div> --}}
               <div class="widget widget-gallery mb-30 box">
                  <h3 class="sub-title">Location</h3>
                  <input class="form-control mt-20" name="map_url" type="text" value="{{ $edit_list->map_url }}">
                  <div class="map_area">
                     <iframe
                        src="{{ $edit_list->map_url }}"
                        style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>


<script>
   var countAbout = {{count($edit_list['about_text'])}};
   $("#addRowAbout").click(function () {

      var about_img = "'" + 'aboutImg_' + countAbout + "'";
      var output = "'" + 'aB-output_' + countAbout + "'";
      var file_upload = "'" + 'aB-fileUpload_' + countAbout + "'";
      var about_alignment = "'" + 'aB-Alignment_' + countAbout + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAbout" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aB-onlytext_' + countAbout + '" style="display: block"><div class="content mb-20" id="aB-content_' + countAbout + '"><textarea class="form-control" name="about[' + countAbout + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="aB-contentTextWithImg_' + countAbout + '" class="col-md-12 align-items-center" style="display: none;"><div id="aboutImg_' + countAbout + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aB-output_' + countAbout + '" src="'+img+'" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById ('+file_upload+').click();"></i><input id="aB-fileUpload_'+ countAbout +'" class="file_upload"  type="file" name="about['+ countAbout +'][img]" accept="image/*" onchange="loadFile(event, '+output+') "/></div></div></div><div class="content col-md-8 col-sm-12 content-section"  id="aB-contentText_' + countAbout + '"></div></div> </div>';
      html += '<div class="col-md-3"><select id="aboutImg_' + countAbout + '" name="about[' + countAbout + '][type]" class="form-control m-input"  onchange="showDiv(' + about_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aB-Alignment_' + countAbout + '" style="display: none;"><select name="about[' + countAbout + '][alignment]" class="form-control m-input" onchange="showPosition(' + about_img + ',this)"> <option value="">--Select image alignment--</option><option value="left" selected>Left</option><option value="right">Right</option></select></div>';
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

   var countHtr = {{count($edit_list['how_to_reach'])}};
   $("#addRowHtr").click(function () {

      var htr_img = "'" + 'htrImg_' + countHtr + "'";
      var output = "'" + 'hT-output_' + countHtr + "'";
      var file_upload = "'" + 'hT-fileUpload_' + countHtr + "'";
      var htr_alignment = "'" + 'hT-Alignment_' + countHtr + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowHTr" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="hT-onlytext_' + countHtr + '" style="display: block"><div class="content mb-20" id="hT-content_' + countHtr + '"><textarea class="form-control" name="htr[' + countHtr + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="hT-contentTextWithImg_' + countHtr + '" class="col-md-12 align-items-center" style="display: none;"><div id="htrImg_' + countHtr + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="hT-output_' + countHtr + '" src="'+img+'" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById ('+file_upload+').click();"></i><input id="hT-fileUpload_'+ countHtr +'" class="file_upload"  type="file" name="htr['+ countHtr +'][img]" accept="image/*" onchange="loadFile(event, '+output+') "/></div></div></div><div class="content col-md-8 col-sm-12 content-section" id="hT-contentText_' + countHtr + '"></div></div> </div>';
      html += '<div class="col-md-3"><select id="htrImg_' + countHtr + '" name="htr[' + countHtr + '][type]" class="form-control m-input"  onchange="showDiv(' + htr_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="hT-Alignment_' + countHtr + '" style="display: none;"><select name="htr[' + countHtr + '][alignment]" class="form-control m-input" onchange="showPosition(' + htr_img + ',this)"> <option value="">--Select image alignment--</option><option value="left" selected>Left</option><option value="right">Right</option></select></div>';
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

   var countAttractions ={{ count($edit_list['attractions'])}};
   $("#addRowAttraction").click(function () {

      var attraction_img = "'" + 'attrationImg_' + countAttractions + "'";
      var output = "'" + 'aT-output_' + countAttractions + "'";
      var file_upload = "'" + 'aT-fileUpload_' + countAttractions + "'";
      var attraction_alignment = "'" + 'aT-Alignment_' + countAttractions + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAttractions" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aT-onlytext_' + countAttractions + '" style="display: block"><div class="content mb-20 contentText_' + countAttractions + '" id="aT-content_' + countAttractions + '"><input name="attraction[' + countAttractions + '][name]" class="form-control" placeholder="Attraction name"><textarea class="ckeditor form-control" name="attraction[' + countAttractions + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea><textarea class="ckeditor form-control" name="attraction['+ countAttractions +'][how_to_reach]" id="" cols="10" rows="5" placeholder="How to reach Content Here . . ."></textarea></div></div>';
      html += '<div id="aT-contentTextWithImg_' + countAttractions + '" class="col-md-12 align-items-center" style="display: none;"><div id="attrationImg_' + countAttractions + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aT-output_' + countAttractions + '" src="'+img+'" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById ('+file_upload+').click();"></i><input id="aT-fileUpload_'+ countAttractions +'" class="file_upload"  type="file" name="attraction['+ countAttractions +'][img]" accept="image/*" onchange="loadFile(event, '+output+') "/></div></div></div><div class="content col-md-8 col-sm-12 content-section" id="aT-contentText_' + countAttractions + '"></div></div> </div>';
      html += '<div class="col-md-3"><select id="attrationImg_' + countAttractions + '" name="attraction[' + countAttractions + '][type]" class="form-control m-input"  onchange="showDiv(' + attraction_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aT-Alignment_' + countAttractions + '" style="display: none;"><select name="attraction[' + countAttractions + '][alignment]" class="form-control m-input" onchange="showPosition(' + attraction_img + ',this)"> <option value="">--Select image alignment--</option><option value="left" selected>Left</option><option value="right">Right</option></select></div>';
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
var countStay = {{count($edit_list['stay'])}};
   $("#addRowStay").click(function () {

      var stay_img = "'" + 'stayImg_' + countStay + "'";
      var output = "'" + 'sT-output_' + countStay + "'";
      var file_upload = "'" + 'sT-fileUpload_' + countStay + "'";
      var stay_alignment = "'" + 'sT-Alignment_' + countStay + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowStay" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="sT-onlytext_' + countStay + '" style="display: block"><div class="content mb-20 contentText_' + countStay + '" id="sT-content_' + countStay + '"><textarea class="form-control" name="stay[' + countStay + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="sT-contentTextWithImg_' + countStay + '" class="col-md-12 align-items-center" style="display: none;"><div id="stayImg_' + countStay + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="sT-output_' + countStay + '" src="'+img+'" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById ('+file_upload+').click();"></i><input id="sT-fileUpload_'+ countStay +'" class="file_upload"  type="file" name="stay['+ countStay +'][img]" accept="image/*" onchange="loadFile(event, '+output+') "/></div></div></div><div class="content col-md-8 col-sm-12 content-section" id="sT-contentText_' + countStay + '"></div></div> </div>';
      html += '<div class="col-md-3"><select id="stayImg_' + countStay + '" name="stay[' + countStay + '][type]" class="form-control m-input"  onchange="showDiv(' + stay_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="sT-Alignment_' + countStay + '" style="display: none;"><select name="stay[' + countStay + '][alignment]" class="form-control m-input" onchange="showPosition(' + stay_img + ',this)"> <option value="">--Select image alignment--</option><option value="left" selected>Left</option><option value="right">Right</option></select></div>';
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


var countAmenties = {{count($edit_list['nearby_amenties'])}};
   $("#addRowAmenties").click(function () {

      var amenties_img = "'" + 'amentiesImg_' + countAmenties + "'";
      var output = "'" + 'aM-output_' + countAmenties + "'";
      var file_upload = "'" + 'aM-fileUpload_' + countAmenties + "'";
      var amenties_alignment = "'" + 'aM-Alignment_' + countAmenties + "'";
      var img = "{{asset('assets/img/default/600x400.png')}}"
      var html = '';
      html += '<div id="inputFormRowAmenties" class="row mt-20 mb-20">';
      html += '<div class="col-md-12" id="aM-onlytext_' + countAmenties + '" style="display: block"><div class="content mb-20 contentText_' + countAmenties + '" id="aM-content_' + countAmenties + '"><textarea class="form-control" name="amenties[' + countAmenties + '][content]" id="" cols="10" rows="5" placeholder="Your Content Here . . ."></textarea></div></div>';
      html += '<div id="aM-contentTextWithImg_' + countAmenties + '" class="col-md-12 align-items-center" style="display: none;"><div id="amentiesImg_' + countAmenties + '" class="row"><div class="col-md-4 col-sm-12 img-section"><div class="bg-image image mb-30"><img  id="aM-output_' + countAmenties + '" src="'+img+'" alt="Demo Image"><div class="p-image"><i class="fas fa-camera" id="upload-button" onClick="document.getElementById ('+file_upload+').click();"></i><input id="aM-fileUpload_'+ countAmenties +'" class="file_upload"  type="file" name="amenties['+ countAmenties +'][img]" accept="image/*" onchange="loadFile(event, '+output+') "/></div></div></div><div class="content col-md-8 col-sm-12 content-section" id="aM-contentText_' + countAmenties + '"></div></div> </div>';
      html += '<div class="col-md-3"><select id="amentiesImg_' + countAmenties + '" name="amenties[' + countAmenties + '][type]" class="form-control m-input"  onchange="showDiv(' + amenties_alignment + ',this);"> <option value="">--Select type--</option><option value="textwithimage">Text With Image</option><option value="onlytext" selected>Text Only</option> </select> </div>';
      html += '<div class="col-md-2" id="aM-Alignment_' + countAmenties + '" style="display: none;"><select name="amenties[' + countAmenties + '][alignment]" class="form-control m-input" onchange="showPosition(' + amenties_img + ',this)"> <option value="">--Select image alignment--</option><option value="left" selected>Left</option><option value="right">Right</option></select></div>';
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
         html += '<div class="col-md-2"><div class="form-group">                                 <select name="someinfo[' + countSomeinfo + '][icon]" class="form-control m-input"><option value="">--Select Icon--</option><option value="bx bx-location-plus" >Location</option> <option value="bx bx-home" >Home</option></select></div></div>';
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
<!-- <script>
 
  var ctid = '#contentText_0';
  $(ctid).inlineEdit({
    type: 'textarea',
    className: 'form-control',
    onChange: function (e, text, html) {
      // $("#example-text-status").text("Changed");
      // Executes when exiting inline edit mode and a change has been made
    },
    onEdit: function (e) {
      // $("#example-text-status").text("Being Edited");
      // $("#content-text-p").text("Change");

      // console.log(e.innerText);

      // Executes when entering inline edit mode
    },
    onNoChange: function (e) {
      // $("#content-text-p").text("Not Change");
      // Executes when exiting inline edit mode but no change has been made
    }
  });
</script> -->

<script>
   async  function  loadFile(event,divId,t=0) {
      const ele ='<div class="alert alert-success  fade show" role="alert">Successfully loaded.<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>'
   
      if(t==1){
         if (event.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            $('#'+divId).attr('src', e.target.result);

            }
            await reader.readAsDataURL(event.target.files[0]);
      }
      }else{
         if (event.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
               const image = new Image();
               image.src = e.target.result;
               // console.log( e.target.result)
               image.onload = (e) => {
                  const height = e.target.height;
                  const width = e.target.width;
                  if (height == 400 && width == 600 ) {
                     $('#'+divId).attr('src', image.src);
                     return true
                  }
                 else{
                     alert("Height and Width must not exceed 100px.");
                     return true;
                  }
                  // alert("Uploaded image has valid Height and Width.");
                  // $('#'+divId).attr('src', image.src);
                  // return true;
               };
            }
            reader.onloadend = () => {
            console.log('DONE', reader.readyState); // readyState will be 2
            $('#'+divId).parent().append(ele)
            };
            reader.onprogress = () => {
            console.log('progress', reader.readyState); // readyState will be 2
            };
            reader.onloadstart = () => {
            console.log('start', reader.readyState); // readyState will be 2
            };
            await reader.readAsDataURL(event.target.files[0]);
      }
      }
  
      };

</script>


