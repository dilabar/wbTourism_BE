<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FestivalsPageController extends Controller
{
    public function showDurgaPuja(Request $request)
    {
        $gallery_category_id = Item::where('type','gallery')->where('page_type','home')->where('name','Durga Puja')->first();
        if($gallery_category_id)
        {
            $durgapuja_image_db = Item::where('type','gallery')->where('gallery_category_id',$gallery_category_id->_id)->get();
            $durgapuja_image_list = collect([]);
            if (count($durgapuja_image_db) > 0) {
                foreach ($durgapuja_image_db as $gitem) {
                    $data = collect();
                    $content = collect([]);
                    $document = collect([]);
                    $data->name = $gitem['name']; 
                    $data->youtube_link = $gitem['youtube_link'];
                    $data->id = $gitem['_id'];
                    if ($gitem['gallery_image_obj_id']) {
                        $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    } else {
                        $data->img = '';
                    }
                    $durgapuja_image_list->push($data);
                }
            }
        }else{
            $durgapuja_image_list =collect([]);
        }
        
        return view('festivals.durga_puja',[
            'durgapuja_image_list'=> $durgapuja_image_list
        ]);
    }
    public function showChristmas(Request $request)
    {
        $gallery_category_id = Item::where('type','gallery')->where('page_type','home')->where('name','Christmas')->first();
        if($gallery_category_id)
        {
            $christmas_image_db = Item::where('type','gallery')->where('gallery_category_id',$gallery_category_id->_id)->get();
            $christmas_image_list = collect([]);
            if (count($christmas_image_db) > 0) {
                foreach ($christmas_image_db as $gitem) {
                    $data = collect();
                    $content = collect([]);
                    $document = collect([]);
                    $data->name = $gitem['name']; 
                    $data->youtube_link = $gitem['youtube_link'];
                    $data->id = $gitem['_id'];
                    if ($gitem['gallery_image_obj_id']) {
                        $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    } else {
                        $data->img = '';
                    }
                    $christmas_image_list->push($data);
                }
            }
        }else{
            $christmas_image_list = collect([]);
        }
        
        return view('festivals.christmas',[
            'christmas_image_list'=> $christmas_image_list
        ]);
    }
    public function showChounach(Request $request)
    {
        $gallery_category_id = Item::where('type','gallery')->where('page_type','home')->where('name','Chou Nach')->first();
        if($gallery_category_id)
        {
            $chounach_image_db = Item::where('type','gallery')->where('gallery_category_id',$gallery_category_id->_id)->get();
            $chounach_image_list = collect([]);
            if (count($chounach_image_db) > 0) {
                foreach ($chounach_image_db as $gitem) {
                    $data = collect();
                    $content = collect([]);
                    $document = collect([]);
                    $data->name = $gitem['name']; 
                    $data->id = $gitem['_id'];
                    $data->youtube_link = $gitem['youtube_link'];
                    if ($gitem['gallery_image_obj_id']) {
                        $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    } else {
                        $data->img = '';
                    }
                    $chounach_image_list->push($data);
                }
            }
        }else{
            $chounach_image_list = collect([]);
        }
        
        return view('festivals.chou_nach',[
            'chounach_image_list'=> $chounach_image_list
        ]);
    }
    public function showRathajatra(Request $request)
    {
        $gallery_category_id = Item::where('type','gallery')->where('page_type','home')->where('name','Rath Jatra')->first();
        if($gallery_category_id)
        {
            $rathjatra_image_db = Item::where('type','gallery')->where('gallery_category_id',$gallery_category_id->_id)->get();
            $rathjatra_image_list = collect([]);
            if (count($rathjatra_image_db) > 0) {
                foreach ($rathjatra_image_db as $gitem) {
                    $data = collect();
                    $content = collect([]);
                    $document = collect([]);
                    $data->name = $gitem['name'];
                    $data->youtube_link = $gitem['youtube_link']; 
                    $data->id = $gitem['_id'];
                    if ($gitem['gallery_image_obj_id']) {
                        $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    } else {
                        $data->img = '';
                    }
                    $rathjatra_image_list->push($data);
                }
            }
        }else{
            $rathjatra_image_list = collect([]);
        }
        return view('festivals.ratha_jatra',[
            'rathjatra_image_list'=> $rathjatra_image_list
        ]);
    }
    public function showBasntaUtshav(Request $request)
    {
        $gallery_category_id = Item::where('type','gallery')->where('page_type','home')->where('name','Bashanta Utshav')->first();
        if($gallery_category_id)
        {
            $basantautshav_image_db = Item::where('type','gallery')->where('gallery_category_id',$gallery_category_id->_id)->get();
            $basantautshav_image_list = collect([]);
            if (count($basantautshav_image_db) > 0) {
                foreach ($basantautshav_image_db as $gitem) {
                    $data = collect();
                    $content = collect([]);
                    $document = collect([]);
                    $data->name = $gitem['name']; 
                    $data->youtube_link = $gitem['youtube_link'];
                    $data->id = $gitem['_id'];
                    if ($gitem['gallery_image_obj_id']) {
                        $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                        $mim_type = $content->mimType;
                        $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                        $data->img = $document;
                    } else {
                        $data->img = '';
                    }
                    $basantautshav_image_list->push($data);
                }
            }
        }else{
            $basantautshav_image_list = collect([]);
        }
        return view('festivals.bashanta_utshav',[
            'basantautshav_image_list'=> $basantautshav_image_list
        ]);
    }
}
