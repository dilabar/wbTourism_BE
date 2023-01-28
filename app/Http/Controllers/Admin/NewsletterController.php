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

class NewsletterController extends Controller
{
    //
    public function create(){
        return  view('admin/newsletter/create');
    }

    public function store(Request $request)
    {
        $rules = [
            'letter_no' => 'required',
            // 'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'letter_date' => 'required',
            'letter_subject' => 'required',
        ];
        $messages = [
            'letter_no.required' => 'The Newsletter No field is required',
            'letter_date.required' => 'The Newsletter Date field is required',
            'letter_subject.required' => 'The Newsletter Subject field is required',
        ];


        $attributes = array();

        $attributes['letter_no'] = $request->letter_no;
        $attributes['letter_pdf'] = $request->letter_pdf;
        $attributes['letter_date'] = $request->letter_date;
        $attributes['letter_subject'] = $request->letter_subject;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return redirect('admin/newsletter/create')
                ->withErrors($validator)
                ->withInput();
        }
        $newsletter_array = array();
        if (!empty($request->letter_subject)) {
            array_push($newsletter_array, $request->letter_subject);
        }
        $model1 = new Item();
        if($letter_pdf=$request->file('letter_pdf')){
            $file_data = file_get_contents($letter_pdf);
            $extension = $letter_pdf->extension();
            $mimeType=$letter_pdf->getMimeType();
            $binary_full = new MongoBinary($file_data, MongoBinary::TYPE_GENERIC);
            $model1->mimeType= $mimeType;
            $model1->extension= $extension;
            $model1->file_data=$binary_full;
            if(count($newsletter_array)>0){
                $model1->newsletter_tag=$newsletter_array;
            }
            $model1->is_active=1;
            $model1->is_approved=1;
            $letter_pdf_is_save=$model1->save();  
        }
        $model2 = new Item();
        $model2->type = 'newsletter';
        $model2->name = $request->letter_subject;
        $model2->newsletter_no = $request->letter_no;
        $model2->newsletter_date = $request->letter_date;
        $model2->is_active = 1;
        $model2->is_approved = 1;
        $model2->newsletter_pdf_obj_id = new MongoObjectId($model1->getKey());
        if ($model2->save()) {
            // return ('newsletter uploaded sucessfully');
            return redirect("/admin/newsletter/list")->with('success', 'Newsletter Uploaded successfully');
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
            $query = $model::where('type', 'newsletter');
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
                $array->name = $item->name;
                $array->newsletter_no = $item->newsletter_no;
                $array->newsletter_date = $item->newsletter_date;
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

                // $pdf_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->article_image_obj_id)->first();
                // $type = $pdf_content->mimType;
                // $pdf = 'data:' . $type . ';base64,' . base64_encode($pdf_content->img_data);
                // $array->pdf = $pdf;
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
                })->addColumn('title', function ($list) {
                    // return $list->name;
                    return str_limit($list->name, $limit =50, $end = '...');
                })->addColumn('date', function ($list) {
                    return $list->newsletter_date;
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
                ->rawColumns(['id', 'check', 'title','date', 'status', 'action'])
                ->make(true);
        }
        return view(
            'Admin/newsletter/listView',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]
        );
    }

    public function edit($id)
    {
        $details_db = Item::where('_id', $id)->first();
        // $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->where('type', 'Image')->first();
        //dd( $details_db->full_image_obj_id);
        $newsletterpdf_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->newsletter_pdf_obj_id)->first();
        // dd($newsletterpdf_content);
        $type1 = $newsletterpdf_content->mimeType;
        //dd($type1);
        $full = 'data:' . $type1 . ';base64,' . base64_encode($newsletterpdf_content->file_data);
        //   dd($details_db);
        return view('Admin/newsletter/edit', compact('details_db', 'full'));;
    }

    public function newsletterupdate(Request $request)
    {
        $rules = [
            'letter_no' => 'required',
            // 'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'letter_date' => 'required',
            'letter_subject' => 'required',
            'newsletter_id' => 'required',
        ];
        $messages = [
            'letter_no.required' => 'The Newsletter No field is required',
            'letter_date.required' => 'The Newsletter Date field is required',
            'letter_subject.required' => 'The Newsletter Subject field is required',
            'newsletter_id.required' => 'The Newsletter id field is not valid',
        ];


        $attributes = array();

        $attributes['letter_no'] = $request->letter_no;
        $attributes['letter_pdf'] = $request->letter_pdf;
        $attributes['letter_date'] = $request->letter_date;
        $attributes['letter_subject'] = $request->letter_subject;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $id = $request->newsletter_id;
        $newsletter_db = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $id)->where('type', 'newsletter')->first();
        $newsletterpdf_mdl = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $newsletter_db->newsletter_pdf_obj_id)->first();
        if ($newsletter_pdf = $request->file('letter_pdf')) {
            $file_data = file_get_contents($newsletter_pdf);
            $extension = $newsletter_pdf->extension();
            $mimeType = $newsletter_pdf->getMimeType();
            $binary_full = new MongoBinary($file_data, MongoBinary::TYPE_GENERIC);
            $newsletterpdf_mdl->extension = $extension;
            $newsletterpdf_mdl->mimType = $mimeType;
            $newsletterpdf_mdl->file_data = $binary_full;
            $article_image_is_save = $newsletterpdf_mdl->save();
        }
        if (!empty(trim($request->letter_subject))) {
            $newsletter_db->name = trim($request->letter_subject);
        }
        if (!empty(trim($request->letter_date))) {
            $newsletter_db->newsletter_date = trim($request->letter_date);
        }
        if (!empty(trim($request->letter_no))) {
            $newsletter_db->newsletter_no = trim($request->letter_no);
        }
        // $newsletter_db->reference = null;

        if ($newsletter_db->save()) {
            return redirect("/admin/newsletter/list")->with('success', 'Newsletter Updated successfully');
        }
    }
}
