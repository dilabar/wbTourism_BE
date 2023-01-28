<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Plan;
use DateTime;
use MongoDB\BSON\ObjectId as MongoObjectId;
class PlanYourTripPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function index(Request $request)
    {

        // dd($request);
        $id = new MongoObjectId($request->id);
        $placename=Item::where('main_place_id',$id)->where('is_active',1)->where('is_approved',1)->first();
        if(!$placename){
            $placename= Item::where('_id',$id)->where('type','detailpage')->where('page_type','detail')->where('is_active',1)->where('is_approved',1)->first();
        }
       

        if(!$placename)
        {
            return back()->withErrors(['id' => ['Your custom message here.']]);
        }
        
        $fdate = $request->datefrom;
        $tdate = $request->dateto;
        $datetime1 = new DateTime($fdate);
        
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');//now do whatever you like with $days

     
        $details=collect();
        $details->days=$days+1;
        $details->place=strtolower($placename->name);
        $details->dateto=date($request->dateto);
        $details->datefrom=date($request->datefrom);
        $details->id=$placename->_id;
        $details->banner_image=asset('assets/img/default/1920_500.png');
        if($placename->banner_image){
            $banner_image_db=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $placename->banner_image)->where('type', 'Image')->first();
            $bimage_type=$banner_image_db->mimType;
            $b_img = 'data:' . $bimage_type . ';base64,' . base64_encode($banner_image_db->img_data); 
            $details->banner_image=$b_img;
        }


        return view('planyourtrip/index',
        [
            'most_popular'=>getMostpupular(),
            'details'=>$details,

    
        ]);
    }
    public function onSubmit(Request $request)
    {
        // dd($request);
        
        $plan_table = Plan::where('is_draft',0)->first();
        if(!$plan_table){
            $plan_table=new Plan();
        }

        $plan_table->place_id=$request->detail_id;
        $plan_table->place_name=$request->place_name;
        $plan_table->accommodation_type=$request->acctype;
        $plan_table->accommodation=$request->accommodation;

        $days_model = collect([]);
        
        foreach ($request->days as $key => $d) {

            // dd($key);
            // dd($d);
            $days=collect();
            $days->accommodation=null;
            if($request->acctype =='multiple'){
                $days->accommodation=$d['accommodation'];
                
            }
            $days->attraction=$d['attraction'];
            $days->guide=$d['guide'];
            $days_model->push($days);
        }
        
        $plan_table->days =$days_model->all(); 
        $plan_table->transport=$request->transport;
        $plan_table->service=$request->service;
        

        $plan_table->dateto=$request->dateto;
        $plan_table->datefrom=$request->datefrom;
        $plan_table->is_draft=0;
        $plan_table->is_active=0;
        $plan_table->is_approved=0;
        $details=collect();

        if($request->transport =='2'){
            //1 for By Road,2 by Rail, 3 by AIR
            $data_array = array(
                [
                "id"=>1,
                "name" => "WBSTC",
                "url"=>"https://www.bus.irctc.co.in/home",
                "icon"=>"<i class='bx bx-bus' ></i>"
                ],
                [
                    "id"=>2,
                    "name" => "IRCTC",
                    "url"=>"https://www.irctc.co.in/nget/train-search",
                    "icon"=>"<i class='bx bxs-train' ></i>"
                ],
            );
        }
        else if($request->transport =='1'){
            //1 for By Road,2 by Rail, 3 by AIR
            $data_array = array(
               
                [
                    "id"=>2,
                    "name" => "IRCTC",
                    "url"=>"https://www.irctc.co.in/nget/train-search",
                    "icon"=>"<i class='bx bxs-train' ></i>"
                ],
            );
        }
        else{
            //1 for By Road,2 by Rail, 3 by AIR
            $data_array = array(
               
                [
                    "id"=>3,
                    "name" => "IRCTC",
                    "url"=>"https://www.air.irctc.co.in/",
                    "icon"=>"<i class='bx bxs-plane-take-off'></i>"
                ],
            );
        }
        $data= collect([]);
        foreach($data_array as $item){
          $b=collect();
          $b->id=$item['id'];
          $b->name=$item['name'];
          $b->url=$item['url'];
          $b->icon=$item['icon'];
          $data->push($b);
  
        };
        if($plan_table->save()){
            return view('planyourtrip/plan-overview',
            [
                'most_popular'=>getMostpupular(),
                'plan_detail'=>$plan_table,
                'transport_detail'=>$data
        
            ]);
        }
    }

    
    public function tripUpdate(Request $request, $id)
    {
        //dd($request);
        $id = new MongoObjectId($id);
        $plan_table = Plan::where('_id',$id)->first();
        $placename = Item::where('_id',$plan_table->place_id)->first();

        $details=collect();
        $details->days=$plan_table->days;
        $details->place=strtolower($placename->name);
        $details->dateto=date($plan_table->dateto);
        $details->datefrom=date($plan_table->datefrom);
        $details->id=$placename->_id;
        $details->banner_image=asset('assets/img/default/1920_500.png');
        if($placename->banner_image){
            $banner_image_db=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $placename->banner_image)->where('type', 'Image')->first();
            $bimage_type=$banner_image_db->mimType;
            $b_img = 'data:' . $bimage_type . ';base64,' . base64_encode($banner_image_db->img_data); 
            $details->banner_image=$b_img;
        }

        //  dd($details);
        // dd( $returnHTML);
        return view('planyourtrip/edit', 
        [
            'details'=>$details,
            'old_details'=>$plan_table,

        ]);
    }
}
