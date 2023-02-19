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
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        return  view('admin/article/create');
    }

    public function store(Request $request)
    {
        // dd($request);

        $rules = [
            'title' => 'required',
            // 'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'date' => 'required',
            'shortdescription' => 'required',
        ];
        $messages = [
            'title.required' => 'The Title field is required',
            'date.required' => 'The date field is required',
            'shortdescription.required' => 'The Short description field is required',
        ];


        $attributes = array();

        $attributes['title'] = $request->title;
        $attributes['article_image'] = $request->article_image;
        $attributes['date'] = $request->date;
        $attributes['short_description'] = $request->shortdescription;
        $attributes['making'] = $request->making;
        $attributes['article_id'] = $request->article_id;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect('admin/article/create')
                ->withErrors($validator)
                ->withInput();
        }
        $article_array = array();
        if (!empty($request->name)) {
            array_push($article_array, $request->name);
        }
        $model1 = new Item();
        if ($article_image = $request->file('article_image')) {
            $img_data = file_get_contents($article_image);
            $height = Image::make($article_image)->height();
            $width = Image::make($article_image)->width();
            $extension = $article_image->extension();
            $mimeType = $article_image->getMimeType();
            $binary_market = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width = $width;
            $model1->height = $height;
            $model1->extension = $extension;
            $model1->mimType = $mimeType;
            $model1->type = 'Image';
            $model1->image_type = 'article';
            if (count($article_array) > 0) {
                $model1->market_tag = $article_array;
            }
            $model1->img_data = $binary_market;
            $model1->is_active = 1;
            $model1->is_approved = 1;
            $model1->created_by = Auth::user()->user_id;
            $model1->updated_by = Auth::user()->user_id;
            $article_image_is_save = $model1->save();
        }
        $model2 = new Item();
        $model2->type = 'article';
        $model2->name = $request->title;
        $model2->short_description = $request->shortdescription;
        $model2->date = $request->date;
        $model2->making = $request->making;
        $model2->category = $request->category;
        $model2->is_active = 1;
        $model2->is_approved = 1;
        $model2->created_by = Auth::user()->user_id;
        $model2->updated_by = Auth::user()->user_id;
        $model2->article_image_obj_id = new MongoObjectId($model1->getKey());
        if ($model2->save()) {
            return redirect("/admin/article/list")->with('success', 'Artilce Uploaded successfully');
        }
    }

    public function show(Request $request)
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
            $query = $model::where('type', 'article');
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
                $img = '';
                $array->id = $item->_id;
                $array->is_active = $item->is_active;
                $array->is_approved = $item->is_approved;
                $array->name = $item->name;
                $array->short_description = $item->short_desc;
                $array->date = $item->date;
                $array->making = $item->making;
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

                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->article_image_obj_id)->first();
                $type = $img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
                $array->img = $img;
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
                ->rawColumns(['id', 'img', 'check', 'title', 'status', 'action'])
                ->make(true);
        }
        return view(
            'Admin/article/listView',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]
        );
    }

    public function delete(Request $request)
    {
        $cur_time = Carbon::now()->setTimezone('Asia/Kolkata');;
        $cur_time = $cur_time->format('Y-m-d H:i:s');
        $cur_time_mongo = new UTCDateTime(strtotime($cur_time) * 1000);
        $user_id = Auth::user()->user_id;
        $rules = [
            'id' => 'required',
            'cur_status' => 'required|integer|in:0,1',
            'action_type' => 'required|integer|in:1,2,3'
        ];
        $attributes = array();
        $messages = array();
        $attributes['id'] = 'Article Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id = new MongoObjectId($request->id);

            $row = Item::where('_id', $id)->where('type', 'article')->first();
            if (empty($row)) {
                return redirect("/admin/article/list")->with('error', ' Article Not Found');
            }
            $msg = "Update";

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
            if ($request->action_type == 3) {
                $col = 'is_delete';
                $update_code = 1;
                $msg = "Delete";
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
            $update_status = Item::where('_id', $id)->where('type', 'article')->update($update_arr);
            $accpt_status = $accptreject_model->save();
            if ($request->action_type == 3) {
                $update_status = Item::where('_id', $id)->delete();
            } else {
                $update_status = Item::where('_id', $id)->where('type', 'article')->update($update_arr);
            }
            if ($accpt_status &&  $update_status) {
                return redirect("/admin/article/list")->with('success', 'Article '. $msg .' successfully');
            }
        } else {
            return redirect("/admin/article/list")->withErrors($validator);
        }
        if (empty($request->id)) {
            return redirect("/admin/article/list")->with('error', 'Article Id Not Found');
        }
    }

    public function edit($id)
    {
        $details_db = Item::where('_id', $id)->first();
        // $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->where('type', 'Image')->first();
        //dd( $details_db->full_image_obj_id);
        $articleimg_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->article_image_obj_id)->first();
        // dd($fullimg_content);
        // $type = $img_content->mimType;
        $type1 = $articleimg_content->mimType;
        // $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
        $full = 'data:' . $type1 . ';base64,' . base64_encode($articleimg_content->img_data);
        //   dd($details_db);
        return view('Admin/article/edit', compact('details_db', 'full'));;
    }

    public function articleupdate(Request $request)
    {
        //dd($request);
        $rules = [
            'title' => 'required',
            'date' => 'required',
            'shortdescription' => 'required',
            'article_id' => 'required',
        ];
        $messages = [
            'title.required' => 'The Title field is required',
            'date.required' => 'The date field is required',
            'shortdescription.required' => 'The Short description field is required',
            'article_id.required' => 'The Article id field is not valid',
        ];


        $attributes = array();

        $attributes['title'] = $request->title;
        $attributes['article_image'] = $request->article_image;
        $attributes['date'] = $request->date;
        $attributes['short_description'] = $request->shortdescription;
        $attributes['making'] = $request->making;
        $attributes['article_id'] = $request->article_id;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $id = $request->article_id;
        $article_db = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $id)->where('type', 'article')->first();
        $articleimg_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $article_db->article_image_obj_id)->where('image_type', 'article')->first();
        if ($article_image = $request->file('article_image')) {
            $img_data = file_get_contents($article_image);
            $height = Image::make($article_image)->height();
            $width = Image::make($article_image)->width();
            $extension = $article_image->extension();
            $mimeType = $article_image->getMimeType();
            $binary_full = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $articleimg_mdl->width = $width;
            $articleimg_mdl->height = $height;
            $articleimg_mdl->extension = $extension;
            $articleimg_mdl->mimType = $mimeType;
            $articleimg_mdl->img_data = $binary_full;
            $articleimg_mdl->updated_by = Auth::user()->user_id;
            $article_image_is_save = $articleimg_mdl->save();
        }
        if (!empty(trim($request->title))) {
            $article_db->name = trim($request->title);
        }
        if (!empty(trim($request->date))) {
            $article_db->date = trim($request->date);
        }
        if (!empty(trim($request->shortdescription))) {
            $article_db->short_description = trim($request->shortdescription);
        }
        if (!empty(trim($request->making))) {
            $article_db->making = trim($request->making);
        }
        // $article_db->reference = null;
        $article_db->updated_by = Auth::user()->user_id;
        if ($article_db->save()) {
            return redirect("/admin/article/list")->with('success', 'Article Updated successfully');
        }
    }
}
