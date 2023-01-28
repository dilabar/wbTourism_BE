<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class HomeStayPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function index(Request $request)
    {
        
        return view('homestay/index',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function tgcs(Request $request)
    {
        
        return view('homestay/tgcs',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function incentive_scheme(Request $request)
    {
        
        return view('homestay/incentive_scheme',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function rtsp_2021(Request $request)
    {
        
        return view('homestay/rtsp_2021',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
}
