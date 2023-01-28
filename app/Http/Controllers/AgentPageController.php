<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Books;
use App\Master;

class AgentPageController extends Controller
{
    public function __construct()
    {
    }
    public function getagentlist(){
        $agentlist=Item::where('is_active', 1)->where('is_approved', 1)->where('type','agent')->get();
       
        return view('touristcorner/agentlist',
        [
            'agentlist'=> $agentlist
        ]
    );
    }
}
