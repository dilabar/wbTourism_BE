<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Master;
use App\AcceptRejectInfo;
use MongoGrid;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Config;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\Binary as MongoBinary;
use MongoDB\BSON\ObjectId as MongoObjectId;
use MongoDB\BSON\UTCDateTime as UTCDateTime;
use Validator;
use Carbon\Carbon;

class MallsMarketsController extends Controller
{
    public function index()
    {
        return view('Admin/mallnmarkets/add');
    }
    public function create()
    {
        return view('Admin/mallnmarkets/create');
    }

    public function store(Request $request)
    {
        $market_array = array();
        if (!empty($request->name)) {
            array_push($market_array, $request->name);
        }
        $model1 = new Item();
        if ($market_image = $request->file('market_image')) {
            $img_data = file_get_contents($market_image);
            $height = Image::make($market_image)->height();
            $width = Image::make($market_image)->width();
            $extension = $market_image->extension();
            $mimeType = $market_image->getMimeType();
            $binary_market = new MongoBinary($img_data, MongoBinary::TYPE_GENERIC);
            $model1->width = $width;
            $model1->height = $height;
            $model1->extension = $extension;
            $model1->mimType = $mimeType;
            $model1->type = 'Image';
            $model1->image_type = 'market';
            if (count($market_array) > 0) {
                $model1->market_tag = $market_array;
            }
            $model1->img_data = $binary_market;
            $model1->is_active = 1;
            $model1->is_approved = 1;
            $market_image_is_save = $model1->save();
        }
        $model2 = new Item();
        $model2->type = 'mallsmakrket';
        $model2->name = $request->name;
        $model2->address = $request->address;
        $model2->is_active = 1;
        $model2->is_approved = 1;
        $model2->market_image_obj_id = new MongoObjectId($model1->getKey());
        if ($model2->save()) {
            return ('Market Save successfully');
        }
    }
}
