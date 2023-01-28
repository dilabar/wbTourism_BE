<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wbtdclPageController extends Controller
{

    public function __construct()
    {
       
    }
    public function organisation(Request $request)
    {
        
        return view('wbtdcl/organisation',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function bod(Request $request)
    {
        
        return view('wbtdcl/bod',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function booking_contact(Request $request){
        return view('wbtdcl/booking-contact',[
            'most_popular'=>getMostpupular()
        ]);
    }
}
