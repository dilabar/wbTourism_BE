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
        $page_list = Item::where([['type', 'detailpage'], ['page_type', 'detail'], ['is_active', 1], ['is_approved', 1]])->whereIn('main_type', ['place', 'banner', 'product'])->get();
        // dd($page_list);
        return view('Admin/banner/create', [
            'page_list' => $page_list
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $model1=new Item();
        if($thumbnail_image=$request->file('thumbnail_image')){
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType = $thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width = $width;
            $model1->height = $height;
            $model1->extension = $extension;
            $model1->mimType = $mimeType;
            $model1->type = 'Image';
            $model1->image_type = 'Thumbnail';
            $model1->img_data = $binary_thumbnail;
            $model1->is_active = 1;
            $model1->is_approved = 1;
            $thumbnail_image_is_save = $model1->save();
        }
        $model2 = new Item();
        if ($full_image = $request->file('full_image')) {
            $img_data = file_get_contents($full_image);
            $height = Image::make($full_image)->height();
            $width = Image::make($full_image)->width();
            $extension = $full_image->extension();
            $mimeType = $full_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model2->width = $width;
            $model2->height = $height;
            $model2->extension = $extension;
            $model2->mimType = $mimeType;
            $model2->type = 'Image';
            $model2->image_type = 'Full';
            $model2->img_data = $binary_full;
            $model2->is_active = 1;
            $model2->is_approved = 1;
            $full_image_is_save = $model2->save();
        }
        $banner_model = new Item();
        $banner_model->page_type = 'home';
        $banner_model->section_type = 'banner';
        $banner_model->is_active = 1;
        $banner_model->is_approved = 1;
        $banner_model->type = 'banner';
        $banner_model->template_id = 1;

        if (!empty(trim($request->name))) {
            $banner_model->name = trim($request->name);
        }
        if (!empty(trim($request->description))) {
            $banner_model->short_desc = trim($request->description);
        }
        if (!empty(trim($request->slogan))) {
            $banner_model->slogan = trim($request->slogan);
        }
        if (!empty(trim($request->message))) {
            $banner_model->desc = trim($request->message);
        }
        if (!empty(trim($request->reference))) {
            $banner_model->reference = trim($request->reference);
        } else {
            $banner_model->reference = null;
        }
        $banner_model->thumbnail_image_obj_id = new MongoObjectId($model1->getKey());
        $banner_model->full_image_obj_id = new MongoObjectId($model2->getKey());
        if ($banner_model->save()) {
            return redirect("/admin/banner/list")->with('success', 'Banner Uploaded successfully');
        }

        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }

     function show(Request $request)
    {
        $errormsg = Config::get('constants.errormsg');
        if (request()->ajax()) {
            $limit = (int) $request->input('length');

            $offset = $request->input('start');
            if (empty($limit)) {
                $limit = 10;
            }
            if (empty($offset)) {
                $offset = -1;
            }
            $totalRecords = 0;
            $filterRecords = 0;
            if (!empty($request->search['value']))
                $serachvalue = $request->search['value'];
            else
                $serachvalue = '';
            $model = new Item();
            $query = $model::where('section_type', 'banner')->where('type', 'banner');
            if (empty($serachvalue)) {
                $totalRecords = $query->count();
                $data = $query->orderBy('name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            } else {
                $query = $query->Where('name', 'like', '%' . $serachvalue . '%');
                $totalRecords = $query->count();
                $data = $query->orderBy('name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            }
            $banner_list = collect([]);
            $i = 1;
            foreach ($data as $banner_item) {
                $banner_array = collect();
                $content = collect([]);
                $document = collect([]);
                $img = '';
                $banner_array->id = $banner_item->_id;
                $banner_array->is_active = $banner_item->is_active;
                $banner_array->is_approved = $banner_item->is_approved;
                $banner_array->name = $banner_item->name;
                $banner_array->slogan = $banner_item->slogan;
                $banner_array->short_desc = $banner_item->short_desc;
                $status = '';
                if ($banner_item->is_active == 1) {
                    $status = $status . ' Active';
                } else {
                    $status = $status . ' InActive';
                }
                if ($banner_item->is_approved == 1) {
                    $status = $status . ' and Approved';
                } else {
                    $status = $status . ' and Approval Pending';
                }
                $banner_array->status = $status;
                $page = '';
                $pageEdit = '';
                if ($banner_item->reference != 'ref1' && $banner_item->reference != '') {
                    $page = 'http://127.0.0.1:8000/banner/details?template_id=1&id=' . $banner_item->reference;
                    $pageEdit = 'http://127.0.0.1:8000/admin/banner/details/Edit/' . $banner_item->reference;
                }



                $banner_array->page = $page;
                $banner_array->pageEdit = $pageEdit;

                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner_item->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
                $type = $img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
                $banner_array->img = $img;
                $banner_array->slno = $i;
                $i++;
                $banner_list->push($banner_array);
            }

            return datatables()->of($banner_list)
                ->setTotalRecords($totalRecords)
                ->setFilteredRecords($filterRecords)
                ->skipPaging()
                ->addColumn('check', function ($banner_list) {

                    //return '<input type="checkbox" name="approvalcheck[]" onchange="" value="' . $banner_list->id . '">';
                    return '';
                })->addColumn('id', function ($banner_list) {
                    return $banner_list->id;
                })->addColumn('img', function ($banner_list) {
                    return '<img width="100" height="70" src="' . $banner_list->img . '">';
                })->addColumn('title', function ($banner_list) {
                    return $banner_list->name;
                })
                ->addColumn('status', function ($banner_list) {
                    return $banner_list->status;
                })
                ->addColumn('page', function ($banner_list) {
                    $p = '';
                    if ($banner_list->page == '' && $banner_list->pageEdit == '') {
                        $p = $p . '<a class="nav-link text-secondary" >Page Not mapped </a>';
                    } else {
                        // $ep='http://127.0.0.1:8000/admin/banner/details/Edit/'.$banner_list->reference;
                        $p = $p . '<a class="nav-link text-success" href=' . $banner_list->page . '>View Page</a> <a class="nav-link text-success" href=' . $banner_list->pageEdit . '  >Page Edit </a>';
                    }
                    return $p;
                })


                ->addColumn('action', function ($banner_list) {
                    $action = '';
                    $edit = 'edit/';
                    if ($banner_list->is_active == 1) {
                        $action = $action . '<button cur_status=' . $banner_list->is_active . ' action_type="1" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnactive_' . $banner_list->slno . '" class="btn btn-danger btn-modal" value=' . $banner_list->id . '>InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($banner_list->is_active == 0) {
                        $action = $action . '<button cur_status=' . $banner_list->is_active . ' action_type="1" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnactive_' . $banner_list->slno . '" class="btn btn-primary btn-modal" value=' . $banner_list->id . '>Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    if ($banner_list->is_approved == 1) {
                        $action = $action . '<button cur_status=' . $banner_list->is_approved . ' action_type="2" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnapprove_' . $banner_list->slno . '" class="btn btn-danger btn-modal" value=' . $banner_list->id . '>Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($banner_list->is_approved == 0) {
                        $action = $action . '<button cur_status=' . $banner_list->is_approved . ' action_type="2" title=' . $banner_list->name . ' slno=' . $banner_list->slno . ' id="btnapprove_' . $banner_list->slno . '" class="btn btn-primary btn-modal" value=' . $banner_list->id . '>Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    // $action = $action.'<button  action_type="3"   id="btnedit_'.$banner_list->id.'" class="btn btn-secondary" value=' . $banner_list->id . '>Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    $action = $action . '<a class="btn btn-secondary" href=' . $edit . $banner_list->id . '>Edit</a>';

                    return $action;
                })
                ->rawColumns(['id', 'img', 'check', 'title', 'status', 'page', 'action'])
                ->make(true);
        }

        return view(
            'Admin/banner/listView',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]
        );
    }

    public function edit($id)
    {
        $details_db = Item::where('_id', $id)->first();
        $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
        //  dd( $details_db->full_image_obj_id);
        $fullimg_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->full_image_obj_id)->first();
        // dd($fullimg_content);
        $type = $img_content->mimType;
        $type1 = $fullimg_content->mimType;
        $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
        $full = 'data:' . $type1 . ';base64,' . base64_encode($fullimg_content->img_data);
        //   dd($details_db);
        return view('Admin/banner/edit', compact('details_db', 'img', 'full'));;
    }


    public function bannerupdate(Request $request)
    {
        //dd($request);
        $id = $request->banner_id;
        $details_db = Item::where('_id', $id)->first();
        $thumb_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
        if ($thumbnail_image = $request->file('thumbnail_image')) {
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType = $thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $thumb_mdl->width = $width;
            $thumb_mdl->height = $height;
            $thumb_mdl->extension = $extension;
            $thumb_mdl->mimType = $mimeType;
            $thumb_mdl->img_data = $binary_thumbnail;
            $thumbnail_image_is_save = $thumb_mdl->save();
        }
        $fullimg_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->full_image_obj_id)->where('image_type', 'Full')->first();
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
        $id = $request->input('banner_id');
        $banner_model = Item::find($id);
        if ($request->hasFile('thumbnail_image')) {
            $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner_model->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            if ($img_content) {
            }
        }
        // $banner_model->page_type='home';
        // $banner_model->section_type='banner';
        // $banner_model->is_active=1;
        // $banner_model->is_approved=1;
        // $banner_model->type='banner';
        if (!empty(trim($request->name))) {
            $banner_model->name = trim($request->name);
        }
        if (!empty(trim($request->description))) {
            $banner_model->short_desc = trim($request->description);
        }
        if (!empty(trim($request->slogan))) {
            $banner_model->slogan = trim($request->slogan);
        }

        if (!empty(trim($request->reference))) {
            $banner_model->reference = trim($request->reference);
        } else {
            $banner_model->reference = null;
        }


        if ($banner_model->save()) {
            return redirect("/admin/banner/list")->with('success', 'Banner Uploaded successfully');
        }
    }

    public function destroy($id)
    {
        dd($id);
    }
    public function delete(Request $request)
    {
        $cur_time = Carbon::now()->setTimezone('Asia/Kolkata');;
        $cur_time = $cur_time->format('Y-m-d H:i:s');
        $cur_time_mongo = new UTCDateTime(strtotime($cur_time) * 1000);
        $user_id = 1;
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
            $id = new MongoObjectId($request->id);
            $row = Item::where('_id', $id)->where('section_type', 'banner')->where('type', 'banner')->first();
            if (empty($row)) {
                return redirect("/admin/banner/list")->with('error', ' Banner Not Found');
            }

            if ($request->action_type == 1) {
                $col = 'is_active';
                if ($request->cur_status == 0) {
                    $update_code = 1;
                } else if ($request->cur_status == 1) {
                    $update_code = 0;
                }
            }
            if ($request->action_type == 2) {
                $col = 'is_approved';
                if ($request->cur_status == 0) {
                    $update_code = 1;
                } else if ($request->cur_status == 1) {
                    $update_code = 0;
                }
            }
            $accptreject_model = new AcceptRejectInfo();
            $accptreject_model->type = $row->type;
            $accptreject_model->section_type = $row->section_type;
            $accptreject_model->item_id = $id;
            $accptreject_model->from_status = (int) $request->cur_status;
            $accptreject_model->to_status = $update_code;
            $accptreject_model->op_time = $cur_time_mongo;
            $accptreject_model->action_type = (int) $request->action_type;
            $update_arr = array();
            $update_arr['' . $col] = $update_code;
            $update_arr['updated_at'] = $cur_time_mongo;
            $update_arr['updated_by'] = $user_id;
            $accpt_status = $accptreject_model->save();
            $update_status = Item::where('_id', $id)->where('section_type', 'banner')->where('type', 'banner')->update($update_arr);
            $accpt_status = $accptreject_model->save();
            if ($accpt_status &&  $update_status) {
                return redirect("/admin/banner/list")->with('success', 'Banner Updated successfully');
            }
        } else {
            return redirect("/admin/banner/list")->withErrors($validator);
        }
        if (empty($request->id)) {
            return redirect("/admin/banner/list")->with('error', 'Banner Id Not Found');
        }
    }
    public function detailspageAdd(Request $request)
    {
        $template_type = Master::where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->get();
        $banner_details = Item::where([['type', 'banner'], ['is_active', 1], ['is_approved', 1]])->where('reference', null)->get();

        // $image_db=Item::where('type', 'Image')->where('image_type', 'Thumbnail')->where('is_active', 1)->where('is_approved', 1)->get();

        // $image_list=collect([]);
        // foreach($image_db as $image){
        //    $image_array=collect();
        //    $img ='';
        //    $image_array->id=(string)$image->_id;
        //    $image_array->image_type=$image->image_type;
        //    if($image->img_data){
        //     $type=$image->mimType;
        //     $img = 'data:' . $type . ';base64,' . base64_encode($image->img_data); 
        //    }
        //    $image_array->img=$img;
        //    $image_list->push($image_array);

        // } 
        $page_list = Item::where([['type', 'detailpage'], ['page_type', 'detail'], ['is_active', 1], ['is_approved', 1]])->whereIn('main_type', ['place', 'banner', 'product'])->get();

        return view('Admin/banner/details/addDetail', [
            'template_type' => $template_type,
            'banner_list' => $banner_details,
            'page_list' =>  $page_list
        ]);
        // dd('ok');
    }

    public function detailspageAddPost(Request $request)
    {
        // dd($request);
        // $this->validate($request, [
        //     'title' => 'required|max:100',
        //     'banner_image'=>'required',
        //     'about.*'=>'required|min:1',
        //     'vImage'=>'required',
           
        // ]);
   
           
        $banner_model=new Item();
        if($request->page_type == 'Existing'){
            $banner_detail1 = Item::where('_id', $request->banner_id)->first();
            $banner_detail1->reference = $request->page_id;
            $banner_detail1->save();
            $url = "http://127.0.0.1:8000/banner/details?template_id=1&id=" . $request->page_id;
            return redirect("/admin/banner/list")->with('success', 'Detail Page added successfully ' . $url);
        }else{

        

        if($request->is_url !='1'){
            if ($request->file('video')) {
                // dd("thgere");
                $video = $request->file('video');
                $video_extenstion = strtolower($video->getClientOriginalExtension());
                $allow_extentions = array('mp4');
                if (!in_array($video_extenstion, $allow_extentions)) {
                    return Redirect::back()->withErrors(['msg' => 'Video format is not allowed only MP4 is allowed format']);
                }
                $filename = $request->title.'_'.time().rand(11111,9999). '.';
                $video_path = $filename.$video_extenstion;
                $video_url = $video->move('uploads/video/', $video_path);
                $banner_model->video_url=$video_path;
            }
        }else{
            if(!empty(trim($request->vUrl))){
                $banner_model->vedio_link=trim($request->vUrl);
            }
        }
        $model1=new Item();
        $video_image_is_save=false;
        if($video_image=$request->file('vImage')){
            $img_data = file_get_contents($video_image);
            $height = Image::make($video_image)->height();
            $width = Image::make($video_image)->width();
            $extension = $video_image->extension();
            $mimeType=$video_image->getMimeType();
            $binary_video_image = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width= $width;
            $model1->height= $height;
            $model1->extension= $extension;
            $model1->mimType=$mimeType;
            $model1->type='Image';
            $model1->image_type='video_thumbnail';
            $model1->img_data=$binary_video_image;
            $model1->is_active=1;
            $model1->is_approved=1;
            $video_image_is_save=$model1->save();  
        }
        
        $model2=new Item();
        $banner_image_is_save=false;
        if($banner_image=$request->file('banner_image')){
            $img_data = file_get_contents($banner_image);
            $height = Image::make($banner_image)->height();
            $width = Image::make($banner_image)->width();
            $extension = $banner_image->extension();
            $mimeType=$banner_image->getMimeType();
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
            $banner_image_is_save=$model2->save();
           
        }

            $slider = collect([]);
            if ($slider_image = $request->file('slider')) {


                foreach ($slider_image as $slider_img) {
                    $model3 = new Item();
                    // dd($slider_img);
                    $ids = collect([]);
                    $img_data = file_get_contents($slider_img);
                    $height = Image::make($slider_img)->height();
                    $width = Image::make($slider_img)->width();
                    $extension = $slider_img->extension();
                    $mimeType = $slider_img->getMimeType();
                    $binary_slider_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                    $model3->width = $width;
                    $model3->height = $height;
                    $model3->extension = $extension;
                    $model3->mimType = $mimeType;
                    $model3->type = 'Image';
                    $model3->image_type = 'Slider';
                    $model3->img_data = $binary_slider_img;
                    $model3->is_active = 1;
                    $model3->is_approved = 1;
                    $banner_image_is_save = $model3->save();
                    if ($banner_image_is_save) {
                        $id = new MongoObjectId($model3->getKey());
                        $slider->push($id);
                    }
                    // print_r($slider_img);
                }
            }

            $about_model = collect([]);
            if ($request->about) {
                foreach ($request->about as $key => $abt) {

                    $about_array = collect();
                    if ($abt["type"] == "textwithimage") {
                        $model_img = new Item();
                        if ($abt_img = $abt["img"]) {
                            $img_data = file_get_contents($abt_img);
                            $height = Image::make($abt_img)->height();
                            $width = Image::make($abt_img)->width();
                            $extension = $abt_img->extension();
                            $mimeType = $abt_img->getMimeType();
                            $binary_abt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width = $width;
                            $model_img->height = $height;
                            $model_img->extension = $extension;
                            $model_img->mimType = $mimeType;
                            $model_img->type = 'Image';
                            $model_img->image_type = 'Normal';
                            $model_img->img_data = $binary_abt_img;
                            $model_img->is_active = 1;
                            $model_img->is_approved = 1;
                            $normal_image_is_save = $model_img->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($model_img->getKey());
                            }
                            $about_array->image_id = $image_id;
                            $about_array->imagealignment = $abt["alignment"];
                        }
                    }
                    $about_array->order = $key;
                    $about_array->type = trim($abt["type"]);
                    $about_array->text = trim($abt["content"]);
                    $about_model->push($about_array);
                    // dd($about_model);
                }
            }
            $htr_model = collect([]); // how to reach 
            if ($request->htr) {
                foreach ($request->htr as $key => $htr) {

                    $htr_array = collect();
                    if ($htr["type"] == "textwithimage") {
                        $model_img = new Item();
                        if ($htr_img = $htr["img"]) {
                            $img_data = file_get_contents($htr_img);
                            $height = Image::make($htr_img)->height();
                            $width = Image::make($htr_img)->width();
                            $extension = $htr_img->extension();
                            $mimeType = $htr_img->getMimeType();
                            $binary_htr_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width = $width;
                            $model_img->height = $height;
                            $model_img->extension = $extension;
                            $model_img->mimType = $mimeType;
                            $model_img->type = 'Image';
                            $model_img->image_type = 'Normal';
                            $model_img->img_data = $binary_htr_img;
                            $model_img->is_active = 1;
                            $model_img->is_approved = 1;
                            $normal_image_is_save = $model_img->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($model_img->getKey());
                            }
                            $htr_array->image_id = $image_id;
                            $htr_array->imagealignment = $htr["alignment"];
                        }
                    }
                    $htr_array->order = $key;
                    $htr_array->type = trim($htr["type"]);
                    $htr_array->text = trim($htr["content"]);
                    $htr_model->push($htr_array);
                    // dd($about_model);
                }
            }

            $attraction_model = collect([]); //attraction
            if ($request->attraction) {
                foreach ($request->attraction as $key => $at) {

                    $attraction_array = collect();
                    if ($at["type"] == "textwithimage") {
                        $model_img = new Item();
                        if ($at_img = $at["img"]) {
                            $img_data = file_get_contents($at_img);
                            $height = Image::make($at_img)->height();
                            $width = Image::make($at_img)->width();
                            $extension = $at_img->extension();
                            $mimeType = $at_img->getMimeType();
                            $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width = $width;
                            $model_img->height = $height;
                            $model_img->extension = $extension;
                            $model_img->mimType = $mimeType;
                            $model_img->type = 'Image';
                            $model_img->image_type = 'Normal';
                            $model_img->img_data = $binary_at_img;
                            $model_img->is_active = 1;
                            $model_img->is_approved = 1;
                            $normal_image_is_save = $model_img->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($model_img->getKey());
                            }
                            $attraction_array->image_id = $image_id;
                            $attraction_array->imagealignment = $at["alignment"];
                        }
                    }
                    $attraction_array->order = $key;
                    $attraction_array->type = trim($at["type"]);
                    $attraction_array->text = trim($at["content"]);
                    $attraction_model->push($attraction_array);
                    //  dd( $attraction_model);
                }
            }

            $stay_model = collect([]); //Stay
            if ($request->stay) {
                foreach ($request->stay as $key => $st) {

                    $stay_array = collect();
                    if ($st["type"] == "textwithimage") {
                        $model_img = new Item();
                        if ($st_img = $st["img"]) {
                            $img_data = file_get_contents($st_img);
                            $height = Image::make($st_img)->height();
                            $width = Image::make($st_img)->width();
                            $extension = $st_img->extension();
                            $mimeType = $st_img->getMimeType();
                            $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width = $width;
                            $model_img->height = $height;
                            $model_img->extension = $extension;
                            $model_img->mimType = $mimeType;
                            $model_img->type = 'Image';
                            $model_img->image_type = 'Normal';
                            $model_img->img_data = $binary_at_img;
                            $model_img->is_active = 1;
                            $model_img->is_approved = 1;
                            $normal_image_is_save = $model_img->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($model_img->getKey());
                            }
                            $stay_array->image_id = $image_id;
                            $stay_array->imagealignment = $st["alignment"];
                        }
                    }
                    $stay_array->order = $key;
                    $stay_array->type = trim($st["type"]);
                    $stay_array->text = trim($st["content"]);
                    $stay_model->push($stay_array);
                    // dd($stay_model);

                }
            }

            $amenties_model = collect([]); //attraction
            if ($request->amenties) {
                foreach ($request->amenties as $key => $amt) {

                    $amenties_array = collect();
                    if ($amt["type"] == "textwithimage") {
                        $model_img = new Item();
                        if ($amt_img = $amt["img"]) {
                            $img_data = file_get_contents($amt_img);
                            $height = Image::make($amt_img)->height();
                            $width = Image::make($amt_img)->width();
                            $extension = $amt_img->extension();
                            $mimeType = $amt_img->getMimeType();
                            $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $model_img->width = $width;
                            $model_img->height = $height;
                            $model_img->extension = $extension;
                            $model_img->mimType = $mimeType;
                            $model_img->type = 'Image';
                            $model_img->image_type = 'Normal';
                            $model_img->img_data = $binary_at_img;
                            $model_img->is_active = 1;
                            $model_img->is_approved = 1;
                            $normal_image_is_save = $model_img->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($model_img->getKey());
                            }
                            $amenties_array->image_id = $image_id;
                            $amenties_array->imagealignment = $amt["alignment"];
                        }
                    }
                    $amenties_array->order = $key;
                    $amenties_array->type = trim($amt["type"]);
                    $amenties_array->text = trim($amt["content"]);
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
        
       
        $banner_model->page_type='detail';
        $banner_model->is_active=1;
        $banner_model->is_approved=1;
        $banner_model->type='detailpage';
        $banner_model->main_type='banner';
        $banner_model->tags=$request->tags;
        $banner_model->template_id=trim($request->template_type);
        if(!empty(trim($request->slogan))){
            $banner_model->banner_short_info=trim($request->slogan);
        }
        if(!empty(trim($request->title))){
            $banner_model->name=trim($request->title);
        }
        if(!empty(trim($request->vUrl))){
        $banner_model->vedio_link=trim($request->vUrl);
        }
        if(!empty(trim($request->is_popular))){
            $banner_model->is_popular=(int)trim($request->is_popular);
        }else{
            $banner_model->is_popular=0;
        }
        $banner_model->about_text =$about_model->all();  
        $banner_model->how_to_reach =$htr_model->all();
        $banner_model->stay =$stay_model->all();
        $banner_model->attractions =$attraction_model->all();
        $banner_model->nearby_amenties =$amenties_model->all();
        $banner_model->about_tab_some_info =$someInforArr->all();
    
        // if(!empty(trim($request->message))){
        // $banner_model->desc=trim($request->message);
        // }

            $banner_model->main_banner_id = new MongoObjectId($request->banner_id);


            if ($video_image_is_save) {
                $banner_model->video_image = new MongoObjectId($model1->getKey());
            }
            if ($banner_image_is_save) {
                $banner_model->banner_image = new MongoObjectId($model2->getKey());
            }
            $banner_model->image_slider = $slider->all();
            $is_banner_save=$banner_model->save();
            if($is_banner_save){

                $banner_detail = Item::where('_id', $request->banner_id)->first();
                $banner_detail->reference = $banner_model->getKey();
                $banner_detail->save();
                $url = "http://127.0.0.1:8000/banner/details?template_id=1&id=" . $banner_model->getKey();
                return redirect("/admin/banner/list")->with('success', 'Detail Page Uploaded successfully ' . $url);
            }
        }
            

            
            
       

        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }

    public function detailspageEdit(Request $request, $id)
    {
        //dd($request);
        $template_type = Master::where('master_type', 'template')->where('template_id', (int) $request->template_id)->where('is_active', 1)->where('is_approved', 1)->get();
        $edit_details = Item::where('_id', $id)->where('is_active', 1)->where('is_approved', 1)->first();
        //  dd($edit_details);
        $returnHTML = view('Admin/template/1/edittemplate1', ['edit_list' => $edit_details])->render();
        // dd( $returnHTML);
        return view('Admin/banner/details/edit', [
            'html' => json_encode($returnHTML),
            'edit_list' => $edit_details,
            'template_type' => $template_type,
            // 'image_list' =>  $image_list
        ]);
    }

    public function detailspageUpdate(Request $request)
    {
        // dd($request);
        // $this->validate($request, [
        //     'title' => 'required|max:100',
        //     'banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        //     'about.*' => 'required|min:1',
        //     'vImage' => 'image|mimes:jpeg,png,jpg,gif,svg',
        //     'vUrl' => 'required',
        // ]);
        $id = $request->detailspage_id;
        $detailspage = Item::where('_id', $id)->first();
        //dd( $detailspage);
        $v_img = Item::where('is_active', 1)->where('is_approved', 1)->where('_id',  $detailspage->video_image)->where('image_type', 'video_thumbnail')->first();
        if ($video_image = $request->file('vImage')) {
            $img_data = file_get_contents($video_image);
            $height = Image::make($video_image)->height();
            $width = Image::make($video_image)->width();
            $extension = $video_image->extension();
            $mimeType = $video_image->getMimeType();
            $binary_video_image = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $v_img->width = $width;
            $v_img->height = $height;
            $v_img->extension = $extension;
            $v_img->mimType = $mimeType;
            $v_img->img_data = $binary_video_image;
             $video_image_is_save= $v_img->save();  
        }

        $bannerimg = Item::where('is_active', 1)->where('is_approved', 1)->where('_id',  $detailspage->banner_image)->where('image_type', 'Full')->first();
        if ($banner_image = $request->file('banner_image')) {
            $img_data = file_get_contents($banner_image);
            $height = Image::make($banner_image)->height();
            $width = Image::make($banner_image)->width();
            $extension = $banner_image->extension();
            $mimeType = $banner_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $bannerimg->width = $width;
            $bannerimg->height = $height;
            $bannerimg->extension = $extension;
            $bannerimg->mimType = $mimeType;
            $bannerimg->img_data = $binary_full;
             $banner_image_is_save=$bannerimg->save();
        }

        $slider = collect([]);
        if ($slider_image = $request->file('slider')) {


            foreach ($slider_image as $slider_img) {
                $model3 = new Item();
                // dd($slider_img);
                $ids = collect([]);
                $img_data = file_get_contents($slider_img);
                $height = Image::make($slider_img)->height();
                $width = Image::make($slider_img)->width();
                $extension = $slider_img->extension();
                $mimeType = $slider_img->getMimeType();
                $binary_slider_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                $model3->width = $width;
                $model3->height = $height;
                $model3->extension = $extension;
                $model3->mimType = $mimeType;
                $model3->type = 'Image';
                $model3->image_type = 'Slider';
                $model3->img_data = $binary_slider_img;

                $model3->is_active = 1;
                $model3->is_approved = 1;
                // $banner_image_is_save=$model3->save();
                // if($banner_image_is_save){
                //     $id=new MongoObjectId($model3->getKey());
                //     $slider->push($id);
                // }
                // print_r($slider_img);
            }
        }

        $about_model = collect([]);
        if ($request->about) {
            //dd($request->about);
            foreach ($request->about as $key => $abt) {
                $about_array = collect();
                if ($abt["type"] == "textwithimage") {
                    if (@$abt['id'] != null) {
                        dd('gg');
                        if (@$abt['img'] != null) {
                            $model_img = Item::where('_id', $abt['id'])->first();
                            dd('hello' );
                            if ($model_img && $idata = $abt['img']) {
                                dd('he je');
                                $img_data = file_get_contents($idata);
                                $height = Image::make($idata)->height();
                                $width = Image::make($idata)->width();
                                $extension = $idata->extension();
                                $mimeType = $idata->getMimeType();
                                $binary_abt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width = $width;
                                $model_img->height = $height;
                                $model_img->extension = $extension;
                                $model_img->mimType = $mimeType;
                                $model_img->img_data = $binary_abt_img;
                                $model_img->type = 'Image';
                                $model_img->image_type = 'ContentImage'; //for content image 600*400
                                $model_img->is_active = 1;
                                $model_img->is_approved = 1;
                                $normal_image_is_save = $model_img->save();
                                $about_array->image_id = $abt['id'];
                            }
                        }
                    } else {
                        if ($img_data1 = $abt['img']) {
                            dd('hello 1');
                            $img_mdl = new Item();
                            $img_data = file_get_contents($img_data1);
                            $height = Image::make($img_data1)->height();
                            $width = Image::make($img_data1)->width();
                            $extension = $img_data1->extension();
                            $mimeType = $img_data1->getMimeType();
                            $binary_abt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $img_mdl->width = $width;
                            $img_mdl->height = $height;
                            $img_mdl->extension = $extension;
                            $img_mdl->mimType = $mimeType;
                            $img_mdl->img_data = $binary_abt_img;
                            $img_mdl->type = 'Image';
                            $img_mdl->image_type = 'ContentImage'; //for content image 600*400
                            $img_mdl->is_active = 1;
                            $img_mdl->is_approved = 1;
                            $normal_image_is_save = $img_mdl->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($img_mdl->getKey());
                            }
                            $about_array->image_id = $image_id;
                        }
                    }
                }
                $about_array->imagealignment = $abt["alignment"];
                $about_array->order = $key;
                $about_array->type = trim($abt["type"]);
                $about_array->text = trim($abt["content"]);
                $about_model->push($about_array);
                // dd($about_model);
            }
            //   dd($about_model);
        }
        $htr_model = collect([]); // how to reach 
        if ($request->htr) {
            foreach ($request->htr as $key => $htr) {
                $htr_array = collect();
                if ($htr["type"] == "textwithimage") {
                    if (@$htr['id'] != null) {
                        if (@$htr['img'] != null) {
                            $model_img = Item::where('_id', $htr['id'])->first();
                            if ($model_img && $idata = $htr['img']) {
                                $img_data = file_get_contents($idata);
                                $height = Image::make($idata)->height();
                                $width = Image::make($idata)->width();
                                $extension = $idata->extension();
                                $mimeType = $idata->getMimeType();
                                $binary_htr_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width = $width;
                                $model_img->height = $height;
                                $model_img->extension = $extension;
                                $model_img->mimType = $mimeType;
                                $model_img->img_data = $binary_htr_img;
                                $model_img->type = 'Image';
                                $model_img->image_type = 'ContentImage'; //for content image 600*400
                                $model_img->is_active = 1;
                                $model_img->is_approved = 1;
                                $normal_image_is_save = $model_img->save();
                                $htr_array->image_id = $htr['id'];
                            }
                        }
                    } else {
                        if ($img_data1 = $htr['img']) {
                            $img_mdl = new Item();
                            $img_data = file_get_contents($img_data1);
                            $height = Image::make($img_data1)->height();
                            $width = Image::make($img_data1)->width();
                            $extension = $img_data1->extension();
                            $mimeType = $img_data1->getMimeType();
                            $binary_htr_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $img_mdl->width = $width;
                            $img_mdl->height = $height;
                            $img_mdl->extension = $extension;
                            $img_mdl->mimType = $mimeType;
                            $img_mdl->img_data = $binary_htr_img;
                            $img_mdl->type = 'Image';
                            $img_mdl->image_type = 'ContentImage'; //for content image 600*400
                            $img_mdl->is_active = 1;
                            $img_mdl->is_approved = 1;
                            $normal_image_is_save = $img_mdl->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($img_mdl->getKey());
                            }
                            $htr_array->image_id = $image_id;
                        }
                    }
                }
                $htr_array->imagealignment = $htr["alignment"];
                $htr_array->order = $key;
                $htr_array->type = trim($htr["type"]);
                $htr_array->text = trim($htr["content"]);
                $htr_model->push($htr_array);
            }
            //  dd($htr_model);
        }

        $attraction_model = collect([]);
        if ($request->attraction) {
            foreach ($request->attraction as $key => $at) {
                $attraction_array = collect();
                if ($at["type"] == "textwithimage") {
                    if (@$at['id'] != null) {
                        if (@$at['img'] != null) {
                            $model_img = Item::where('_id', $at['id'])->first();
                            if ($model_img && $idata = $at['img']) {
                                $img_data = file_get_contents($idata);
                                $height = Image::make($idata)->height();
                                $width = Image::make($idata)->width();
                                $extension = $idata->extension();
                                $mimeType = $idata->getMimeType();
                                $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width = $width;
                                $model_img->height = $height;
                                $model_img->extension = $extension;
                                $model_img->mimType = $mimeType;
                                $model_img->img_data = $binary_at_img;
                                $model_img->type = 'Image';
                                $model_img->image_type = 'ContentImage'; //for content image 600*400
                                $model_img->is_active = 1;
                                $model_img->is_approved = 1;
                                $normal_image_is_save = $model_img->save();
                                $attraction_array->image_id = $at['id'];
                            }
                        }
                    } else {
                        if ($img_data1 = $at['img']) {
                            $img_mdl = new Item();
                            $img_data = file_get_contents($img_data1);
                            $height = Image::make($img_data1)->height();
                            $width = Image::make($img_data1)->width();
                            $extension = $img_data1->extension();
                            $mimeType = $img_data1->getMimeType();
                            $binary_at_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $img_mdl->width = $width;
                            $img_mdl->height = $height;
                            $img_mdl->extension = $extension;
                            $img_mdl->mimType = $mimeType;
                            $img_mdl->img_data = $binary_at_img;
                            $img_mdl->type = 'Image';
                            $img_mdl->image_type = 'ContentImage'; //for content image 600*400
                            $img_mdl->is_active = 1;
                            $img_mdl->is_approved = 1;
                            $normal_image_is_save = $img_mdl->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($img_mdl->getKey());
                            }
                            $attraction_array->image_id = $image_id;
                        }
                    }
                }
                $attraction_array->imagealignment = $at["alignment"];
                $attraction_array->order = $key;
                $attraction_array->type = trim($at["type"]);
                $attraction_array->text = trim($at["content"]);
                $attraction_model->push($attraction_array);
            }
        }

        $stay_model = collect([]);
        if ($request->stay) {
            foreach ($request->stay as $key => $st) {
                $stay_array = collect();
                if ($st["type"] == "textwithimage") {
                    if (@$st['id'] != null) {
                        if (@$st['img'] != null) {
                            $model_img = Item::where('_id', $st['id'])->first();
                            if ($model_img && $idata = $st['img']) {
                                $img_data = file_get_contents($idata);
                                $height = Image::make($idata)->height();
                                $width = Image::make($idata)->width();
                                $extension = $idata->extension();
                                $mimeType = $idata->getMimeType();
                                $binary_st_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width = $width;
                                $model_img->height = $height;
                                $model_img->extension = $extension;
                                $model_img->mimType = $mimeType;
                                $model_img->img_data = $binary_st_img;
                                $model_img->type = 'Image';
                                $model_img->image_type = 'ContentImage'; //for content image 600*400
                                $model_img->is_active = 1;
                                $model_img->is_approved = 1;
                                $normal_image_is_save = $model_img->save();
                                $stay_array->image_id = $st['id'];
                            }
                        }
                    } else {
                        if ($img_data1 = $st['img']) {
                            $img_mdl = new Item();
                            $img_data = file_get_contents($img_data1);
                            $height = Image::make($img_data1)->height();
                            $width = Image::make($img_data1)->width();
                            $extension = $img_data1->extension();
                            $mimeType = $img_data1->getMimeType();
                            $binary_st_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $img_mdl->width = $width;
                            $img_mdl->height = $height;
                            $img_mdl->extension = $extension;
                            $img_mdl->mimType = $mimeType;
                            $img_mdl->img_data = $binary_st_img;
                            $img_mdl->type = 'Image';
                            $img_mdl->image_type = 'ContentImage'; //for content image 600*400
                            $img_mdl->is_active = 1;
                            $img_mdl->is_approved = 1;
                            $normal_image_is_save = $img_mdl->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($img_mdl->getKey());
                            }
                            $stay_array->image_id = $image_id;
                        }
                    }
                }
                $stay_array->imagealignment = $st["alignment"];
                $stay_array->order = $key;
                $stay_array->type = trim($st["type"]);
                $stay_array->text = trim($st["content"]);
                $stay_model->push($stay_array);
            }
        }

        $amenties_model = collect([]);
        if ($request->amenties) {
            foreach ($request->amenties as $key => $amt) {
                $amenties_array = collect();
                if ($amt["type"] == "textwithimage") {
                    if (@$amt['id'] != null) {
                        if (@$amt['img'] != null) {
                            $model_img = Item::where('_id', $amt['id'])->first();
                            if ($model_img && $idata = $amt['img']) {
                                $img_data = file_get_contents($idata);
                                $height = Image::make($idata)->height();
                                $width = Image::make($idata)->width();
                                $extension = $idata->extension();
                                $mimeType = $idata->getMimeType();
                                $binary_amt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                                $model_img->width = $width;
                                $model_img->height = $height;
                                $model_img->extension = $extension;
                                $model_img->mimType = $mimeType;
                                $model_img->img_data = $binary_amt_img;
                                $model_img->type = 'Image';
                                $model_img->image_type = 'ContentImage'; //for content image 600*400
                                $model_img->is_active = 1;
                                $model_img->is_approved = 1;
                                $normal_image_is_save = $model_img->save();
                                $amenties_array->image_id = $amt['id'];
                            }
                        }
                    } else {
                        if ($img_data1 = $amt['img']) {
                            $img_mdl = new Item();
                            $img_data = file_get_contents($img_data1);
                            $height = Image::make($img_data1)->height();
                            $width = Image::make($img_data1)->width();
                            $extension = $img_data1->extension();
                            $mimeType = $img_data1->getMimeType();
                            $binary_amt_img = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
                            $img_mdl->width = $width;
                            $img_mdl->height = $height;
                            $img_mdl->extension = $extension;
                            $img_mdl->mimType = $mimeType;
                            $img_mdl->img_data = $binary_amt_img;
                            $img_mdl->type = 'Image';
                            $img_mdl->image_type = 'ContentImage'; //for content image 600*400
                            $img_mdl->is_active = 1;
                            $img_mdl->is_approved = 1;
                            $normal_image_is_save = $img_mdl->save();
                            if ($normal_image_is_save) {
                                $image_id = new MongoObjectId($img_mdl->getKey());
                            }
                            $amenties_array->image_id = $image_id;
                        }
                    }
                }
                $amenties_array->imagealignment = $amt["alignment"];
                $amenties_array->order = $key;
                $amenties_array->type = trim($amt["type"]);
                $amenties_array->text = trim($amt["content"]);
                $amenties_model->push($amenties_array);
            }
        }

        $someInforArr = collect([]);
        if ($request->someinfo) {
            foreach ($request->someinfo as $someinformation) {
                $some_info_array = collect();
                $some_info_array->icon = $someinformation["icon"];
                $some_info_array->key = $someinformation["key"];
                $some_info_array->val = $someinformation["val"];
                $someInforArr->push($some_info_array);
            }
        }

        $banner_model = Item::where('is_active', 1)->where('is_approved', 1)->where('_id',  $id)->first();
        // $banner_model->page_type='detail';
        // $banner_model->type='detailpage';
        // $banner_model->main_type='banner';
        $banner_model->template_id = trim($request->template_type);
        if (!empty(trim($request->slogan))) {
            $banner_model->banner_short_info = trim($request->slogan);
        }
        if (!empty(trim($request->title))) {
            $banner_model->title = trim($request->title);
        }
        if (!empty(trim($request->vUrl))) {
            $banner_model->vedio_link = trim($request->vUrl);
        }
        if (!empty(trim($request->is_popular))) {
            $banner_model->is_popular = (int)trim($request->is_popular);
        } else {
            $banner_model->is_popular = 0;
        }
        $banner_model->about_text = $about_model->all();
        $banner_model->how_to_reach = $htr_model->all();
        $banner_model->stay = $stay_model->all();
        $banner_model->attractions = $attraction_model->all();
        $banner_model->nearby_amenties = $amenties_model->all();
        $banner_model->about_tab_some_info = $someInforArr->all();

        // if(!empty(trim($request->message))){
        // $banner_model->desc=trim($request->message);
        // }

        // $banner_model->main_banner_id=new MongoObjectId($request->banner_id) ;
        // if($video_image_is_save){
        //     $banner_model->video_image=new MongoObjectId($model1->getKey()) ;
        // }
        // if($banner_image_is_save){
        //     $banner_model->banner_image=new MongoObjectId($model2->getKey()) ;

        // }
        // $banner_model->image_slider=$slider->all();


        if ($banner_model->save()) {

            $url = "http://127.0.0.1:8000/banner/details?template_id=1&id=" . $banner_model->getKey();

            return redirect("/admin/banner/list")->with('success', 'Detail Page Updated successfully ' . $url);
        }
    }
}
