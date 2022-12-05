<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use MongoGrid;
use Illuminate\Support\Facades\Storage;
use Image;
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
       
        if($thumbnai_image=$request->file('thumbnai_image')){
            $height = Image::make($thumbnai_image)->height();
            $width = Image::make($thumbnai_image)->width();
            $extension = $request->file('thumbnai_image')->extension();
            $filename= time().'.'.$extension;
            $extension = $request->file('thumbnai_image')->extension();
            $thumbnai_image-> move(Storage::disk('local')->path('upload/product/'), $filename);
            $data['image']= $filename;
            $fileContent = Storage::disk('local')->get('upload/product/'. $filename);  
           try{
            $metadata = array(
                'width'	=>$width,
                'height'=>$height,
                'extension'=>$extension
                );
            $objectId = MongoGrid::prefix('fs_product')->storeFile($fileContent, $filename,$metadata); 
            $stringID = (string)$objectId;
            dd($stringID);
            Storage::disk('local')->delete('/upload/product/'.$filename);
            //unlink(storage_path('app/upload/product/'.$filename));
           }
           catch(Exception $e){
            dd('ok'.$e);
           }
           // dd($objectId);
        }
       
        $product_model=new Product();
        $product_model->name=trim($request->name);
        $product_model->short_desc=trim($request->description);
        $product_model->desc=trim($request->message);
        $product_model->is_active=1;
        $product_model->is_approved=1;
        //dd($objectId);
        $product_model->thumbnai_image_obj_id=$stringID;
        //$product_model->created_at=NOW();
        if($product_model->save()){
            dd('Product created successfully');
        }
    
        //return redirect()->route('product/index')->with('success','Product created successfully.');
    }
    public function viewimage(Request $request)
    { 
        $objectId = new \MongoDB\BSON\ObjectId('62ecbecedca36b6ce80ffa1b');
        $content = MongoGrid::getFileContent($objectId,0);
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
