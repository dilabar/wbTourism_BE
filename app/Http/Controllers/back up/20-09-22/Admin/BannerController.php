<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\AcceptRejectInfo;
use App\Master;
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
class BannerController extends Controller
{
    public function index(Request $request)
    {
        return view('Admin/banner/add');
    }
    public function create(Request $request)
    {
        return view('Admin/banner/create');
    }
    public function store(Request $request)
    { 
        
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
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $full_image_is_save=$model2->save();
           
        }
        $banner_model=new Item();
        $banner_model->page_type='home';
        $banner_model->section_type='banner';
        $banner_model->is_active=1;
        $banner_model->is_approved=1;
        $banner_model->type='banner';
        if(!empty(trim($request->name))){
            $banner_model->name=trim($request->name);
        }
        if(!empty(trim($request->description))){
        $banner_model->short_desc=trim($request->description);
        }
        if(!empty(trim($request->slogan))){
            $banner_model->slogan=trim($request->slogan);

        }
        if(!empty(trim($request->message))){
        $banner_model->desc=trim($request->message);
        }
        $banner_model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        $banner_model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        if($banner_model->save()){
            return redirect("/admin/banner/list")->with('success', 'Banner Uploaded successfully');

        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
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
            $query = $model::where('section_type', 'banner')->where('type', 'banner');
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
            $banner_list=collect([]);
            $i=1;
            foreach($data as $banner_item){
                $banner_array=collect();
                $content=collect([]);
                $document=collect([]);
                $img ='';
                $banner_array->id=$banner_item->_id;
                $banner_array->is_active=$banner_item->is_active;
                $banner_array->is_approved=$banner_item->is_approved;
                $banner_array->name=$banner_item->name;
                $banner_array->slogan=$banner_item->slogan;
                $banner_array->short_desc=$banner_item->short_desc;
                $status='';
                if($banner_item->is_active==1){
                    $status= $status .' Active';
                }
                else{
                    $status= $status .' InActive';
                }
                if($banner_item->is_approved==1){
                    $status= $status .' and Approved';
                }
                else{
                    $status= $status .' and Approval Pending';
                }
                $banner_array->status=$status;
                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner_item->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
                $type=$img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
                $banner_array->img=$img;
                $banner_array->slno=$i;
                $i++;
                $banner_list->push($banner_array);
            }
            return datatables()->of($banner_list)
            ->setTotalRecords($totalRecords)
            ->setFilteredRecords($filterRecords)
            ->skipPaging()
            ->addColumn('check', function ($banner_list)  {

                //return '<input type="checkbox" name="approvalcheck[]" onchange="" value="' . $banner_list->id . '">';
                return '';
              })->addColumn('id', function ($banner_list) {
                return $banner_list->id;
              })->addColumn('img', function ($banner_list) {
                return '<img width="100" height="100" src="' . $banner_list->img . '">';
              })->addColumn('title', function ($banner_list) {
                return $banner_list->name;
              })
              ->addColumn('status', function ($banner_list) {
                return $banner_list->status;
              })
              ->addColumn('action', function ($banner_list) {
                $action='';
                if($banner_list->is_active==1){
                  $action = $action.'<button cur_status=' . $banner_list->is_active . ' action_type="1" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnactive_'.$banner_list->slno.'" class="btn btn-danger btn-modal" value=' . $banner_list->id . '>Click to InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                else if($banner_list->is_active==0){
                    $action = $action.'<button cur_status=' . $banner_list->is_active . ' action_type="1" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnactive_'.$banner_list->slno.'" class="btn btn-primary btn-modal" value=' . $banner_list->id . '>Click to Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                if($banner_list->is_approved==1){
                    $action = $action.'<button cur_status=' . $banner_list->is_approved . ' action_type="2" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnapprove_'.$banner_list->slno.'" class="btn btn-danger btn-modal" value=' . $banner_list->id . '>Click to Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                  }
                  else if($banner_list->is_approved==0){
                      $action = $action.'<button cur_status=' . $banner_list->is_approved . ' action_type="2" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnapprove_'.$banner_list->slno.'" class="btn btn-primary btn-modal" value=' . $banner_list->id . '>Click to Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                return $action;
              })
              ->rawColumns(['id','img','check', 'title','status','action'])
            ->make(true);
            }
        return view('Admin/banner/listView',
        [
            'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
        ]);
        
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
       $user_id = Auth::user()->user_id;
        $rules = [
            'id' => 'required',
            'cur_status' => 'required|integer|in:0,1',
            'action_type' => 'required|integer|in:1,2'
        ];
        $attributes = array();
        $messages = array();
        $attributes['id'] = 'Banner Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
            $row = Item::where('_id', $id)->where('section_type', 'banner')->where('type', 'banner')->first();
            if(empty($row)){
                return redirect("/admin/banner/list")->with('error', ' Banner Not Found');
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
           $update_status=Item::where('_id', $id)->where('section_type', 'banner')->where('type', 'banner')->update($update_arr);
           $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            return redirect("/admin/banner/list")->with('success', 'Banner Updated successfully');
            }
           
        }
        else {
            return redirect("/admin/banner/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/banner/list")->with('error', 'Banner Id Not Found');
        }
       
    }
    public function detailspageAdd(Request $request)
    {
        $template_type=Master::where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->get();
        return view('Admin/banner/details/add',[
            'template_type' => $template_type,
        ]);
        dd('ok');
    }
    public function detailspageAddPost(Request $request)
    { 
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
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $full_image_is_save=$model2->save();
           
        }
        $banner_model=new Item();
        $banner_model->page_type='detail';
        $banner_model->is_active=1;
        $banner_model->is_approved=1;
        $banner_model->type='place';
        $banner_model->template_id=2;
        if(!empty(trim($request->name))){
            $banner_model->name=trim($request->name);
        }
        if(!empty(trim($request->description))){
        $banner_model->short_desc=trim($request->description);
        }
        if(!empty(trim($request->slogan))){
            $banner_model->slogan=trim($request->slogan);

        }
        if(!empty(trim($request->message))){
        $banner_model->desc=trim($request->message);
        }
        $banner_model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        $banner_model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        $banner_model->parent_destination=new MongoObjectId('62fdf0394f32074b6d01ed82') ;
        if($banner_model->save()){
            //return redirect("/admin/banner/list")->with('success', 'Banner Uploaded successfully');

        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
  
}
