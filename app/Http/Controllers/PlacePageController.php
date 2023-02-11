<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;
use MongoDB\BSON\ObjectId as MongoObjectId;
use \Cache;
class PlacePageController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
       
    }
    

    public function details(Request $request)
    {  
        $template_arr = Master::where('is_active', 1)->where('is_approved', 1)->where('master_type', 'template')->where('template_id',(int) $request->template_id)->first();
        $cacheKey ="detailpage_{$request->template_id}_id_{$request->id}";
        $cacheKey1 ="releted_destination_{$request->template_id}_id_{$request->id}";

    if (Cache::has($cacheKey)) {
        // $details=collect([]);
        // $releted_destination=collect([]);
        $details_db =Cache::get($cacheKey);
        if(Cache::has($cacheKey1)){
            $releted_destination =Cache::get($cacheKey1);
        }
        
        return view('place/'.$template_arr->slug.'-details',
        [
            'details' => $details_db,
            'releted_destination' => $releted_destination,
           
           
        ]);
    }
       
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
            return view('error.404');
           }

        $releted_destination =collect([]);
        if(!empty($details_db->main_place_id)){
            $place = Item::where('_id', $details_db->main_place_id)->where('is_active', 1)->where('is_approved', 1)->where('type', 'place')->first();
            if(!empty($place)){
                $place_list = Item::where('parent_destination', $place->parent_destination)->where('is_active', 1)->where('is_approved', 1)->where('type', 'place')->where('_id','!=',$details_db->main_place_id)->offset(0)->limit(9)->get();
                foreach($place_list as $place_item){
                            $place_array=collect();
                            $content=collect([]);
                            $document=collect([]);
                            $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $place_item->thumbnail_image_obj_id)->where('type', 'Image')->first();
                            if($content){
                                $mim_type=$content->mimType;
                                $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                                $place_array->img=$document;
                            }else{
                                $place_array->img='';
                            }
                            $place_array->name=$place_item->name;
                            $place_array->district_code=$place_item->district_code ? $place_item->district_code :'';
                            $place_array->template_id=$place_item->template_id;
                            $place_array->id=$place_item->_id;
                            if($place_item->_id == '63da580b171e967049012c2a'){
                                $place_array->url='/legends-view';
                            }else if($place_item->template_id == 1){
                                $page_id=($place_item->reference) ? $place_item->reference:$place_item->_id;
                                $place_array->url='/place/details?template_id=1&id='.$page_id; 
                   
                            }
                            else{
                                $place_array->url='/destination/details?template_id=2&id='.$place_item->_id;

                            }
                            $releted_destination->push($place_array);
                        }
            }
        }
        // $slider_content=collect([]);
        //     $img_list = Item::where('is_active', 1)->where('is_approved', 1)->whereIn('tags', [$details_db->name])->where('type', 'Image')->get();
   
        //     foreach($img_list  as $slider_item){
        //         $slider_array=collect();
        //         $content=collect([]);
        //         $document=collect([]);
        //         $mim_type=$slider_item->mimType;
        //         $document = 'data:' . $mim_type . ';base64,' . base64_encode($slider_item->img_data); 
        //         $slider_array->img=$document;
            
        //         $slider_content->push($slider_array);
        //     }
        
       
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
            $array = collect($details_db->attractions)->sortBy('-order')->toArray();//->slice(0,5)
           
            foreach($array as $atritem){
                $text_array=collect();
                $content=collect([]);
                $document=collect([]);
                $text_array->name=strtolower($atritem['name'] ? $atritem['name']:'');
                $text_array->text=$atritem['text'];
                $text_array->type=$atritem['type'];
                $text_array->how_to_reach=@$atritem['how_to_reach'] ? $atritem['how_to_reach'] :'';
                $text_array->popular= @$atritem['is_popular'] ? $atritem['is_popular'] :'0';
                if(isset($atritem['image_id']) && $atritem['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $atritem['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $text_array->img=$document;
                    $text_array->imagealignment=$atritem['imagealignment'];
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

        
        
        // dd($details_db);
        if(!empty($details_db->video_image)){
            $vedio_image_db=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $details_db->video_image)->where('type', 'Image')->first();
            $vedio_image_type=$vedio_image_db->mimType;
            $vedio_img = 'data:' . $vedio_image_type . ';base64,' . base64_encode($vedio_image_db->img_data); 
            $details_db->video_image=$vedio_img;
        }
        $popular_place=collect([]);
        if($details_db->attractions && count($details_db->attractions)>0){
            $array = collect($details_db->attractions)->where('is_popular',1)->sortBy('-order')->slice(0,3)->toArray();
          
            foreach($array as $p_item){
                $p_array=collect();
                $content=collect([]);
                $document=collect([]);
                $p_array->name=strtolower($p_item['name'] ? $p_item['name']:'');
            
                $p_array->popular= @$p_item['is_popular'] ? $p_item['is_popular'] :'0';
                if(isset($p_item['image_id']) && $p_item['type']=='textwithimage'){
                    $content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $p_item['image_id'])->where('type', 'Image')->first();
                    $mim_type=$content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data); 
                    $p_array->img=$document;
                    $p_array->imagealignment=$p_item['imagealignment'];
                }
                else{
                    $p_array->img='';
                
                }
                $popular_place->push($p_array);
            }
        }
        $details_db->popular_place=$popular_place;
        $details_db->title=$details_db->name;
        // dd($details_db);
        Cache::forever("detailpage_{$request->template_id}_id_{$request->id}", $details_db);
        Cache::forever("releted_destination_{$request->template_id}_id_{$request->id}", $releted_destination);
        return view('place/'.$template_arr->slug.'-details',
        [
            'details' => $details_db,
            'releted_destination' => $releted_destination,
          
           
        ]);
    }
}
