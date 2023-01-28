<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterPageController extends Controller
{
    //
    public function sitemap(){
        return view('footerpages/sitemap');
    }

    public function feedback(){
        return view('footerpages/feedback');
    }
}
