<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;
use MongoDB\BSON\ObjectId as MongoObjectId;

class DestinationPageController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
    }
    public function allDestination(Request $request)
    {
        $template_arr = Master::where('is_active', 1)->where('is_approved', 1)->where('master_type', 'template')->where('template_id', 2)->first();

        $list_db = Item::where('type', 'dest-category')->where('is_active', 1)->where('is_approved', 1)->get();
        $place_list = collect([]);
        foreach ($list_db as $place) {
            $place_array = collect();
            $content = collect([]);
            $document = collect([]);
            $img = '';
            $place_array->template_id = $place->template_id;
            $place_array->id = (string)$place->_id;
            $place_array->reference = (string) $place->reference;
            $place_array->name = $place->name ? $place->name : $place->title;
            $place_array->desc = $place->short_desc;

            $img_content = Item::where('_id', $place->thumbnail_image_obj_id)->where('is_active', 1)->where('image_type', 'Thumbnail')->first();
            if ($img_content) {
                $type = $img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
            }
            $place_array->img = $img;
            $place_list->push($place_array);
        }
        $details = collect();

        $details->name = "All Destination";
        $details->short_desc = "";
        $details->full_image_obj_id = "";
        return view(
            'destination/' . $template_arr->slug . '-details',
            [
                'most_popular' => getMostpupular(),
                'place_list' => $place_list,
                'details' => $details

            ]
        );
    }


    public function details(Request $request)
    {
        $template_arr = Master::where('is_active', 1)->where('is_approved', 1)->where('master_type', 'template')->where('template_id', (int) $request->template_id)->first();

        $id = new MongoObjectId($request->id);
        // $main_item_db= Item::where('_id', $id)->where('is_active', 1)->where('is_approved', 1)->where('type', 'destination')->first();
        $list_db = Item::where('parent_destination', $id)->where('is_active', 1)->where('is_approved', 1)->get();
        $details = Item::where('_id', $id)->where('is_active', 1)->where('is_approved', 1)->first();

        // dd($list_db);

        if (!count($list_db) > 0) {
              return view('error.404');
        }
        $place_list = collect([]);
        foreach ($list_db as $place) {
            $place_array = collect();
            $content = collect([]);
            $document = collect([]);
            $img = '';
            $place_array->template_id = $place->template_id;
            $place_array->id = (string)$place->_id;
            $place_array->reference = (string) $place->reference;
            $place_array->name = $place->name ? $place->name : $place->title;
            $place_array->desc = $place->short_desc;

            $img_content = Item::where('_id', $place->thumbnail_image_obj_id)->where('is_active', 1)->where('image_type', 'Thumbnail')->first();
            if ($img_content) {
                $type = $img_content->mimType;
                $img = 'data:' . $type . ';base64,' . base64_encode($img_content->img_data);
            }
            $place_array->img = $img;
            $place_list->push($place_array);
        }

        return view(
            'destination/' . $template_arr->slug . '-details',
            [
                'place_list' => $place_list,
                'most_popular' => getMostpupular(),
                'details' => $details
            ]
        );
    }
}
