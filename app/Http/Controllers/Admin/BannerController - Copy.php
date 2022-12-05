<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use MongoGrid;
use Illuminate\Support\Facades\Storage;
use Image;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\Binary as MongoBinary;
use MongoDB\BSON\ObjectId as MongoObjectId;
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
            dd('Banner Uploaded successfully');
        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
    public function show(Request $request)
    {
        if (request()->ajax()) {
            return datatables()->of($data)
            ->setTotalRecords($totalRecords)
            ->setFilteredRecords($filterRecords)
            ->skipPaging()
            ->addColumn('check', function ($data) use ($approveBtnvisible) {

              return '<input type="checkbox"  name="chkbx" class="all_checkbox"  onclick="controlCheckBox();" value="' . $data->application_id . '">';
            })->addColumn('view', function ($data) {
              // $action = '<a href="' . route('nhmemployee.showApplicantDetails', $data->id) . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';

              $action = '<button class="btn btn-primary btn-sm ben_view_button" value=' . $data->application_id . '><i class="glyphicon glyphicon-edit"></i>View</button>';


              return $action;
            })->addColumn('id', function ($data) {
              return $data->application_id;
            })
            ->addColumn('name', function ($data) {
              return $data->getName();
            })
            ->addColumn('mobile_no', function ($data) {
              return $data->mobile_no;
            })
            ->addColumn('duare_sarkar_registration_no', function ($data) {
              return $data->duare_sarkar_registration_no;
            })
            ->addColumn('age', function ($data) {
              // return $data->age_ason_01012021;
              return $this->ageCalculate($data->dob);
            })->addColumn('ss_card_no', function ($data) {
              return $data->ss_card_no;
              // })->addColumn('gp_ward_name', function ($data) {
              //   return trim($data->gp_ward_name);

              //  })
            })
            // ->addColumn('bank_code', function ($data) {
            //   return $data->bank_code;
            // })
            ->rawColumns(['view', 'check', 'id', 'name', 'ss_card_no'])
            ->make(true);
          }
        }
        $banner_list_db = Item::where('is_active', 1)->where('section_type', 'banner')->where('type', 'banner')->get();
        $banner_list=collect([]);
        $i=1;
        foreach($banner_list_db as $banner){
            $banner_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $banner_array->name=$banner->name;
            $banner_array->slogan=$banner->slogan;
            $banner_array->short_desc=$banner->short_desc;
            $status='';
            if($banner->is_active==1){
                $status= $status .' Active';
            }
            else{
                $status= $status .' InActive';
            }
            if($banner->is_approved==1){
                $status= $status .' and Approved';
            }
            else{
                $status= $status .' and Approval Pending';
            }
            $banner_array->status=$status;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $banner_array->img=$img;
            $banner_array->slno=$i;
            $i++;
            $banner_list->push($banner_array);
        }      
        return view('Admin/banner/show',
        [
            'banner_list' => $banner_list,
        ]);        
    }
  
}
