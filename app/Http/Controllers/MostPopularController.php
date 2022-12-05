<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;
use MongoDB\BSON\ObjectId as MongoObjectId;
class MostPopularController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
       
    }
    

    public function details(Request $request)
    {  
        $id=new MongoObjectId($request->id);
        $popular_list=Item::where('is_popular',1)->where('page_type','detail')->get();
        $popular_detail=Item::where('is_popular',1)->where('page_type','detail')->where('_id',$id)->first();
       
        return view('mostPopular/most-popular',
        [
            'popular_details' => $popular_detail,
            'most_popular' => $popular_list,
            'title'=>$popular_detail->name

        ]);
    }
}
