<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function imageWidthHeight(Request $request)
    {
        return view('Admin/configuration/imageWidthHeight');
    }
    public function frontpage(Request $request)
    {
        //dd($request);
        $is_submit=0;
        if(isset($request->submitbtn)){
            $is_submit=1;
            //dd($is_submit);
        }
       
        return view('Admin/configuration/frontpage',
        [
            'is_submit' => $is_submit,
        ]
          );
    }
}
