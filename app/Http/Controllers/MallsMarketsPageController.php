<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class MallsMarketsPageController extends Controller
{
    public function __construct()
    {
    }

    public function getmarketlist()
    {
        $marketlist = Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'mallsmakrket')->get();
        foreach ($marketlist as $key => $mlist) {
            if (!empty($mlist->market_image_obj_id)) {
                //dd($mlist->market_image_obj_id);
                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $mlist->market_image_obj_id)->where('type', 'Image')->first();
                // dd($img_content);
                if ($img_content != null) {
                    $img_type = $img_content->mimType;
                    $bng_img = 'data:' . $img_type . ';base64,' . base64_encode($img_content->img_data);
                    //dd($bng_img);
                    $marketlist[$key]['market_image'] = $bng_img;
                }
                
            }
        }
        // dd( $marketlist[$key]['market_image']);
        return view(
            'touristcorner/marketlist',
            [
                'marketlist' => $marketlist
            ]
        );
    }
}
