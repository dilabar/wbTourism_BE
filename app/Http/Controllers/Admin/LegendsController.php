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

class LegendsController extends Controller
{
    public function create(){
        return  view('Admin/legends/create');
    }

    public function store(Request $request){
        $legends_array = array();
        if (!empty($request->name)) {
            array_push($legends_array, $request->legends_name);
        }
        $model1 = new Item();
        if ($legends_img = $request->file('legends_img')) {
            $img_data = file_get_contents($legends_img);
            $height = Image::make($legends_img)->height();
            $width = Image::make($legends_img)->width();
            $extension = $legends_img->extension();
            $mimeType = $legends_img->getMimeType();
            $binary_legend = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width = $width;
            $model1->height = $height;
            $model1->extension = $extension;
            $model1->mimType = $mimeType;
            $model1->type = 'Image';
            $model1->image_type = 'legend';
            if (count($legends_array) > 0) {
                $model1->legend_tag = $legends_array;
            }
            $model1->img_data = $binary_legend;
            $model1->is_active = 1;
            $model1->is_approved = 1;
            $legends_img_is_save = $model1->save();
        }
        $model2 = new Item();
        $model2->type = 'legend';
        $model2->name = $request->legends_name;
        $model2->about = $request->about;
        $model2->born_place = $request->born_place;
        $model2->related_post = $request->related_post;
        $model2->is_active = 1;
        $model2->is_approved = 1;
        $model2->legend_img_obj_id = new MongoObjectId($model1->getKey());
        if ($model2->save()) {
             //return ('legend uploaded sucessfully');
             return redirect("/admin/legends/list")->with('success', 'Legend Uploaded successfully');
        }

    }

    public function show(Request $request){
      //dd($request);
        $errormsg = Config::get('constants.errormsg');
        if (request()->ajax()) {
           
            $limit = (int) $request->input('length');
            $offset = (int)$request->input('start');
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
            $query = $model::where('type', 'legend');
            dd($query);
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

            $list = collect([]);
            $i = 1;
            foreach ($data as $item) {
                $array = collect();
                $content = collect([]);
                $document = collect([]);
                $array->id = $item->_id;
                $array->is_active = $item->is_active;
                $array->is_approved = $item->is_approved;
                $array->legends_name = $item->name;
                $status = '';
                if ($item->is_active == 1) {
                    $status = $status . ' Active';
                } else {
                    $status = $status . ' InActive';
                }
                if ($item->is_approved == 1) {
                    $status = $status . ' and Approved';
                } else {
                    $status = $status . ' and Approval Pending';
                }
                $array->status = $status;
                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->legend_img_obj_id)->first();
                dd($img_content);
                $type = $img_content->mimType;
                $img_data = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
                $array->img = $img_data;

                $array->slno = $i;
                $i++;
                $list->push($array);
            }
            return datatables()->of($list)
                ->setTotalRecords($totalRecords)
                ->setFilteredRecords($filterRecords)
                ->skipPaging()
                ->addColumn('check', function ($list) {

                    //return '<input type="checkbox" name="approvalcheck[]" onchange="" value="' . $list->id . '">';
                    return '';
                })->addColumn('id', function ($list) {
                    return $list->id;
                })->addColumn('img', function ($list) {
                    return '<img width="100" height="100" src="' . $list->img . '">';
                })->addColumn('title', function ($list) {
                    return $list->name;
                   // return str_limit($list->name, $limit =50, $end = '...');
                })
                ->addColumn('status', function ($list) {
                    return $list->status;
                })
                ->addColumn('action', function ($list) {
                    $action = '';
                    $edit = 'edit/';
                    if ($list->is_active == 1) {
                        $action = $action . '<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_' . $list->slno . '" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($list->is_active == 0) {
                        $action = $action . '<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->name . ' slno=' . $list->slno . ' id="btnactive_' . $list->slno . '" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    if ($list->is_approved == 1) {
                        $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_' . $list->slno . '" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($list->is_approved == 0) {
                        $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->name . ' slno=' . $list->slno . ' id="btnapprove_' . $list->slno . '" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    $action = $action . '<a class="btn btn-outline-info" href=' . $edit . $list->id . '><i class="fas fa-pen-to-square"></i></a>&nbsp;&nbsp;';
                    $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="3" title=' . $list->name . ' slno=' . $list->slno . ' id="btndelete_' . $list->slno . '" class="btn btn-outline-danger btn-modal" value=' . $list->id . '><i class="fas fa-trash-can"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;';


                    return $action;
                })
                ->rawColumns(['id', 'img','check', 'title', 'status', 'action'])
                ->make(true);
        }
        return view(
            'Admin/legends/list',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]);

    }

 
}
