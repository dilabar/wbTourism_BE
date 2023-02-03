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
class GalleryController extends Controller
{
   
    public function index(Request $request)
    {
        return view('Admin/gallery/create');
    }
    
    public function create(Request $request)
    {
        return view('Admin/gallery/create');
    }
    public function store(Request $request)
    { 
        $rules = [
            'name' => 'required',
            'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'visible' => 'required',
            'gallery_type' => 'required',//0=img,1=video
        ];
         $messages = [
            'name.required' => 'The Name field is required',
            'visible.required'=>'The Visible field is required',
            'full_image.required'=>'The Image field is required',
            'gallery_type.required'=>'The Gallery type field is required',
        ];
     
         
        $attributes = array();
       
        $attributes['name'] = $request->name;
        $attributes['full_image'] = $request->full_image;
        $attributes['visible'] = $request->visible;
        $attributes['gallery_type'] = $request->gallery_type;
      
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput($request->all());
        }
        $gallery_array=array();
        if(!empty($request->name)){
        array_push( $gallery_array,$request->name);
        array_push( $gallery_array,$request->gallery_type);
        }
        // $model1=new Item();
        // if($thumbnail_image=$request->file('thumbnail_image')){
        //     $img_data = file_get_contents($thumbnail_image);
        //     $height = Image::make($thumbnail_image)->height();
        //     $width = Image::make($thumbnail_image)->width();
        //     $extension = $thumbnail_image->extension();
        //     $mimeType=$thumbnail_image->getMimeType();
        //     $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
        //     $model1->width= $width;
        //     $model1->height= $height;
        //     $model1->extension= $extension;
        //     $model1->mimType=$mimeType;
        //     $model1->type='Image';
        //     $model1->image_type='Thumbnail';
        //     if(count($gallery_array)>0){
        //     $model1->gallery_tag=$gallery_array;
        //     }
        //     $model1->img_data=$binary_thumbnail;
        //     $model1->is_active=1;
        //     $model1->is_approved=1;
        //     $thumbnail_image_is_save=$model1->save();           
        // }
        
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
            if(count($gallery_array)>0){
            $model2->gallery_tag=$gallery_array;
            }
            $model2->img_data=$binary_full;
            $model2->is_active=1;
            $model2->is_approved=1;
            $full_image_is_save=$model2->save();
           
        }
        $model=new Item();
       
        // if(!empty($request->tab_code)){
        // $model->tab_code=(int)$request->tab_code;
        // }
        $model->type='gallery';
        if(!empty(trim($request->name)))
        $model->name=trim($request->name);
        if(!empty($request->gallery_type))
        $model->gallery_type=$request->gallery_type;
       
      
        $model->is_active=1;
        $model->is_approved=1;
        //dd($objectId);
        // $model->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        $model->full_image_obj_id=new MongoObjectId($model2->getKey()) ;
        $model->page_type='home';
        $model->section_type='gallery';
        $model->visible=$request->visible;
        if($model->save()){
           // dd('Gallery uploaded successfully');
            return redirect("/admin/gallery/list")->with('success', 'Gallery Uploaded successfully');
        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
    public function imageForm(Request $request)
    {
        // LoadFest();
        $galler_cat=Item::where('type','gallery')->where('section_type','gallery')->get();
        $district=Master::where('master_type','District')->where('district_status',true)->get();
        return view('Admin/gallery/image/add-gallery-image',[
            'gal_category'=>$galler_cat,
            'district'=>$district,
        ]);
    }
    function addImage(Request $request)
    {
     
   
        // dd($request);
         $rules = [
            'name' => 'required',
            'gallery_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'dist' => 'required',
            'gallery_cat' => 'required'
        ];
         $messages = [
            'name.required' => 'The Name field is required',
            'dist.required'=>'The District field is required',
            'gallery_cat.required'=>'The Category field is required',
            'gallery_image.required'=>'The Image field is required',
        ];

         
        $attributes = array();
       
        $attributes['name'] = $request->name;
        $attributes['gallery_image'] = $request->gallery_image;
        $attributes['dist'] = $request->dist;
        $attributes['gallery_cat'] = $request->gallery_cat;
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        
        if ($validator->fails()) {
            return redirect('admin/gallery/image/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        // dd($attributes);

       
        $gallery_array=array();
        if(!empty($request->name)){
        array_push( $gallery_array,$request->name);
        array_push( $gallery_array,explode('_',$request->gallery_cat)[0]);
        array_push( $gallery_array,(int) trim($request->dist));
       
        }
       
 
        $model1=new Item();
        if($gallery_image=$request->file('gallery_image')){
            $img_data = file_get_contents($gallery_image);
            $height = Image::make($gallery_image)->height();
            $width = Image::make($gallery_image)->width();
            $extension = $gallery_image->extension();
            $mimeType=$gallery_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='gallery';
            if(count($gallery_array)>0){
            $model1->gallery_tag=$gallery_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $thumbnail_image_is_save=$model1->save();           
        }
      
        $model=new Item();
      
        if(!empty(trim($request->name)))
        $model->name=trim($request->name);
        if(!empty(trim($request->dist)))
        $model->district=(int) trim($request->dist);
        if(!empty(trim($request->gallery_cat)))
        $model->gallery_category=explode('_',$request->gallery_cat)[0];
        $model->gallery_category_id=explode('_',$request->gallery_cat)[1];
        $model->is_active=1;
        $model->is_approved=1;
        $model->type='gallery';

        //dd($objectId);
        $model->gallery_image_obj_id=new MongoObjectId($model1->getKey()) ;
        if($model->save()){
            // dd('Gallery uploaded successfully');
             return redirect("/admin/gallery/image/add")->with('success', 'Gallery Image Uploaded successfully');
         }

    }
    public function show(Request $request)
    {
            $errormsg = Config::get('constants.errormsg');
            if (request()->ajax()) {
            $limit = (int) $request->input('length');
            $offset = (int) $request->input('start');
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
            $model=new Item();
            $query = $model::where('section_type', 'gallery')->where('type', 'gallery');
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
                // $array->visible=$item->visible;
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

                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->thumbnail_image_obj_id)->first();
                if($img_content){
               
                }else{
                    $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->full_image_obj_id)->first();

                }
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
            'action_type' => 'required|integer|in:1,2,3'
        ];
        $attributes = array();
        $messages = array();
        $attributes['id'] = 'Gallery Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
          
            $row = Item::where('_id', $id)->where('type', 'gallery')->first();
            if(empty($row)){
                return redirect("/admin/gallery/list")->with('error', ' Gallery Not Found');
            }
            $msg="Update"; 
         
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
           if($request->action_type==3){
            $col='is_delete';
            $update_code=1;
            $msg="Delete"; 
            
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
            if($request->action_type==3){
                $update_status=Item::where('_id', $id)->delete();
            }else{
                $update_status=Item::where('_id', $id)->where('type', 'gallery')->update($update_arr);

            }
        //    $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            if($request->t== '1'){
                return redirect("/admin/gallery/image/list")->with('success', 'Gallery '.$msg.' successfully');
            }else{
                return redirect("/admin/gallery/list")->with('success', 'Gallery '.$msg.' successfully');

            }
            }
           
        }
        else {
            return redirect("/admin/gallery/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/gallery/list")->with('error', 'Gallery Id Not Found');
        }
       
    }
    public function edit($id)
    {
        $details_db = Item::where('_id', $id)->first();
        // $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->where('type', 'Image')->first();
         //dd( $details_db->full_image_obj_id);
        $fullimg_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->full_image_obj_id)->first();
        // dd($fullimg_content);
        // $type = $img_content->mimType;
        $type1 = $fullimg_content->mimType;
        // $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
        $full = 'data:' . $type1 . ';base64,' . base64_encode($fullimg_content->img_data);
        //   dd($details_db);
        return view('Admin/gallery/edit', compact('details_db', 'full'));;
    }

    public function galleryupdate(Request $request)
    {
        //dd($request);
        $rules = [
            'name' => 'required',
            // 'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'visible' => 'required',
            'gallery_id' => 'required',
        ];
         $messages = [
            'name.required' => 'The Name field is required',
            'visible.required'=>'The Visible field is required',
            // 'full_image.required'=>'The Image field is required',
            'gallery_id.required'=>'The Gallery id field is not valid',
        ];

         
        $attributes = array();
       
        $attributes['name'] = $request->name;
        $attributes['full_image'] = $request->gallery_image;
        $attributes['visible'] = $request->dist;
        $attributes['gallery_id'] = $request->gallery_id;
     
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $id = $request->gallery_id;
        $gallery_db = Item::where('_id', $id)->where('type','gallery')->where('section_type','gallery')->first();
        // $thumb_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery_db->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
        // if ($thumbnail_image = $request->file('thumbnail_image')) {
        //     $img_data = file_get_contents($thumbnail_image);
        //     $height = Image::make($thumbnail_image)->height();
        //     $width = Image::make($thumbnail_image)->width();
        //     $extension = $thumbnail_image->extension();
        //     $mimeType = $thumbnail_image->getMimeType();
        //     $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
        //     $thumb_mdl->width = $width;
        //     $thumb_mdl->height = $height;
        //     $thumb_mdl->extension = $extension;
        //     $thumb_mdl->mimType = $mimeType;
        //     $thumb_mdl->img_data = $binary_thumbnail;
        //     $thumbnail_image_is_save = $thumb_mdl->save();
        // }
        $fullimg_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery_db->full_image_obj_id)->where('image_type', 'Full')->first();
        if ($full_image = $request->file('full_image')) {
            $img_data = file_get_contents($full_image);
            $height = Image::make($full_image)->height();
            $width = Image::make($full_image)->width();
            $extension = $full_image->extension();
            $mimeType = $full_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $fullimg_mdl->width = $width;
            $fullimg_mdl->height = $height;
            $fullimg_mdl->extension = $extension;
            $fullimg_mdl->mimType = $mimeType;
            $fullimg_mdl->img_data = $binary_full;
            $full_image_is_save = $fullimg_mdl->save();
        }
        
        if (!empty($request->visible)) {
            $gallery_db->visible = $request->visible;
        }
        if (!empty(trim($request->name))) {
            $gallery_db->name = trim($request->name);
        }
            // $gallery_db->reference = null;

        if ($gallery_db->save()) {
            return redirect("/admin/gallery/list")->with('success', 'Gallery Updated successfully');
        }
    }

    // image list 
    public function galleryImagelist(Request $request)
    {
    
            $errormsg = Config::get('constants.errormsg');
            if (request()->ajax()) {
              
            $limit = (int) $request->input('length');
            $offset = (int) $request->input('start');
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
            $query = $model::where([['type', 'gallery'],['district','<>',null]]);
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
                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->gallery_image_obj_id)->where('image_type', 'gallery')->first();
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

                // return '<input type="checkbox" onchange="" value="' . $list->slno . '">';
                return '<p>' . $list->slno . '</p>' ;
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
                $edit = 'edit/';
                if($list->is_active==1){
                  $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title="'.$list->name.'" slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                else if($list->is_active==0){
                    $action = $action.'<button cur_status=' . $list->is_active . ' action_type="1" title="'. $list->name.'" slno=' . $list->slno . ' id="btnactive_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                if($list->is_approved==1){
                    $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title="'. $list->name .'" slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                  }
                  else if($list->is_approved==0){
                      $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="2" title="' . $list->name . '" slno=' . $list->slno . ' id="btnapprove_'.$list->slno.'" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                }
                $action = $action . '<a class="btn btn-outline-info " href=' . $edit . $list->id . '><i class="fas fa-pen-to-square"></i></a>&nbsp;&nbsp;';
                $action = $action.'<button cur_status=' . $list->is_approved . ' action_type="3" title=' . $list->name . ' slno=' . $list->slno . ' id="btndelete_'.$list->slno.'" class="btn btn-outline-danger btn-modal" value=' . $list->id . '><i class="fas fa-trash-can"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;';

                return $action;
              })
              ->rawColumns(['id','img','check', 'title','status','action'])
            ->make(true);
            }
        return view('Admin/gallery/image/imagelistView',
        [
            'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
        ]);
        
    }
    public function ImageEdit($id)
    {
        $details_db = Item::where('_id', $id)->first();
        $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->gallery_image_obj_id)->where('image_type', 'gallery')->first();
        //  dd( $details_db->full_image_obj_id);
        $type = $img_content->mimType;
        $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
        //   dd($details_db);
        $gal_category=Item::where('type','gallery')->where('section_type','gallery')->get();
        $district=Master::where('master_type','District')->where('district_status',true)->get();
       
        return view('Admin/gallery/image/edit', compact('details_db','gal_category','district', 'img'));;
    }
    
    public function ImageUpdate(Request $request)
    {
        // dd($request);
        $rules = [
            'name' => 'required',
            // 'gallery_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'dist' => 'required',
            'gallery_cat' => 'required',
            'img_id'=>'required'
        ];
         $messages = [
            'name.required' => 'The Name field is required',
            'dist.required'=>'The District field is required',
            'gallery_cat.required'=>'The Category field is required',
            // 'gallery_image.required'=>'The Image field is required',
            'img_id.required'=>'Invalid Image Id',
        ];

         
        $attributes = array();
       
        $attributes['name'] = $request->name;
        // $attributes['gallery_image'] = $request->gallery_image;
        $attributes['dist'] = $request->dist;
        $attributes['gallery_cat'] = $request->gallery_cat;
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        
        if ($validator->fails()) {
            return  redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $gallery_array=array();
        if(!empty($request->name)){
        array_push( $gallery_array,$request->name);
        array_push( $gallery_array,explode('_',$request->gallery_cat)[0]);
        array_push( $gallery_array,(int) trim($request->dist));
       
        }
        $id = $request->img_id;
        $gallery_db = Item::where('_id', $id)->where('type','gallery')->first();
        $gallery_img_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery_db->gallery_image_obj_id)->where('image_type', 'gallery')->first();
        if ($thumbnail_image = $request->file('gallery_image')) {
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType = $thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $gallery_img_mdl->width = $width;
            $gallery_img_mdl->height = $height;
            $gallery_img_mdl->extension = $extension;
            $gallery_img_mdl->mimType = $mimeType;
            $gallery_img_mdl->img_data = $binary_thumbnail;
            if(count($gallery_array)>0){
                $gallery_img_mdl->gallery_tag=$gallery_array;
            }
            $thumbnail_image_is_save = $gallery_img_mdl->save();
        }
        
       
        if(!empty(trim($request->name)))
        $gallery_db->name=trim($request->name);
        if(!empty(trim($request->dist)))
        $gallery_db->district=(int) trim($request->dist);
        if(!empty(trim($request->gallery_cat)))
        $gallery_db->gallery_category=explode('_',$request->gallery_cat)[0];
        $gallery_db->gallery_category_id=explode('_',$request->gallery_cat)[1];
            // $gallery_db->reference = null;

        if ($gallery_db->save()) {
            return redirect("/admin/gallery/image/list")->with('success', 'Image Updated successfully');
        }
    }
}
