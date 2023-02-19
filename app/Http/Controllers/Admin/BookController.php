<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Books;
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

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        return view('Admin/books/add');
    }
    public function create(Request $request)
    {
        return view('Admin/books/create');
    }
    public function store(Request $request)
    { 
        $book_array=array();
        if(!empty($request->name)){
        array_push( $book_array,$request->name);
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
            $model1->image_type='Book';
            if(count($book_array)>0){
            $model1->book_tag=$book_array;
            }
            $model1->img_data=$binary_thumbnail;
            $model1->is_active=1;
            $model1->is_approved=1;
            $thumbnail_image_is_save=$model1->save();           
        }
        $model2=new Books();
        if($book_pdf=$request->file('book_pdf')){
            $file_data = file_get_contents($book_pdf);
            $extension = $book_pdf->extension();
            $mimeType=$book_pdf->getMimeType();
            $binary_full = new MongoBinary($file_data, MongoBinary::TYPE_GENERIC);
            $model2->mimeType= $mimeType;
            $model2->extension= $extension;
            $model2->file_data=$binary_full;
            if(count($book_array)>0){
                $model1->book_tag=$book_array;
            }
            $model2->is_active=1;
            $model2->is_approved=1;
            $book_pdf_is_save=$model2->save();
           
        }
        // $model=new Books();
        $model2->name=$request->name;
        $model2->type=$request->type;
        $model2->is_active=1;
        $model2->is_approved=1;
        $model2->created_by = Auth::user()->user_id;
        //dd($objectId);
        $model2->thumbnail_image_obj_id=new MongoObjectId($model1->getKey()) ;
        if($model2->save()){
           // dd('Gallery uploaded successfully');
        return redirect('admin/books/list')->with('success', 'Book Uploaded successfully');
        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
    public function show(Request $request){
      
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
            $model = new Books();
            $query = $model::where('type', 'Brochure')->orWhere('type','Leaflet');
            // dd($query);
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
                $array->type = $item->type;
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
                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item->thumbnail_image_obj_id)->first();
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
                })->addColumn('type', function ($list) {
                    return $list->type;
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
                ->rawColumns(['id', 'img','check', 'title','type', 'status', 'action'])
                ->make(true);
        }
        return view(
            'Admin/books/listView',
            [
                'sessiontimeoutmessage' => $errormsg['sessiontimeOut'],
            ]);

    }

    public function edit($id)
    {
        $details_db = Books::where('_id', $id)->first();
        $bookimg_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->thumbnail_image_obj_id)->first();
        $type1 = $bookimg_content->mimType;
        $full = 'data:' . $type1 . ';base64,' . base64_encode($bookimg_content->img_data);
        $type2 = $details_db->mimeType;
        $pdf = 'data:' . $type2 . ';base64,' . base64_encode($details_db->file_data);
        return view('Admin.books.edit', compact('details_db', 'full','pdf'));
    }

    public function update(Request $request){
        $rules = [
            'name' => 'required',
            // 'full_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'type' => 'required',
        ];
        $messages = [
            'name.required' => 'The Name field is required',
            'type.required' => 'The Type field is required',
        ];


        $attributes = array();

        $attributes['name'] = $request->name;
        $attributes['type'] = $request->type;

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $id = $request->book_id;
        $book_db = Books::where('is_active', 1)->where('is_approved', 1)->where('_id', $id)->first();
        //dd( $book_db);
        $bookimg = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $book_db->thumbnail_image_obj_id)->first();
        if($book_pdf=$request->file('book_pdf')){
            $file_data = file_get_contents($book_pdf);
            $extension = $book_pdf->extension();
            $mimeType=$book_pdf->getMimeType();
            $binary_full = new MongoBinary($file_data, MongoBinary::TYPE_GENERIC);
            $book_db->mimeType= $mimeType;
            $book_db->extension= $extension;
            $book_db->file_data=$binary_full;
            if(count($book_array)>0){
                $model1->book_tag=$book_array;
            }
            $book_db->is_active=1;
            $book_db->is_approved=1;
            $book_pdf_is_save=$book_db->save(); 
        }
        if($thumbnail_image=$request->file('thumbnail_image')){
            $img_data = file_get_contents($thumbnail_image);
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $thumbnail_image->extension();
            $mimeType=$thumbnail_image->getMimeType();
            $binary_thumbnail = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $bookimg->width= $width;
            $bookimg->height= $height;
            $bookimg->extension= $extension;
            $bookimg->mimType=$mimeType;
            $bookimg->type='Image';
            $bookimg->image_type='Book';
            if(count($book_array)>0){
            $bookimg->book_tag=$book_array;
            }
            $bookimg->img_data=$binary_thumbnail;
            $bookimg->is_active=1;
            $bookimg->is_approved=1;
            $thumbnail_image_is_save=$bookimg->save();           
        }
        $book_db->updated_by = Auth::user()->user_id;
        if (!empty(trim($request->name))) {
            $book_db->name = trim($request->name);
        }
        if (!empty(trim($request->type))) {
            $book_db->type = trim($request->type);
        }
        if (!empty(trim($request->letter_no))) {
            $book_db->newsletter_no = trim($request->letter_no);
        }
        if ($book_db->save()) {
            return redirect("/admin/books/list")->with('success', 'Book Updated successfully');
        }
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
        $attributes['id'] = 'Gallery Id';
        $attributes['cur_status'] = 'Current Status';
        $attributes['action_type'] = 'Action Type';
        $validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->passes()) {
            $id=new MongoObjectId($request->id);
            $row = Item::where('_id', $id)->where('section_type', 'gallery')->where('type', 'gallery')->first();
            if(empty($row)){
                return redirect("/admin/gallery/list")->with('error', ' Gallery Not Found');
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
           $update_status=Item::where('_id', $id)->where('section_type', 'gallery')->where('type', 'gallery')->update($update_arr);
           $accpt_status=$accptreject_model->save();
           if($accpt_status &&  $update_status){
            return redirect("/admin/gallery/list")->with('success', 'Gallery Updated successfully');
            }
           
        }
        else {
            return redirect("/admin/gallery/list")->withErrors($validator);
        }
        if(empty($request->id)){
            return redirect("/admin/gallery/list")->with('error', 'Gallery Id Not Found');
        }
       
    }
  
}
