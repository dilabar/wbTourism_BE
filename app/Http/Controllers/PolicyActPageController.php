<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class PolicyActPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function tourism_policy(Request $request)
    {
        
        return view('policyact/tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function tea_tourism_policy(Request $request)
    {
        
        return view('policyact/tea_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function homestay_tourism_policy(Request $request)
    {
        
        return view('policyact/homestay_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function incentive_tourism_policy(Request $request)
    {
        
        return view('policyact/incentive_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function paryatan_tourism_policy(Request $request)
    {
        
        return view('policyact/paryatan_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function recognition_tsp_tourism_policy(Request $request)
    {
        
        return view('policyact/recognition_tsp_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function tourist_guide_tourism_policy(Request $request)
    {
        
        return view('policyact/tourist_guide_tourism_policy',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
}
