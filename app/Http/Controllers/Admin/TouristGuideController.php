<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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

class TouristGuideController extends Controller
{
    public function  index(Request $request){
        return view('Admin/touristguide/add');
    }

    public function create(Request $request){
        $district=Master::where('master_type','District')->where('district_status',true)->get();
        return view('Admin/touristguide/create',
        [
            'district'=>$district
        ]);
    }

    public function store(Request $request)
    { 
        $guide_array=array();
        if(!empty($request->name)){
        array_push( $guide_array,$request->name);
        }
        $model1=new Item();
        if($guide_image=$request->file('guide_image')){
            $img_data = file_get_contents($guide_image);
            $height = Image::make($guide_image)->height();
            $width = Image::make($guide_image)->width();
            $extension = $guide_image->extension();
            $mimeType=$guide_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='guide';
            if(count($guide_array)>0){
            $model1->guide_tag=$guide_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $guide_image_is_save=$model1->save();           
        }
        $model2=new Master();
        $model2->type='guide';
        $model2->district_name=explode('_',$request->district_name)[0];
        $model2->district_code=(int) explode('_',$request->district_code)[1];
        $model2->category=$request->category;
        $model2->name=$request->name;
        $model2->contact_info=$request->contactinfo;
        $model2->is_active=1;
        $model2->is_approved=1;
        $model2->guide_image_obj_id=new MongoObjectId($model1->getKey()) ;
        if($model2->save()){
        return ('Tourist Guide Save successfully');
        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }

    public function show(Request $request)
    {
            $errormsg = Config::get('constants.errormsg');
            if (request()->ajax()) {
            $limit = (int) $request->input('length');
            $offset = $request->input('start');
            if(empty($limit)){
                
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
            $model=new Master();
            $query = $model::where('type', 'guide');
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
                $array->name=$item->name;
                $array->district_name=$item->district_name;
                $array->district_code=$item->district_code;
                $array->category=$item->category;
                $array->contactinfo=$item->contactinfo;
                $array->is_active=$item->is_active;
                $array->is_approved=$item->is_approved;
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
                $array->visible=$item->visible;

                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->guide_image_obj_id)->first();
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
               ->addColumn('visible', function ($list) {
                $st='';
                if(in_array('0',$list->visible,true) && in_array('1',$list->visible,true)){
                    $st='Home & Menu';
                }
                elseif(in_array('0',$list->visible,true)){
                    $st='Home';
                }elseif(in_array('1',$list->visible,true)){
                    $st='Menu';

                }else{
                    $st='';
                }
                return $st;
              })
              ->addColumn('action', function ($list) {
                $action='';
                $edit = 'edit/';
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
                $action = $action . '<a class="btn btn-outline-info" href=' . $edit . $list->id . '><i class="fas fa-pen-to-square"></i></a>&nbsp;&nbsp;';
                $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="3" title=' . $list->name . ' slno=' . $list->slno . ' id="btndelete_'.$list->slno.'" class="btn btn-outline-danger btn-modal" value=' . $list->id . '><i class="fas fa-trash-can"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;';

              
                return $action;
              })
              ->rawColumns(['id','img','check', 'title','status','visible','action'])
            ->make(true);
            }
        return view('Admin/gallery/listView',
        [
            'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
        ]);
        
    }
}
