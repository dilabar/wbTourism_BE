<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Master;

class HomeStayPageController extends Controller
{

    public function __construct()
    {

    }

    public function index(Request $request)
    {

        return view(
            'homestay/index',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }
    public function home_stay_tab(Request $request)
    {
        $get_all_dist = Master::where('master_type', 'District')->where('district_status', true)->get();
        return view('homestay.homeStayTab', [
            'homestay_tab_data' => $get_all_dist
        ]);
    }
    public function dist_wise_home_stay(Request $request, $district_code)
    {
        $distWiseHomeStays = [];
        $get_all_homestays = getHomeStayTabData();
        foreach ($get_all_homestays as $homeStay) {
            if ($homeStay->district_code == $district_code) {
                $distWiseHomeStays[] = $homeStay;
            }
        }
        return view('homestay.distWisehomeStays', [
            'dist_wise_home_stay' => $distWiseHomeStays
        ]);

    }
    public function tgcs(Request $request)
    {

        return view(
            'homestay/tgcs',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }

    public function incentive_scheme(Request $request)
    {

        return view(
            'homestay/incentive_scheme',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }

    public function rtsp_2021(Request $request)
    {

        return view(
            'homestay/rtsp_2021',
            [
                'most_popular' => getMostpupular()

            ]
        );
    }
}