<?php

namespace App\Http\Controllers;
use App\Item;
use Image;

use Illuminate\Http\Request;

class NewsletterpageController extends Controller
{
    public function __construct()
    {
    }

    public function getnewsletter(){
        $newsletter=Item::where('is_active', 1)->where('is_approved', 1)->where('type', 'newsletter')->get();
        // dd( $newsletter[0]->newsletter_pdf_obj_id);
        $newsletterpdf_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $newsletter[0]->newsletter_pdf_obj_id)->first();
        //dd($newsletterpdf_content);
        $type1 = $newsletterpdf_content->mimeType;
        //dd($type1);
        $full = 'data:' . $type1 . ';base64,' . base64_encode($newsletterpdf_content->file_data);
        return view(
            'publications/newsletter',
            [
                'newsletter' => $newsletter,
                'full'=>$full 
            ]
        );

    }
    public function viewNewsLetter(Request $request,$file,$name)
    {
        $newsletterpdf_content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $file)->first();
        $type1 = $newsletterpdf_content->mimeType;
        $pdf = 'data:' . $type1 . ';base64,' . base64_encode($newsletterpdf_content->file_data);
        return view('publications.viewNewsLetter',compact('pdf','name'));
    }
}
