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

    public function index(Request $request)
    {
        $top_ten_product = Product::where('is_active', 1)->get();
        $top_destination=  Destination::where('is_active', 1)->get();
        $event_list=collect([]);
        $i=0;
        $product_list=collect([]);
        foreach($top_ten_product as $product){
            $product_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $product_array->name=$product->name;
            $product_array->desc=$product->short_desc;
            $objectId = new \MongoDB\BSON\ObjectId($product->thumbnai_image_obj_id);
            $content = MongoGrid::prefix('fs_product')->getFileContent($objectId,0);
            $document = MongoGrid::prefix('fs_product')->getFile($objectId);
            $type=$document->contentType;
            $img = 'data:' . $type . ';base64,' . base64_encode($content); 
            //$type='image/jpeg';
            //$img = 'data:image/' . $type . ';base64,' . base64_encode($content); 
            $product_array->img=$img;
            $product_array->gradient_text='';
            $product_list->push($product_array);
            $i++;   
        }
        $destination_list=collect([]);
        $i=0;
        //dd( $top_destination);
        foreach($top_destination as $destination){
            $destination_array=collect();
            $content=collect([]);
            $document=collect([]);
            $img ='';
            $destination_array->name=$destination->name;
            $destination_array->desc=$destination->short_desc;
            //dd($destination->thumbnai_image_obj_id);
            $objectId = new \MongoDB\BSON\ObjectId($destination->thumbnai_image_obj_id);
            $content = MongoGrid::prefix('fs_destination')->getFileContent($objectId,0);
            $document = MongoGrid::prefix('fs_destination')->getFile($objectId);
            $type=$document->contentType;
            $img = 'data:image/:' . $type . ';base64,' . base64_encode($content); 
            //$type='image/jpeg';
            //$img = 'data:image/' . $type . ';base64,' . base64_encode($content); 
            $destination_array->img=$img;
            $destination_list->push($destination_array);
            $i++;   
        }
        dd($destination_list);
        return view('frontpage/index',
        [
            'top_ten_product' => $product_list,
            'top_destination' => $destination_list,
            'event_list' => $event_list,
        ]);
       
    }
}
