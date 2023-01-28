<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ArticlePageController extends Controller
{
    public function __construct()
    {
    }
    public function getarticle(){
        $article=Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'article')->get();
        foreach ($article as $key => $alist) {
            if (!empty($alist->article_image_obj_id)) {
                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $alist->article_image_obj_id)->where('type', 'Image')->first();
                // dd($img_content);
                if ($img_content != null) {
                    $img_type = $img_content->mimType;
                    $bng_img = 'data:' . $img_type . ';base64,' . base64_encode($img_content->img_data);
                    //dd($bng_img);
                    $article[$key]['article_image'] = $bng_img;
                }
                
            }
        }
        return view(
            'publications/article',
            [
                'article' => $article
            ]
        );
    }
}
