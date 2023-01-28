<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
class EventsPageController extends Controller
{

    public function __construct()
    {
       
    }
    
    public function tourism_gallery(Request $request)
    {
        
        return view('events/tourism_gallery',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function btif(Request $request)
    {
        
        return view('events/btif',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function kolkata_christmas_festival(Request $request)
    {
        
        return view('events/kolkata_christmas_festival',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function kolkata_connect(Request $request)
    {
        
        return view('events/kolkata_connect',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function destination_east(Request $request)
    {
        
        return view('events/destination_east',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function bgbs(Request $request)
    {
        
        return view('events/bgbs',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function events_gallery(Request $request)
    {
        
        return view('events/events_gallery',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

    public function other_events_gallery(Request $request)
    {
        
        return view('events/other_events_gallery',
        [
            'most_popular'=>getMostpupular()
         
        ]);
    }

}
