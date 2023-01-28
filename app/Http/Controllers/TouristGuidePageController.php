<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Books;
use App\Master;
use Image;
use MongoDB\BSON\ObjectId as MongoObjectId;
use MongoDB\BSON\Binary as MongoBinary;

class TouristGuidePageController extends Controller
{
    public function __construct()
    {
    }

    public function getdistlist()
    {
        $district = Master::where('master_type', 'District')->where('district_status', true)->get();

        return view(
            'touristcorner/distlisttouristguide',
            [
                'district' => $district
            ]
        );
    }
    public function distdetail($slug)
    {
        $guidelist = Master::where('type', 'guide')->where('is_active', 1)->where('is_approved', 1)->where('district_code', (int) $slug)->get();
        // dd($guidelist);
        // foreach($guidelist as $g){
        //     if(!$g->guide_image_obj_id){
                //dd($g->guide_image_obj_id);
        //     $model1 = new Item();
        //     $path =$g->photo_url;
        //     $url=str_replace('www.','',$path);
        //     $temp = tempnam(sys_get_temp_dir(), 'TMP_');  
        //     file_put_contents($temp, file_get_contents($url));
        //     $content = file_get_contents($temp);
        //     $size = getimagesize($temp);
        //     $extension = image_type_to_extension($size[2]);

        //     $height = $size[1];
        //     $width = $size[0];
           
        //     $mimeType=$size['mime'];
        //     $binary_thumbnail = new MongoBinary($content, MongoBinary::TYPE_GENERIC);
        //     $model1->width= $width;
        //     $model1->height= $height;
        //     $model1->img_data=$binary_thumbnail;
        //     $model1->extension= $extension;
        //     $model1->mimType=$mimeType;
        //     $model1->type='Image';
        //     $model1->image_type='guide';
        //         $model1->is_active=1;
        //     $model1->is_approved=1;
        //     $thumbnail_image_is_save=$model1->save();
        //     $g->guide_image_obj_id=new MongoObjectId($model1->getKey()) ;
        //     $g->save();
        //     }
          
        // }
        //dd($guidelist);
        // dd($guidelist[0]->guide_image_obj_id);
        foreach ($guidelist as $key => $guidelists) {
            if (!empty($guidelist[0]->guide_image_obj_id)) {
                $img_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $guidelists->guide_image_obj_id)->where('type', 'Image')->first();
                // dd($img_content);
                $img_type = $img_content->mimType;
                $bng_img = 'data:' . $img_type . ';base64,' . base64_encode($img_content->img_data);
                $guidelist[$key]->guide_image = $bng_img;
            }
        }
        if ($slug) {
            return view(
                'touristcorner/distdetailtouristguide',
                [
                    'guidelist' => $guidelist
                ]
            );
        }
    }
}
