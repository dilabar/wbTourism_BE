<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;
use App\AcceptRejectInfo;
use MongoGrid;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Config;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\Binary as MongoBinary;
use MongoDB\BSON\ObjectId as MongoObjectId;
use MongoDB\BSON\UTCDateTime as UTCDateTime;
use Validator;
use Carbon\Carbon;

class DestinationController extends Controller
{
    public function index(Request $request)
    {
        return view('Admin/destination/pageCreate');
    }
    public function create(Request $request)
    {
        $destination_list=Item::where('type', 'destination')->where('is_active', 1)->where('is_approved', 1)->get();
        return view('Admin/destination/create',[
            'category'=>$destination_list
        ]);
    }
    public function store(Request $request)
    { 

        $destination_model=new Item();
        if($request->cat_type == 'sub'){
            $destination_model->parent_destination=new MongoObjectId($request->pcat_type);
            $destination_model->type='place';
            $destination_model->page_type='detail';
        }else{
            $destination_model->type='destination';
            $destination_model->page_type='home';
            $destination_model->section_type='destination';
        }
       
        $destination_array=array();
        if(!empty($request->name)){
        array_push($destination_array,$request->name);
        }
        $model1=new Item();
        if($thumbnail_image=$request->file('thumbnail_image')){
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType=$thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='Thumbnail';
            if(count($destination_array)>0){
            $model1->destination_tag=$destination_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $thumbnail_image_is_save=$model1->save();           
        }
        $model2=new Item();
        if($full_image=$request->file('full_image')){
            $img_data = file_get_contents($full_image);
            $height = Image::make($full_image)->height();
            $width = Image::make($full_image)->width();
            $extension = $full_image->extension();
            $mimeType=$full_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model2->width= $width;
            $model2->height= $height;
            $model2->extension= $extension;
            $model2->mimType=$mimeType;
            $model2->type='Image';
            $model2->image_type='Full';
            if(count($destination_array)>0){
            $model2->destination_tag=$destination_array;
            }
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $full_image_is_save=$model2->save();
           
        }
        
      
        if(!empty(trim($request->name)))
        $destination_model->name=trim($request->name);
        if(!empty(trim($request->description)))
        $destination_model->short_desc=trim($request->description);
      
        $destination_model->template_id=2;
        $destination_model->is_active=1;
        $destination_model->is_approved=1;
       
        $destination_model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        $destination_model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        if($destination_model->save()){
            return redirect("/admin/destination/list")->with('success', 'Destination Uploaded successfully');
        }
    
        //return redirect()->route('destination/index')->with('success','Destination created successfully.');
    }
    public function show(Request $request)
    {
            $errormsg = Config::get('constants.errormsg');
            if (request()->ajax()) {
            $limit = (int) $request->input('length');
            $offset = $request->input('start');
            if(empty( $limit)){
                $limit=10;
            }
            if(empty( $offset)){
                $offset=-1;
            }
            $totalRecords = 0;
            $filterRecords = 0;
            if (!empty($request->search['value']))
              $serachvalue = $request->search['value'];
            else
              $serachvalue = '';
            $model=new Item();
            $query = $model::where('section_type', 'destination')->where('type', 'destination');
            if (empty($serachvalue)) {
                $totalRecords = $query->count();
                $data = $query->orderBy('name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            }
            else{
                $query = $query->Where('name', 'like', '%' . $serachvalue . '%');
                $totalRecords = $query->count();
                $data = $query->orderBy('name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            } 
            $list=collect([]);
            $i=1;
            foreach($data as $item){
                $array=collect();
                $content=collect([]);
                $document=collect([]);
                $img ='';
                $array->id=$item->_id;
                $array->is_active=$item->is_active;
                $array->is_approved=$item->is_approved;
                $array->name=$item->name;
                $array->short_desc=$item->short_desc;
                $status='';
                if($item->is_active==1){
                    $status= $status .' Active';
                }
                else{
                    $status= $status .' InActive';
                }
                if($item->is_approved==1){
                    $status= $status .' and Approved';
                }
                else{
                    $status= $status .' and Approval Pending';
                }
                $array->status=$status;
                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
                $type=$img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
                $array->img=$img;
                $array->slno=$i;
                $i++;
                $list->push($array);
            }
            return datatables()->of($list)
            ->setTotalRecords($totalRecords)
            ->setFilteredRecords($filterRecords)
            ->skipPaging()
            ->addColumn('check', function ($list)  {

                //return '<input type="checkbox" name="approvalcheck[]" onchange="" value="' . $list->id . '">';
                return '';
              })->addColumn('id', function ($list) {
                return $list->id;
              })->addColumn('img', function ($list) {
                return '<img width="100" height="100" src="' . $list->img . '">';
              })->addColumn('title', function ($list) {
                return $list->name;
              })
              ->addColumn('status', function ($list) {
                return $list->status;
              })
              ->addColumn('action', function ($list) {
                $action='';
                if($list->is_active==1){
                  $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                else if($list->is_active==0){
                    $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                if($list->is_approved==1){
                    $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                  }
                  else if($list->is_approved==0){
                      $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                return $action;
              })
              ->rawColumns(['id','img','check', 'title','status','action'])
            ->make(true);
            }
        return view('Admin/destination/listView',
        [
            'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
        ]);
        
    }

    // page 
   
    public function placeAdd(Request $request)
    {
        
        $template_type=Master::where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->where('design_type','detail')->get();
        $destination_list=Item::where('type', 'destination')->where('is_active', 1)->where('is_approved', 1)->get();
        // $place_list=Item::where('type', 'place')->where('is_active', 1)->where('is_approved', 1)->orwhere('type', 'place')->get();
        // $ff=Item::leftjoin('parent_destination', 'parent_destination.id', '=', 'parent_destination')->get();
        // dd($ff);
        $page_list = Item::where([['type', 'detailpage'], ['page_type', 'detail'], ['is_active', 1], ['is_approved', 1]])->whereIn('main_type', ['place', 'banner', 'product'])->get();
        // dd($page_list);
      

        return view('Admin/destination/details/addPage',[
            'template_type' => $template_type,
            'destination_list' => $destination_list,
            'page_list' => $page_list
        ]);
        // dd('ok');
    }
    public function storePlace(Request $request){
        if($request->page_type == 'Existing'){
            $place_mdl1=Item::where('_id',$request->place_id)->first();
            $place_mdl1->reference=new MongoObjectId($request->page_id);
            $place_mdl1->save();
            $uid=$request->page_id;
            $turl="place";

        }
        else{

        
        $place_model=new Item();
        if($request->is_url =='1'){
            if ($request->file('video')) {
                // dd("thgere");
                $video = $request->file('video');
                $video_extenstion = strtolower($video->getClientOriginalExtension());
                $allow_extentions = array('mp4');
                if (!in_array($video_extenstion, $allow_extentions)) {
                   return Redirect::back()->withErrors(['msg' => 'Video format is not allowed only MP4 is allowed format']);
                }
                $filename = $request->name.'_'.time().rand(11111,9999). '.';
                $video_path = $filename.$video_extenstion;
                $video_url = $video->move('uploads/video/', $video_path);
                $place_model->video_url=$video_path;
            }
        }else{
            if(!empty(trim($request->vUrl))){
                $place_model->vedio_link=trim($request->vUrl);
            }
        }
    
        

        $destination_array=array();
        if(!empty($request->name)){
        array_push($destination_array,$request->name);
        }
        if($request->template_type == '1'){
            $full_image=$request->file('banner_image');
            $thumbnail_image=$request->file('vImage');
        }else{
            $full_image=$request->file('full_image');
            $thumbnail_image=$request->file('thumbnail_image');
        }
        $model1=new Item();
        $thumbnail_image_is_save=false;           
        if($thumbnail_image){
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType=$thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='Thumbnail';
            if(count($destination_array)>0){
            $model1->destination_tag=$destination_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $thumbnail_image_is_save=$model1->save();           
        }
        $model2=new Item();
        $full_image_is_save=false;
        if($full_image){
            $img_data = file_get_contents($full_image);
            $height = Image::make($full_image)->height();
            $width = Image::make($full_image)->width();
            $extension = $full_image->extension();
            $mimeType=$full_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model2->width= $width;
            $model2->height= $height;
            $model2->extension= $extension;
            $model2->mimType=$mimeType;
            $model2->type='Image';
            $model2->image_type='Full';
            if(count($destination_array)>0){
            $model2->destination_tag=$destination_array;
            }
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $full_image_is_save=$model2->save();
           
        }

      

       
        $name=trim($request->name) ? trim($request->name) : trim($request->title);
        if(!empty($name))
        $place_model->name= $name;

        if(!empty(trim($request->description)))
        $place_model->short_desc=trim($request->description);

        if(!empty(trim($request->template_type))){
            $place_model->template_id=trim($request->template_type);

            if($request->template_type == '1'){

                // page content about htr amenties stay 
                $about_model=collect([]);
                if($request->about){
                    foreach($request->about as $key=> $abt) {
                        $about_array = collect();
                        if($abt["type"] == "textwithimage"){
                            $model_img=new Item();
                            if($abt_img=$abt["img"]){
                                $img_data = file_get_contents($abt_img);
                                $height = Image::make($abt_img)->height();
                                $width = Image::make($abt_img)->width();
                                $extension = $abt_img->extension();
                                $mimeType=$abt_img->getMimeType();
                                $binary_abt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width= $width;
                                $model_img->height= $height;
                                $model_img->extension= $extension;
                                $model_img->mimType=$mimeType;
                                $model_img->type='Image';
                                $model_img->image_type='Normal';
                                $model_img->img_data=$binary_abt_img;
                                $model_img->is_active=1;
                                $model_img->is_approved=1;
                                $normal_image_is_save=$model_img->save();
                                if($normal_image_is_save){
                                    $image_id=new MongoObjectId($model_img->getKey());
                                }
                                $about_array->image_id=$image_id;
                                $about_array->imagealignment=$abt["alignment"];
                            }
                        }
                        $about_array->order =$key;
                        $about_array->type =trim($abt["type"]);
                        $about_array->text =$abt["content"];
                        $about_model->push($about_array);
                        // dd($about_model);
                    }
                }
                $htr_model=collect([]); // how to reach 
                if($request->htr){
                foreach($request->htr as $key=> $htr) {
                
                    $htr_array = collect();
                    if($htr["type"] == "textwithimage"){
                        $model_img=new Item();
                        if($htr_img=$htr["img"]){
                            $img_data = file_get_contents($htr_img);
                            $height = Image::make($htr_img)->height();
                            $width = Image::make($htr_img)->width();
                            $extension = $htr_img->extension();
                            $mimeType=$htr_img->getMimeType();
                            $binary_htr_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width= $width;
                            $model_img->height= $height;
                            $model_img->extension= $extension;
                            $model_img->mimType=$mimeType;
                            $model_img->type='Image';
                            $model_img->image_type='Normal';
                            $model_img->img_data=$binary_htr_img;
                            $model_img->is_active=1;
                            $model_img->is_approved=1;
                            $normal_image_is_save=$model_img->save();
                            if($normal_image_is_save){
                                $image_id=new MongoObjectId($model_img->getKey());
                            }
                            $htr_array->image_id=$image_id;
                            $htr_array->imagealignment=$htr["alignment"];
                        }
                    }
                    $htr_array->order =$key;
                    $htr_array->type =trim($htr["type"]);
                    $htr_array->text =trim($htr["content"]);
                    $htr_model->push($htr_array);
                    // dd($about_model);
                }
            }

            $attraction_model=collect([]); //attraction
            if($request->attraction){
                    foreach($request->attraction as $key=> $at) {
                    
                        $attraction_array = collect();
                        if($at["type"] == "textwithimage"){
                            $model_img=new Item();
                            if($at_img=$at["img"]){
                                $img_data = file_get_contents($at_img);
                                $height = Image::make($at_img)->height();
                                $width = Image::make($at_img)->width();
                                $extension = $at_img->extension();
                                $mimeType=$at_img->getMimeType();
                                $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width= $width;
                                $model_img->height= $height;
                                $model_img->extension= $extension;
                                $model_img->mimType=$mimeType;
                                $model_img->type='Image';
                                $model_img->image_type='Normal';
                                $model_img->img_data=$binary_at_img;
                                $model_img->is_active=1;
                                $model_img->is_approved=1;
                                $normal_image_is_save=$model_img->save();
                                if($normal_image_is_save){
                                    $image_id=new MongoObjectId($model_img->getKey());
                                }
                                $attraction_array->image_id=$image_id;
                                $attraction_array->imagealignment=$at["alignment"];
                            }
                        }
                        $attraction_array->order =$key;
                        $attraction_array->type =trim($at["type"]);
                        $attraction_array->text =trim($at["content"]);
                        $attraction_model->push($attraction_array);
                        //  dd( $attraction_model);
                    }
                }

                $stay_model=collect([]); //Stay
                if($request->stay){
                    foreach($request->stay as $key=> $st) {
                    
                        $stay_array = collect();
                        if($st["type"] == "textwithimage"){
                            $model_img=new Item();
                            if($st_img=$st["img"]){
                                $img_data = file_get_contents($st_img);
                                $height = Image::make($st_img)->height();
                                $width = Image::make($st_img)->width();
                                $extension = $st_img->extension();
                                $mimeType=$st_img->getMimeType();
                                $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width= $width;
                                $model_img->height= $height;
                                $model_img->extension= $extension;
                                $model_img->mimType=$mimeType;
                                $model_img->type='Image';
                                $model_img->image_type='Normal';
                                $model_img->img_data=$binary_at_img;
                                $model_img->is_active=1;
                                $model_img->is_approved=1;
                                $normal_image_is_save=$model_img->save();
                                if($normal_image_is_save){
                                    $image_id=new MongoObjectId($model_img->getKey());
                                }
                                $stay_array->image_id=$image_id;
                                $stay_array->imagealignment=$st["alignment"];
                            }
                        }
                        $stay_array->order =$key;
                        $stay_array->type =trim($st["type"]);
                        $stay_array->text =trim($st["content"]);
                        $stay_model->push($stay_array);
                        // dd($stay_model);

                    }
                }
            
                $amenties_model=collect([]); //attraction
                if($request->amenties){
                    foreach($request->amenties as $key=> $amt) {
                    
                        $amenties_array = collect();
                        if($amt["type"] == "textwithimage"){
                            $model_img=new Item();
                            if($amt_img=$amt["img"]){
                                $img_data = file_get_contents($amt_img);
                                $height = Image::make($amt_img)->height();
                                $width = Image::make($amt_img)->width();
                                $extension = $amt_img->extension();
                                $mimeType=$amt_img->getMimeType();
                                $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width= $width;
                                $model_img->height= $height;
                                $model_img->extension= $extension;
                                $model_img->mimType=$mimeType;
                                $model_img->type='Image';
                                $model_img->image_type='Normal';
                                $model_img->img_data=$binary_at_img;
                                $model_img->is_active=1;
                                $model_img->is_approved=1;
                                $normal_image_is_save=$model_img->save();
                                if($normal_image_is_save){
                                    $image_id=new MongoObjectId($model_img->getKey());
                                }
                                $amenties_array->image_id=$image_id;
                                $amenties_array->imagealignment=$amt["alignment"];
                            }
                        }
                        $amenties_array->order =$key;
                        $amenties_array->type =trim($amt["type"]);
                        $amenties_array->text =trim($amt["content"]);
                        $amenties_model->push($amenties_array);
                        //   dd($amenties_model);
                    }
                }

                $someInforArr = collect([]);
                if($request->someinfo){
                    foreach ($request->someinfo as $someinformation) {
                        $some_info_array = collect();
                        $some_info_array->icon=$someinformation["icon"];
                        $some_info_array->key=$someinformation["key"];
                        $some_info_array->val=$someinformation["val"];
                        $someInforArr->push($some_info_array);
                    }
                }

              
                    $place_model->about_text =$about_model->all();  
                    $place_model->how_to_reach =$htr_model->all();
                    $place_model->stay =$stay_model->all();
                    $place_model->attractions =$attraction_model->all();
                    $place_model->nearby_amenties =$amenties_model->all();
                    $place_model->about_tab_some_info =$someInforArr->all();





                $place_model->type='detailpage';
                $place_model->main_type='place';
                $place_model->page_type='detail';
                
                $place_model->tags=$request->tags;

                if($thumbnail_image_is_save){
                    $place_model->video_image=new MongoObjectId($model1->getKey()) ;
                }
                if($full_image_is_save){
                    $place_model->banner_image=new MongoObjectId($model2->getKey()) ;
        
                }
                // if(!empty(trim($request->destination_id)) && !empty(trim($request->place_id))){
                $place_model->main_place_id=new MongoObjectId($request->place_id);
                // }else{
                //     $place_model->main_place_id=new MongoObjectId($request->destination_id);

                // }

            }else if($request->template_type == '2'){
                $place_model->type='place';
                // $place_model->type='destination';
                $place_model->page_type='detail';
                // if(!empty(trim($request->destination_id)) && !empty(trim($request->place_id))){
                //     $place_model->parent_destination=new MongoObjectId($request->place_id);
                // }else{
                    $place_model->parent_destination=new MongoObjectId($request->destination_id);
                // }
               
                if($thumbnail_image_is_save){
                    $place_model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
                }
                if($full_image_is_save){
                    $place_model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        
                }

              
            }
        }
      
    
        $place_model->is_active=1;
        $place_model->is_approved=1;

        
      
            if($place_model->save()){
                if($request->template_type =='1'){
                    $turl="place";
                    $uid=$place_model->getKey();
                    $place_mdl=Item::where('_id',$request->place_id)->first();
                    
                    // $place_mdl->reference=$request->place_id;
                    $place_mdl->template_id=1;
                    $place_mdl->save();
                
                }
            else{
                $turl="destination";
                $uid=$request->destination_id;

            }
            }
        }
            $url = config('app.url').$turl."/details?template_id=".$request->template_type."&id=".$uid;
            
            return redirect("/admin/destination/list")->with('success', 'Detail Page Uploaded successfully '.$url );

        


    }
    public function destroy($id)
    {
        dd($id);
    }
    public function delete(Request $request)
    {
        $cur_time=Carbon::now()->setTimezone('Asia/Kolkata');;
        $cur_time = $cur_time->format('Y-m-d H:i:s');
        $cur_time_mongo = new UTCDateTime(strtotime($cur_time)*1000);
        $user_id=1;
        $rules = [
            'id' => 'required',
            'cur_status' => 'required|integer|in:0,1',
            'action_type' => 'required|integer|in:1,2'
        ];
        $attributes = array();
        $messages = array();
        $attributes['id'] = 'Destination Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
            $row = Item::where('_id', $id)->where('section_type', 'destination')->where('type', 'destination')->first();
            if(empty($row)){
                return redirect("/admin/destination/list")->with('error', ' Destination Not Found');
            }
          
           if($request->action_type==1){
            $col='is_active';
            if($request->cur_status==0){   
             $update_code=1;    
            }
            else if($request->cur_status==1){
                $update_code=0;    
            }
           }
           if($request->action_type==2){
            $col='is_approved';
            if($request->cur_status==0){
                $update_code=1;    
            }
            else if($request->cur_status==1){
                $update_code=0;    
            }
           }
           $accptreject_model=new AcceptRejectInfo();
           $accptreject_model->type= $row->type;
           $accptreject_model->section_type= $row->section_type;
           $accptreject_model->item_id=$id;
           $accptreject_model->from_status=(int) $request->cur_status;
           $accptreject_model->to_status=$update_code;
           $accptreject_model->op_time= $cur_time_mongo;
           $accptreject_model->action_type=(int) $request->action_type;
           $update_arr=array();
           $update_arr[''.$col]=$update_code;
           $update_arr['updated_at']=$cur_time_mongo;
           $update_arr['updated_by']=$user_id;
           $accpt_status=$accptreject_model->save();
           $update_status=Item::where('_id', $id)->where('section_type', 'destination')->where('type', 'destination')->update($update_arr);
           $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            return redirect("/admin/destination/list")->with('success', 'Destination Updated successfully');
            }
           
        }
        else {
            return redirect("/admin/destination/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/destination/list")->with('error', 'Destination Id Not Found');
        }
       
    }
  

    public function getsubcat(Request $request)
    {
        // dd($request->id);
        $id = new MongoObjectId($request->id);
        $subCat=Item::where('parent_destination', $id)->where('is_active', 1)->where('is_approved', 1)->get();
       if(count($subCat)> 0){
        $st=1;
       }else{
        $st=0;
       }
        // return $subCat;
        // $template_type=Master::where('template_id',(int) $request->id)->where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->first();
        // $dataTemplates=Master::where('template_id',$request->id)->where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->first();

        $returnHTML = view('Admin/template/dropdown', ['subcat' => $subCat])->render();
        return response()->json( array('success' => true, 'status' => $st,'html'=>$returnHTML) );
    }
}
