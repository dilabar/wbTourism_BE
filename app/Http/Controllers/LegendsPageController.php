<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class LegendsPageController extends Controller
{
    public function viewLegends(Request $request)
    {
        $model = new Item();
        $getlegends_db = $model::where('type','legend')->get();
        $getlegends_list = collect([]);
        if (count($getlegends_db) > 0) {
            foreach ($getlegends_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->name = $gitem['name'];
                $data->id = $gitem['_id'];
                if ($gitem['legend_img_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['legend_img_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $getlegends_list->push($data);
            }
        }
        return view('legends.legends_view',
        [
            'legends_list'=>$getlegends_list
         
        ]);
    }
    public function viewLegendsById(Request $request,$id,$title)
    {
        $legends_view_db = Item::where('type','legend')->where('_id',$id)->first();
        $legends_view_list = collect();
        if (!empty($legends_view_db)) {
              
            
        
                $legends_view_list->name = $legends_view_db->name;
                $legends_view_list->about = $legends_view_db->about;
                // dd($legends_view_db->legend_img_obj_id);
                if ($legends_view_db->legend_img_obj_id) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $legends_view_db->legend_img_obj_id)->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $legends_view_list->img = $document;
                } else {
                    $legends_view_list->img = '';
                }
              
                // dd($legends_view_list);
        }
        return view('legends.legends_view_byId',[
            'hedding_name' => $title,
            'legend_view' => $legends_view_list 
        ]);
    }
}
