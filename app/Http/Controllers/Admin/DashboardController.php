<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $banner = Item::where('is_active',1)->where('is_approved',1)->where('type','banner')->count();
        $product = Item::where('is_active',1)->where('is_approved',1)->where('type','product')->count();
        $image = Item::where('is_active',1)->where('is_approved',1)->where('type','Image')->count();
        $page = Item::where('is_active',1)->where('is_approved',1)->where('type','detailpage')->count();
        $user = User::where('is_active',1)->count();
        
        return view('Admin/dashboard',[
           'banner'=>$banner,
           'product'=>$product,
           'image'=>$image,
           'page'=>$page,
           'user'=>$user,

        ]);
    }
}
