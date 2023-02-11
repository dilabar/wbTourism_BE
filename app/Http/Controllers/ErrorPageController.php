<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorPageController extends Controller
{
    public function pageNotFound(Request $request)
    {
        return view('error.404');
    }
}
