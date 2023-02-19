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
use Illuminate\Support\Facades\Auth;
class ConsulatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        return view('Admin/consulates/create');
    }
    public function store(Request $request)
    { 
        $consulates_array=array();
        if(!empty($request->name)){
        array_push( $consulates_array,$request->name);
        }
        $model=new Master();
        $model->country_name=$request->countryname;
        $model->office_name=$request->officename;
        $model->address=$request->address;
        $model->master_type='consulate';
        $model->is_active=1;
        $model->is_approved=1;
        $model->created_by = Auth::user()->user_id;
        $model->created_by = Auth::user()->user_id;
        if($model->save()){
           // dd('Gallery uploaded successfully');
           return redirect("/admin/consulates/list")->with('success', 'Consulate Updated successfully');
        }
    }
    public function show(Request $request){
      
        $errormsg = Config::get('constants.errormsg');
        if (request()->ajax()) {
           
            $limit = (int) $request->input('length');
            $offset = (int) $request->input('start');
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
            $model = new Master();
            $query = $model::where('master_type', 'consulate');
            // dd($query);
            if (empty($serachvalue)) {
                $totalRecords = $query->count();
                $data = $query->orderBy('country_name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            } else {
                $query = $query->Where('country_name', 'like', '%' . $serachvalue . '%');
                $totalRecords = $query->count();
                $data = $query->orderBy('country_name')->offset($offset)->limit($limit)->get();
                $filterRecords = count($data);
            }

            $list = collect([]);
            $i = 1;
            foreach ($data as $item) {
                $array = collect();
                $content = collect([]);
                $document = collect([]);
                $array->id = $item->_id;
                $array->country_name=$item->country_name;
                $array->office_name=$item->office_name;
                $array->address=$item->address;
                $array->is_active = $item->is_active;
                $array->is_approved = $item->is_approved;
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
                    return $list->id;;
                })->addColumn('country_name', function ($list) {
                    return $list->country_name;
                   // return str_limit($list->name, $limit =50, $end = '...');
                })->addColumn('office_name', function ($list) {
                    return $list->office_name;
                })
                ->addColumn('address', function ($list) {
                    // return $list->address;
                    return str_limit($list->address, $limit =50, $end = '...');
                })
                ->addColumn('status', function ($list) {
                    return $list->status;
                })
                ->addColumn('action', function ($list) {
                    $action = '';
                    $edit = 'edit/';
                    if ($list->is_active == 1) {
                        $action = $action . '<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->country_name . ' slno=' . $list->slno . ' id="btnactive_' . $list->slno . '" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to InActive</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($list->is_active == 0) {
                        $action = $action . '<button cur_status=' . $list->is_active . ' action_type="1" title=' . $list->country_name . ' slno=' . $list->slno . ' id="btnactive_' . $list->slno . '" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Active</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    if ($list->is_approved == 1) {
                        $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->country_name . ' slno=' . $list->slno . ' id="btnapprove_' . $list->slno . '" class="btn btn-danger btn-modal" value=' . $list->id . '>Click to Unapprove</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    } else if ($list->is_approved == 0) {
                        $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="2" title=' . $list->country_name . ' slno=' . $list->slno . ' id="btnapprove_' . $list->slno . '" class="btn btn-primary btn-modal" value=' . $list->id . '>Click to Approve</button>&nbsp;&nbsp;&nbsp;&nbsp;';
                    }
                    $action = $action . '<a class="btn btn-outline-info" href=' . $edit . $list->id . '><i class="fas fa-pen-to-square"></i></a>&nbsp;&nbsp;';
                    $action = $action . '<button cur_status=' . $list->is_approved . ' action_type="3" title=' . $list->country_name . ' slno=' . $list->slno . ' id="btndelete_' . $list->slno . '" class="btn btn-outline-danger btn-modal" value=' . $list->id . '><i class="fas fa-trash-can"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;';


                    return $action;
                })
                ->rawColumns(['id', 'country_name','check', 'office_name','address', 'status', 'action'])
                ->make(true);
        }
        return view(
            'Admin/consulates/listView',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]);

    }

    public function edit($id)
    {
        $details_db = Master::where('_id', $id)->first();
        // dd($details_db);
        return view('Admin/consulates/edit', compact('details_db'));
    }

    public function update(Request $request){
        // dd($request);
        $rules = [
            'countryname' => 'required',
            'officename' => 'required',
            'address' => 'required',
            'consulate_id' => 'required',

        ];
        $messages = [
            'officename.required' => 'The Contry Name field is required',
            'officename.required' => 'The Office Name field is required',
            'address.required' => 'The address field is required',
            'consulate_id' => 'required',

        ];


        $attributes = array();

        $attributes['country_name'] = $request->countryname;
        $attributes['office_name'] = $request->officename;
        $attributes['address'] = $request->address;
        $attributes['consulate_id'] = $request->consulate_id;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $id = $request->consulate_id;
        $consulates_db = Master::where('is_active', 1)->where('is_approved', 1)->where('_id', $id)->first();
        $consulates_db->updated_by = Auth::user()->user_id;
        if (!empty(trim($request->countryname))) {
            $consulates_db->country_name = trim($request->countryname);
        }
        if (!empty(trim($request->officename))) {
            $consulates_db->office_name = trim($request->officename);
        }
        if (!empty(trim($request->address))) {
            $consulates_db->address = trim($request->address);
        }
        if ($consulates_db->save()) {
            return redirect("/admin/consulates/list")->with('success', 'Consulate Updated successfully');
        }
    }
    
    public function destroy($id)
    {
        dd($id);
    }
    public function delete(Request $request)
    {
        // dd($request);
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
        $attributes['id'] = 'Consulate Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
            $row = Master::where('_id', $id)->where('master_type', 'consulate')->first();
            if(empty($row)){
                return redirect("/admin/consulates/list")->with('error', ' Consulate Not Found');
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
           $accptreject_model->section_type= $row->master_type;
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
           $update_status=Master::where('_id', $id)->where('master_type', 'consulate')->update($update_arr);
           $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            return redirect("/admin/consulates/list")->with('success', 'Consulate Updated successfully');
            }
           
        }
        else {
            return redirect("/admin/consulates/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/consulates/list")->with('error', 'Consulate Id Not Found');
        }
       
    }
  
}
