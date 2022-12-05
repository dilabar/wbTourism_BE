<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Master;
use MongoGrid;
use Illuminate\Support\Facades\Config;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\Binary as MongoBinary;
use MongoDB\BSON\ObjectId as MongoObjectId;
use MongoDB\BSON\UTCDateTime as UTCDateTime;
use Validator;
use Carbon\Carbon;
class TemplateController extends Controller
{
    public function getHtml(Request $request)
    {
        $template_type=Master::where('template_id',(int) $request->id)->where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->first();
        $dataTemplates=Master::where('template_id',$request->id)->where('master_type', 'template')->where('is_active', 1)->where('is_approved', 1)->first();
        $returnHTML = view('Admin/template/'.$request->id.'/template'.$request->id,[' dataTemplates'=> $dataTemplates])->render();
        return response()->json( array('success' => true, 'gallery_visible' => $template_type->gallery_visible,'gallery_slider' => $template_type->gallery_slider,'html'=>$returnHTML) );
    }
   
   


}
