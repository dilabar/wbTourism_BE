<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;

class GalleryPageController extends Controller
{

    public function __construct()
    {
    }

    public function media_gallery(Request $request)
    {

        return view(
            'gallery/media_gallery',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }
    public function image_gallery(Request $request)
    {

        $gallery_list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'gallery')->where('section_type','gallery')->where('page_type','home')->get();
        // dd($gallery_list_db);
        $all_gallery_image = Item::where('is_active',1)->where('is_approved',1)->where('type','gallery')->where('section_type','!=','gallery')->where('page_type','!=','home')->where('media_type','!=','1')->get();
        // dd($all_gallery_image);
        $gallery_list=collect([]);
        foreach($all_gallery_image as $gallery){
            $gallery_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $gallery_array->id=$gallery->_id;
            $gallery_array->name=$gallery->name;
            $gallery_array->desc=$gallery->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery->gallery_image_obj_id)->first();
            if(isset($img_content)){
                  $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $gallery_array->img=$img;
            }else{
                $gallery_array->img=$img; 
            }
            // dd($img_content);
          
            $gallery_list->push($gallery_array);
        } 
        // dd($gallery_list);
        return view('gallery.image_gallery',[
            'gallery_list_db' => $gallery_list_db,
            'gallery_list'=>$gallery_list
        ]);
    }
    public function image_gallery_byId(Request $request){
        $gal_cat_id = $request->id;
        $gallery_list_db = Item::where('gallery_category_id',$gal_cat_id)->where('is_active',1)->where('is_approved',1)->where('media_type','!=','1')->get();
        $gallery_list = collect([]);
        foreach($gallery_list_db as $gallery)
        {
            $gallery_array = collect();
            $content = collect([]);
            $img ='';
            $gallery_array->id=$gallery->_id;
            $gallery_array->name=$gallery->name;
            $gallery_array->desc=$gallery->short_desc;
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gallery->gallery_image_obj_id)->first();
            if(isset($img_content)){
                  $type=$img_content->mimType;
            $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data); 
            $gallery_array->img=$img;
            }else{
                $gallery_array->img=$img; 
            }
            // dd($img_content);
          
            $gallery_list->push($gallery_array);
        }
        $returnHTML = view('/gallery/api/imageView',['imageList'=> $gallery_list])->render();
        return response()->json( array('success' => true,'html'=>$returnHTML) );
    }
    public function inauguration(Request $request)
    {

        return view(
            'gallery/inauguration',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }
    public function achievement(Request $request)
    {

        return view(
            'gallery/achievement',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }
    public function videoGallery(Request $request)
    {
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
        return view(
            'gallery/video',
            [
                'gallery_detail' => $gallery_list

            ]
        );
    }
    public function videolist(Request $request,$slug)
    {
        $list_db = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'gallery')->where('gallery_category', $slug)->where('media_type','1')->get();
        $gallery_list=collect([]);
        foreach($list_db as $gallery){
            $gallery_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $gallery_array->name=$gallery->name;
            $gallery_array->src=$gallery->youtube_link;
           
            $gallery_list->push($gallery_array);
        } 
        return view(
            'gallery/video-list',
            [
                'gallery_detail' => $gallery_list,
                'title'=>$slug

            ]
        );
    }
    public function galleryList(Request $request, $slug)
    {
        if ($slug == 'district') {
            $gallery_db = Master::where([['master_type', 'District']])->orderBy('district_name')->get();
        } else {
            $gallery_db = Item::where([['type', 'gallery'], ['gallery_category', $slug]])->get();
        }
        $gallery_list = collect([]);
        if (count($gallery_db) > 0) {
            foreach ($gallery_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->name = strtolower($gitem['name'] ? $gitem['name'] : $data->name = $gitem['district_name']);
                $data->district = $gitem['district'];
                $data->slug = $gitem['name'] ? str_replace(' ','_',strtolower($gitem['name'])) : $data->slug = str_replace(' ','_',strtolower($gitem['district_name']));


                if ($gitem['gallery_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                }else if($slug == 'district'){
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'Image')->where('gallery_tag',$gitem['district_code'])->first();
                    if($content){
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    }else{
                    $data->img = '';

                    }
                   
                }
                 else {
                    $data->img = '';
                }
                $gallery_list->push($data);
            }
        }


// dd($gallery_list);

        return view(
            'gallery/gallery-list',
            [
                'gallery_detail' => $gallery_list,
                'title' => $slug
            ]
        );
    }
    public function districtGallery(Request $request,$slug){
       $slug = str_replace('_', ' ', $slug);
       
        $dist_master = Master::where([['master_type', 'District'],['district_name','like',$slug]])->first();
        $gallery_db= Item::where([['type', 'gallery'], ['district',$dist_master->district_code]])->get();
        $gallery_list = collect([]);
        if (count($gallery_db) > 0) {
            foreach ($gallery_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->name = $gitem['name'] ? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['gallery_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $gallery_list->push($data);
            }
        }
        return view(
            'gallery/district-gallery',
            [
                'gallery_detail' => $gallery_list,
                'title' =>$slug
            ]
        );

    }
}
