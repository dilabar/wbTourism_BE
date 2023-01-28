<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class AboutPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function index(Request $request)
    {
        
        return view('about/index',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function mission(Request $request)
    {
        
        return view('about/mission',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function vission(Request $request)
    {
        
        return view('about/vission',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function department_personal(Request $request)
    {
        
        return view('about/department',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
    public function organization(Request $request)
    {
        
        return view('about/organization',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }
}
