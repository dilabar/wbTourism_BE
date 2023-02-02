<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\helpers;
class FrontPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function index(Request $request)
    {

        // banner image
        // $banner_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'banner')->where('type', 'banner')->get();
    
        // $banner_array=array();
        // foreach($banner_list_db as $banner){
        //     if($banner->thumbnail_image_obj_id){
        //         array_push( $banner_array,$banner->thumbnail_image_obj_id);
        //     }
        //     if($banner->full_image_obj_id){
        //         array_push( $banner_array,$banner->full_image_obj_id);
        //     }
     
        // }
        // $product_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'explore')->where('type', 'product')->orderBy('order')->get();
        // $product_array=array();
        // foreach($product_list_db as $p){
        //     if($p->thumbnail_image_obj_id){
        //         array_push( $product_array,$p->thumbnail_image_obj_id);
        //     }
        //     if($p->full_image_obj_id){
        //         array_push( $product_array,$p->full_image_obj_id);
        //     }
     
        // }
        // $destination_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'destination')->where('type', 'destination')->get();
        // $d_array=array();
        // foreach($destination_list_db as $d){
        //     if($d->thumbnail_image_obj_id){
        //         array_push( $d_array,$d->thumbnail_image_obj_id);
        //     }
        //     if($d->full_image_obj_id){
        //         array_push( $d_array,$d->full_image_obj_id);
        //     }
     
        // }
       
        /////////////////////..........................................
        $banner_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'banner')->where('type', 'banner')->get();
        $place_list=Item::where('type','place')->where('is_active', 1)->where('is_approved', 1)->get();

        $popular =getMostpupular();
        
        $banner_list=collect([]);
        $i=1;
        foreach($banner_list_db as $banner){
            $banner_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $banner_array->name=$banner->name;
            $banner_array->template_id=$banner->template_id;
            $banner_array->id=(string)$banner->_id;
            $banner_array->slogan=$banner->slogan;
            $banner_array->short_desc=$banner->short_desc;
            $banner_array->reference=(string) $banner->reference;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $banner_array->img=$img;
            $banner_array->slno=$i;
            $i++;
            $banner_list->push($banner_array);
        } 
        $product_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'explore')->where('type', 'product')->orderBy('order')->get();
        $product_list=collect([]);
         foreach($product_list_db as $product){
            $product_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $product_array->template_id=$product->template_id;
            $product_array->id=(string)$product->_id;
            $product_array->name=$product->name;
            $product_array->desc=$product->short_desc;
            $product_array->reference=(string) $product->reference;
            $img_content=Item::where('_id', $product->thumbnail_image_obj_id)->where('is_active', 1)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $product_array->img=$img;
            $product_array->gradient_text=$product->gradient;
            $product_list->push($product_array);
         } 
        $destination_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'destination')->where('type', 'destination')->where('visible', 'D')->get();
        $destination_list=collect([]);
        foreach($destination_list_db as $destination){
            $destination_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $destination_array->template_id=$destination->template_id;
            $destination_array->id=(string)$destination->_id;
            $destination_array->name=$destination->name;
            $destination_array->desc=$destination->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $destination->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $destination_array->img=$img;
            $destination_array->gradient_text='';
            $destination_list->push($destination_array);
        }  
        $festival_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'fest_event')->where('type', 'festival')->get();
        $festival_list=collect([]);
        foreach($festival_list_db as $festival){
            $festival_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $festival_array->name=$festival->name;
            $festival_array->desc=$festival->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $festival->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $festival_array->img=$img;
            $festival_array->gradient_text='';
            $festival_array->reference=$festival->reference;;
            $festival_list->push($festival_array);
        }    
        $event_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'fest_event')->where('type', 'event')->get();
        $event_list=collect([]);
        foreach($event_list_db as $event){
            $event_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $event_array->name=$event->name;
            $event_array->desc=$event->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $event->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $event_array->img=$img;
            $event_array->gradient_text='';
            $event_array->reference=$event->reference;;
            $event_list->push($event_array);
        }    
        // $festival_half = ceil($festival_list->count() / 2);
        // $chunks = $festival_list->chunk($festival_half);
        $section4_list_collection = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'tabs')->get();
        $section_list=collect([]);
        foreach($section4_list_collection as $section){
            $section_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $section_array->name=$section->name;
            $section_array->desc=$section->desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $section->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $section_array->thumb=$img;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $section->full_image_obj_id)->where('image_type', 'Full')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $section_array->img=$img;
            $section_array->tab_id=$section->tab_id;
            $section_list->push($section_array);
        }      
        $gallery_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'gallery')->where('type', 'gallery')->where('visible', '0')->get();
        $gallery_list=collect([]);
        foreach($gallery_list_db as $gallery){
            $gallery_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $gallery_array->name=$gallery->name;
            $gallery_array->desc=$gallery->short_desc;
            $gallery_array->reference=(string) $gallery->reference;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery->full_image_obj_id)->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $gallery_array->img=$img;
            $gallery_list->push($gallery_array);
        } 
        $testimonial_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'testimonials')->where('type', 'testimonial')->get();
        $testimonial_list=collect([]);
        foreach($testimonial_list_db as $testimonial){
            $testimonial_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $testimonial_array->name=$testimonial->name;
            $testimonial_array->desc=$testimonial->desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $testimonial->thumbnail_image_obj_id)->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $testimonial_array->img=$img;
            $testimonial_list->push($testimonial_array);
        }  
        // dd(getAttraction());
     
        return view('frontpage/index',
        [
            'banner_list' => $banner_list,
            'product_list' => $product_list,
            'destination_list' => $destination_list,
            'festival_list1' => $festival_list,
            'festival_list2' => $event_list,
            'section_list' => $section_list,
            'gallery_list' => $gallery_list,
            'testimonial_list' => $testimonial_list,
            'most_popular'=>$popular,
            'place_list'=>$place_list
        ]);
    }

    public function gallery(){
        return view('frontpage/gallery', [
            'most_popular'=>getMostpupular()
        ]);
    }

    public function tsp(Request $request){
        if($request->id){
            return view('frontpage/tspDetail', [
                'most_popular'=>getMostpupular()
            ]);
        }
        return view('frontpage/tsp', [
            'most_popular'=>getMostpupular()
        ]);
    }
    public function attraction(){
  
    }
 
}
