<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use MongoGrid;
use Illuminate\Support\Facades\Storage;
use Image;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\BSON\Binary as PP;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        return view('Admin/product/add');
    }
    public function create(Request $request)
    {
        return view('Admin/product/create');
    }
    public function store(Request $request)
    { 
        $model=new Item();
    
        if($thumbnail_image=$request->file('thumbnail_image')){
            $image_file = $request->file('thumbnail_image');
            $img_data = file_get_contents($image_file);
            $binary = new PP($img_data, PP::TYPE_GENERIC);
            dd( $binary);
           
        }
       
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
    public function viewimage(Request $request)
    { 
        $objectId = new \MongoDB\BSON\ObjectId('62ecf7b1dca36b6ce80ffa4c');
        $content = MongoGrid::prefix('fs_destination')->getFileContent($objectId,0);
        //$img = 'data:image/' . $type . ';base64,' . base64_encode($content); 
         $type='image/jpeg';
         $img = 'data:image/' . $type . ';base64,' . base64_encode($content); 

        //dd(base64_encode($content));
        return view('Admin/product/viewimage',
        [
            'image_content' => $img,
        ]);
        
    }
  
}
