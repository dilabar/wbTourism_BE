<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class MicPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function index(Request $request)
    {
        $banner_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'banner')->where('type', 'banner')->get();
        $banner_list=collect([]);
        $i=1;
        foreach($banner_list_db as $banner){
            $banner_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $banner_array->name=$banner->name;
            $banner_array->slogan=$banner->slogan;
            $banner_array->short_desc=$banner->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $banner->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $banner_array->img=$img;
            $banner_array->slno=$i;
            $i++;
            $banner_list->push($banner_array);
        }      
        $product_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'explore')->where('type', 'product')->get();
        $product_list=collect([]);
         foreach($product_list_db as $product){
            $product_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $product_array->name=$product->name;
            $product_array->desc=$product->short_desc;
            $img_content=Item::where('_id', $product->thumbnail_image_obj_id)->where('is_active', 1)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $product_array->img=$img;
            $product_array->gradient_text=$product->gradient;
            $product_list->push($product_array);
         } 
        $destination_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'destination')->where('type', 'destination')->get();
        $destination_list=collect([]);
        foreach($destination_list_db as $destination){
            $destination_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
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
            $festival_list->push($festival_array);
        }    
        $festival_half = ceil($festival_list->count() / 2);
        $chunks = $festival_list->chunk($festival_half);
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
        $gallery_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'gallery')->where('type', 'gallery')->get();
        $gallery_list=collect([]);
        foreach($gallery_list_db as $gallery){
            $gallery_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $gallery_array->name=$gallery->name;
            $gallery_array->desc=$gallery->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $gallery_array->img=$img;
            $gallery_list->push($gallery_array);
        } 
        $testimonial_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('section_type', 'testimonial')->where('type', 'testimonial')->get();
        $testimonial_list=collect([]);
        foreach($testimonial_list_db as $testimonial){
            $testimonial_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $testimonial_array->name=$testimonial->name;
            $testimonial_array->desc=$testimonial->desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $testimonial->thumbnail_image_obj_id)->where('image_type', 'Thumbnail')->first();
            $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $testimonial_array->img=$img;
            $testimonial_list->push($testimonial_array);
        }    
        return view('frontpage/index',
        [
            'banner_list' => $banner_list,
            'product_list' => $product_list,
            'destination_list' => $destination_list,
            'festival_list1' => $chunks[0],
            'festival_list2' => $chunks[1],
            'section_list' => $section_list,
            'gallery_list' => $gallery_list,
            'testimonial_list' => $testimonial_list,
        ]);
    }
}
