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
        $btif_event_db = Item::where('type','gallery')->where('page_type','home')->where('name','Bengal Tourism Information Fair (BTIF)')->get();
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
            'heading_name' => 'Bengal Tourism Information Fair (BTIF)',
            'most_popular'=>getMostpupular(),
            'btif_event_list'=>$btif_event_list
         
        ]);
    }
    public function btifById(Request $request,$id,$name)
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
            'heading_name' => $name,
            'most_popular'=>getMostpupular(),
            'btif_event_list'=>$btif_event_list
         
        ]);
    }
    public function kolkata_christmas_festival(Request $request)
    {
        $kol_fest_db = Item::where('type','gallery')->where('page_type','home')->where('name','like','%'.'Kolkata Christmas Festival-'.'%')->get();
    //    dd($kol_fest_db);
        $kol_fest_list = collect([]);
        if (count($kol_fest_db) > 0) {
            foreach ($kol_fest_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $kol_fest_list->push($data);
            }
        }
        return view('events/kolkata_christmas_festival',
        [
            "kol_fest_list"=>$kol_fest_list
         
        ]);
    }

    public function kolkata_connect(Request $request)
    {
        $kol_connect_db = Item::where('type','gallery')->where('page_type','home')->where('name','like','%'.'Kolkata Connect-'.'%')->get();
        $kol_connect_list = collect([]);
        if (count($kol_connect_db) > 0) {
            foreach ($kol_connect_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $kol_connect_list->push($data);
            }
        }
        // dd($kol_connect_list);
        return view('events/kolkata_connect',
        [
            "kol_connect_list"=>$kol_connect_list
         
        ]);
    }

    public function destination_east(Request $request)
    {
        $dest_east_db = Item::where('type','gallery')->where('page_type','home')->where('name','like','%'.'Destination East-'.'%')->get();
        $dest_east_list = collect([]);
        if (count($dest_east_db) > 0) {
            foreach ($dest_east_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $dest_east_list->push($data);
            }
        }
        return view('events/destination_east',
        [
            'dest_east_list'=>$dest_east_list
         
        ]);
    }

    public function sub_reg_conf(Request $request)
    {
        $sub_reg_conf_db = Item::where('type','gallery')->where('page_type','home')->where('name','like','%'.'Sub-regional Conference on World Heritage'.'%')->get();
        $sub_reg_conf_list = collect([]);
        if (count($sub_reg_conf_db) > 0) {
            foreach ($sub_reg_conf_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $sub_reg_conf_list->push($data);
            }
        }
        return view('events.sub_reg_conf',
        [
            'sub_reg_conf_list' => $sub_reg_conf_list
        ]);
    }
    public function bgbs(Request $request)
    {
        $bgbs_db = Item::where('type','gallery')->where('page_type','home')->where('name','like','%'.'Bengal Global Business Summit-'.'%')->get();
        $bgbs_list = collect([]);
        if (count($bgbs_db) > 0) {
            foreach ($bgbs_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $bgbs_list->push($data);
            }
        }
        return view('events/bgbs',
        [
            'bgbs_list'=>$bgbs_list
         
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
        $oth_event_gallery_db = Item::where('type','gallery')->where('page_type','home')->where('visible','1')->get();
        $oth_event_gallery_list = collect([]);
        if (count($oth_event_gallery_db) > 0) {
            foreach ($oth_event_gallery_db as $gitem) {
                $data = collect();
                $content = collect([]);
                $document = collect([]);
                $data->id = $gitem['_id'];
                 $data->name = $gitem['name']; //? $gitem['name'] : $data->name = $gitem['district_name'];
                // $data->slug = $gitem['name'] ? str_replace(' ','_',$gitem['name']) : $data->slug = str_replace(' ','_',$gitem['district_name']);
                if ($gitem['full_image_obj_id']) {
                    $content = Item::where('is_active', 1)->where('is_approved', 1)->where('_id', $gitem['full_image_obj_id'])->where('type', 'Image')->first();
                    $mim_type = $content->mimType;
                    $document = 'data:' . $mim_type . ';base64,' . base64_encode($content->img_data);
                    $data->img = $document;
                } else {
                    $data->img = '';
                }
                $oth_event_gallery_list->push($data);
            }
        }
        return view('events/other_events_gallery',
        [
            'oth_event_gallery_list'=>$oth_event_gallery_list
         
        ]);
    }

}
