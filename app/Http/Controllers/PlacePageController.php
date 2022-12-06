<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;
use MongoDB\BSON\ObjectId as MongoObjectId;
class PlacePageController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
       
    }
    

    public function details(Request $request)
    {  
        $template_arr = Master::where('is_active', 1)->where('is_approved', 1)->where('master_type', 'template')->where('template_id',(int) $request->template_id)->first();
        $id=new MongoObjectId($request->id);
      
        $banner_db = Item::where('_id', $id)->where('is_active', 1)->where('is_approved', 1)->where('type', 'place')->first();
   
        $details = Item::where('main_place_id', $id)->where('is_active', 1)->where('is_approved', 1)->where('type', 'detailpage')->first();
        
        if($details){
            
        //   dd($details);
            $details_db=$details;
        }else{
            $details_db = Item::where('_id', $id)->where('is_active', 1)->where('is_approved', 1)->where('type', 'detailpage')->first();
        }
        
        if(!$details_db){
            return ("Page not found");
           }

        // dd($details_db);
        // $slider_content=collect([]);
        // if($details_db->image_slider && count($details_db->image_slider)>0){
        //     foreach($details_db->image_slider as $slider_item){
        //         $slider_array=collect();
        //         $content=collect([]);
        //         $document=collect([]);
        //         $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $slider_item)->where('type', 'Image')->first();
        //         $mim_type=$content->mimType;
        //         $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
        //         $slider_array->img=$document;
        //         $slider_content->push($slider_array);
        //     }
        // }
       
        // $details_db->slider_content=$slider_content;
      
        if(!empty($details_db->banner_image)){
            // dd($details_db);
            $img_content_banner=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->banner_image)->where('type', 'Image')->first();

            $banner_type=$img_content_banner->mimType;
            $bng_img = 'data:' . $banner_type . ';base64,' . base64_encode($img_content_banner->img_data); 
            $details_db->banner_image=$bng_img;
        }
        
        // dd($details_db);
        $about_tab_content=collect([]);
        if(!empty($details_db->about_text) && count($details_db->about_text)>0){
            $array = collect($details_db->about_text)->sortBy('order')->toArray();
            foreach($array as $about_item){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->text=$about_item['text'];
                $text_array->type=$about_item['type'];

                if($about_item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $about_item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$about_item['imagealignment'];
                }
                else{
                    $text_array->img='';
                    $text_array->imagealignment='';
                }
                $about_tab_content->push($text_array);
            }
        }
        
        $details_db->about_tab_content=$about_tab_content;
        $about_tab_some_info = collect($details_db->about_tab_some_info)->sortBy('order')->toArray();
        $details_db->about_tab_some_info=$about_tab_some_info;  
        // dd($details_db);
        $how_to_reach_tab_content=collect([]);
        if($details_db->how_to_reach && count($details_db->how_to_reach)>0){
            $array = collect($details_db->how_to_reach)->sortBy('order')->toArray();
            foreach($array as $item){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->text=$item['text'];
                $text_array->type=$item['type'];
                if($item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$item['imagealignment'];
                }
                else{
                    $text_array->img='';
                    $text_array->imagealignment='';
                }
                $how_to_reach_tab_content->push($text_array);
            }
        }
  
        $details_db->how_to_reach_tab_content=$how_to_reach_tab_content;
        $attractions_tab_content=collect([]);
        if($details_db->attractions && count($details_db->attractions)>0){
            $array = collect($details_db->attractions)->sortBy('order')->toArray();
            foreach($array as $item){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->text=$item['text'];
                $text_array->type=$item['type'];
                if($item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$item['imagealignment'];
                }
                else{
                    $text_array->img='';
                    $text_array->imagealignment='';
                }
                $attractions_tab_content->push($text_array);
            }
        }
        $details_db->attractions_tab_content=$attractions_tab_content;
        
        $stay_tab_content=collect([]);
        if($details_db->stay && count($details_db->stay)>0){
            $array = collect($details_db->stay)->sortBy('order')->toArray();
            foreach($array as $item){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->text=$item['text'];
                $text_array->type=$item['type'];
                if($item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$item['imagealignment'];
                }
                else{
                    $text_array->img='';
                    $text_array->imagealignment='';
                }
                $stay_tab_content->push($text_array);
            }
        }
        $details_db->stay_tab_content=$stay_tab_content;
        $nearby_amenties_tab_content=collect([]);
        if($details_db->nearby_amenties && count($details_db->nearby_amenties)>0){
            $array = collect($details_db->nearby_amenties)->sortBy('order')->toArray();
            foreach($array as $item){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->text=$item['text'];
                $text_array->type=$item['type'];
                if($item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$item['imagealignment'];
                }
                else{
                    $text_array->img='';
                    $text_array->imagealignment='';
                }
                $nearby_amenties_tab_content->push($text_array);
            }

        }

        $details_db->nearby_amenties_tab_content=$nearby_amenties_tab_content;  
        // dd($details_db);
        if(!empty($details_db->video_image)){
            $vedio_image_db=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->video_image)->where('type', 'Image')->first();
            $vedio_image_type=$vedio_image_db->mimType;
            $vedio_img = 'data:' . $vedio_image_type . ';base64,' . base64_encode($vedio_image_db->img_data); 
            $details_db->video_image=$vedio_img;
        }
  
        $details_db->title=$details_db->name;
        return view('place/'.$template_arr->slug.'-details',
        [
            'details' => $details_db,
            'most_popular'=>getMostpupular()
        ]);
    }
}
