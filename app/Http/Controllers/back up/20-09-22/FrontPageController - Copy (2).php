<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Destination;
use MongoGrid;
class FrontPageController extends Controller
{
    //use SendsPasswordResetEmails;

    public function __construct()
    {
       
    }
    public function mongoid($v)
    {
    return new \MongoDB\BSON\ObjectId($v);
    }
    public function index(Request $request)
    {
        $top_ten_product = Product::where('is_active', 1)->get();
        $top_destination=  Destination::where('is_active', 1)->get();
        $i=0;
        $product_list=collect([]);
        $mongogrid1=new MongoGrid();
        foreach($top_ten_product as $product){
            $product_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $product_array->name=$product->name;
            $product_array->desc=$product->short_desc;
            $content = $mongogrid1::prefix('fs_product')->getFileContent($product->thumbnail_image_obj_id,0);
            $document = $mongogrid1::prefix('fs_product')->getFile($product->thumbnail_image_obj_id);
            $type=$document->contentType;
            $img = 'data:' . $type . ';base64,' . base64_encode($content); 
            $product_array->img=$img;
            $product_array->gradient_text='';
            $product_list->push($product_array);
            $i++;   
        }
        $i=0;
        $destination_list=collect([]);
        $mongogrid2=new MongoGrid();
        foreach($top_destination as $destination){
            $destination_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $destination_array->name=$destination->name;
            $destination_array->desc=$destination->short_desc;
            $content = $mongogrid2::prefix('fs_destination')->getFileContent($destination->thumbnail_image_obj_id,2);
            $document =$mongogrid2::prefix('fs_destination')->getFile($destination->thumbnail_image_obj_id);
            $type=$document->contentType;
            $img = 'data:' . $type . ';base64,' . base64_encode($content); 
            $destination_array->img=$img;
            $destination_list->push($destination_array);
            $i++;   
        }
        $destination_list=collect([]);
        $event_list=collect([]);
        return view('frontpage/index',
        [
            'top_ten_product' => $product_list,
            'top_destination' => $destination_list,
            'event_list' => $event_list,
        ]);
    }
}
