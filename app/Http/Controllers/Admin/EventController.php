<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
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
class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('Admin/event/add');
    }
    public function create(Request $request)
    {
        return view('Admin/event/create');
    }
    public function store(Request $request)
    { 
        $event_array=array();
        if(!empty($request->name)){
        array_push( $event_array,$request->name);
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
            if(count($event_array)>0){
            $model1->event_tag=$event_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $model1->created_by = Auth::user()->user_id;
            $model1->updated_by = Auth::user()->user_id;
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
            if(count($event_array)>0){
            $model2->event_tag=$event_array;
            }
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $model2->created_by = Auth::user()->user_id;
            $model2->updated_by = Auth::user()->user_id;
            $full_image_is_save=$model2->save();
           
        }
        $model=new Item();
        $model->type='event';
        if(!empty(trim($request->name)))
        $model->name=trim($request->name);
        if(!empty(trim($request->description)))
        $model->short_desc=trim($request->description);
        if(!empty(trim($request->message)))
        $model->desc=trim($request->message);
        $model->is_active=1;
        $model->is_approved=1;
        //dd($objectId);
        $model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        $model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        $model->page_type='home';
        $model->section_type='fest_event';
        $model->created_by = Auth::user()->user_id;
        $model->updated_by = Auth::user()->user_id;
        if($model->save()){
           // dd('Festival Uploaded successfully');
            return redirect("/admin/event/list")->with('success', 'Event Uploaded successfully');
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
            $query = $model::where('section_type', 'fest_event')->where('type', 'event');
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
                  $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                else if($list->is_active==0){
                    $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                if($list->is_approved==1){
                    $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                  }
                  else if($list->is_approved==0){
                      $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                return $action;
              })
              ->rawColumns(['id','img','check', 'title','status','action'])
            ->make(true);
            }
        return view('Admin/event/listView',
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
        $attributes['id'] = 'Event Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
            $row = Item::where('_id', $id)->where('section_type', 'fest_event')->where('type', 'event')->first();
            if(empty($row)){
                return redirect("/admin/event/list")->with('error', ' Event Not Found');
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
           $update_status=Item::where('_id', $id)->where('section_type', 'fest_event')->where('type', 'event')->update($update_arr);
           $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            return redirect("/admin/event/list")->with('success', 'Event Updated successfully');
            }
           
        }
        else {
            return redirect("/admin/event/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/event/list")->with('error', 'Event Id Not Found');
        }
       
    }
  
}
