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
        $Tourism_event_db = Item::where('type','gallery')->where('name','like','1st Joint Tourism Strategy Meet, 4th Jun 2022')->get();
        $Tourism_event_list = collect([]);
        if (count($Tourism_event_db) > 0) {
            foreach ($Tourism_event_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['gallery_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $Tourism_event_list->push($data);
            }
        }
    
        return view('events/tourism_gallery',
        [
            'most_popular'=>getMostpupular(),
            'tourism_event'=>$Tourism_event_list
         
        ]);
    }

    public function btif(Request $request)
    {
        $btif_event_db = Item::where('type','gallery')->where('name','Bengal Tourism Information Fair (BTIF)')->get();
        $btif_event_list = collect([]);
        if (count($btif_event_db) > 0) {
            foreach ($btif_event_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                 $data->name = $gitem['year']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                $data->id = $gitem['_id'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $btif_event_list->push($data);
            }
        }
    
        return view('events/btif',
        [
            'most_popular'=>getMostpupular(),
            'btif_event_list'=>$btif_event_list
         
        ]);
    }
    public function btifById(Request $request,$id)
    {
        $btif_event_db = Item::where('type','gallery')->where('gallery_category_id',$id)->get();
        $btif_event_list = collect([]);
        if (count($btif_event_db) > 0) {
            foreach ($btif_event_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['gallery_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['gallery_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $btif_event_list->push($data);
            }
        }
    
        return view('events/btif_by_id',
        [
            'most_popular'=>getMostpupular(),
            'btif_event_list'=>$btif_event_list
         
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
