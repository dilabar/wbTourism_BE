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

class AgentController extends Controller
{
    public function index(){
        return view('Admin//add');

    }
    public function create(){
        return view('Admin/agent/create');

    }
    public function store(Request $request)
    { 
        
        $model1=new Item();
        $model1->type='agent';
        $model1->agent_name=$request->agentname;
        $model1->address=$request->address;
        $model1->contact_person=$request->contactperson;
        $model1->contact_no=$request->contactno;
        $model1->email=$request->email;
        $model1->is_active=1;
        $model1->is_approved=1;
        if($model1->save()){
        return ('Marketing Agent Save successfully');
        }
    }
}
