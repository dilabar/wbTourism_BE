<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Books;
use App\Master;
use Illuminate\Support\Facades\Log;

class BookPageController extends Controller
{

    public function __construct()
    {
    }
    
    public function index(Request $request,$type)
    {
        $books = Books::where('type',$type)->get();
        foreach($books as $key=>$book){
            if(!empty($book->thumbnail_image_obj_id)){
                $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $book->thumbnail_image_obj_id)->where('type', 'Image')->first();
                if($img_content!=null){
                    $img_type=$img_content->mimType;
                    $bng_img = 'data:' . $img_type . ';base64,' . base64_encode($img_content->img_data); 
                     //dd($bng_img);
                    $books[$key]['thumbnail_image']=$bng_img;
                }
               
                //dd($books[$key]);
            }
            //dd($img_content->mimType);
        }
        //dd($books);
        return view('touristcorner/booklist',
        [
            'book_list'=>$books
         
        ]);
    }
    public function detail(Request $request,$slug)
    {
        $book = Books::where('name',$slug)->first();
        if(!empty($book->thumbnail_image_obj_id)){
            // dd($details_db);
            $img_content=Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $book->thumbnail_image_obj_id)->where('type', 'Image')->first();

            $img_type=$img_content->mimType;
            $bng_img = 'data:' . $img_type . ';base64,' . base64_encode($img_content->img_data); 
            $book->thumbnail_image=$bng_img;
        }
        if(!empty($book->file_data)){
            // dd($details_db);
           
            $bng_img = 'data:' . $book->mimeType . ';base64,' . base64_encode($book->file_data); 
            $book->pdf=$bng_img;
        }
       
        return view('touristcorner/book-detail',
        [
            'book_detail'=>$book
         
        ]);
    }

    public function covid_guidelines(){
        return view('touristcorner/covid_guide');
    }

    public function currency_converter(){
        return view('touristcorner/currency_converter');
    }

    public function cunsulateslist(){
        $consulate_list = Master::where('is_active',1)->where('is_approved',1)->where('master_type','consulate')->get();
        // dd($consulate_list);
        return view('touristcorner/consulatelist',
            ['consulate_list' => $consulate_list]
        );
    }
    
    public function biswa_bangla_store(){
        return view('touristcorner/bb_store');
    }

    public function travel_tips(){
        return view('touristcorner/travel_tips');
    }

    public function transport_services(){
        return view('touristcorner/transport_services');
    }

    
    public function distance_chart(){
        return view('touristcorner/distance_chart');
    }
   
   
}
