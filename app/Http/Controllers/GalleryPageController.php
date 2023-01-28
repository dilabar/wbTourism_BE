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
