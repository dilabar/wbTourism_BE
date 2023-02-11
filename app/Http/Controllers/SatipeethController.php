<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatipeethController extends Controller
{
    public function index(){
        return view("satipeeth/index");
    }
}
