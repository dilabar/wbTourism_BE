<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
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
       
        if($thumbnail_image=$request->file('thumbnail_image')){
            $height = Image::make($thumbnail_image)->height();
            $width = Image::make($thumbnail_image)->width();
            $extension = $request->file('thumbnail_image')->extension();
            $filename_thumbnail= time().'.'.$extension;
            $extension = $request->file('thumbnail_image')->extension();
            $thumbnail_image-> move(Storage::disk('local')->path('upload/product/'), $filename_thumbnail);
            $data['image']= $filename_thumbnail;
            $fileContent = Storage::disk('local')->get('upload/product/'. $filename_thumbnail);  
           try{
            $metadata = array(
                'width'	=>$width,
                'height'=>$height,
                'extension'=>$extension
                );
            $objectId_thumbnail = MongoGrid::storeFile($fileContent, $filename_thumbnail,$metadata); 
            $stringID_thumbnail = (string)$objectId_thumbnail;
            //dd($stringID);
            Storage::disk('local')->delete('/upload/product/'.$filename_thumbnail);
            //unlink(storage_path('app/upload/product/'.$filename));
           }
           catch(Exception $e){
            dd('ok'.$e);
           }
           // dd($objectId);
        }
        if($full_image=$request->file('full_image')){
            $height = Image::make($full_image)->height();
            $width = Image::make($full_image)->width();
            $extension = $request->file('full_image')->extension();
            $filename_full= time().'.'.$extension;
            $extension = $request->file('full_image')->extension();
            $full_image-> move(Storage::disk('local')->path('upload/product/'), $filename_full);
            $data['image']= $filename_full;
            $fileContent = Storage::disk('local')->get('upload/product/'. $filename_full);  
           try{
            $metadata = array(
                'width'	=>$width,
                'height'=>$height,
                'extension'=>$extension
                );
            $objectId_full = MongoGrid::storeFile($fileContent, $filename_full,$metadata); 
            $stringID = (string)$objectId_full;
            //dd($stringID);
            Storage::disk('local')->delete('/upload/product/'.$filename_full);
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
        $product_model->thumbnail_image_obj_id=$objectId_thumbnail;
        $product_model->thumbnail_image_obj_id_string=$stringID_thumbnail;
        $product_model->thumbnail_file_name=$filename_thumbnail;

        $product_model->full_image_obj_id=$objectId_full;
        $product_model->full_image_obj_id_string=$stringID;
        $product_model->full_file_name=$filename_full;
        //$product_model->created_at=NOW();
        if($product_model->save()){
            dd('Product created successfully');
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
