<?php

namespace App\Http\Controllers\resturantPanel;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function index()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $banners = Banner::where("resturant_id",  $resturant_id)->get();

        return view('Resturant.Banner.view_banners',[
            "banners" => $banners,
        ]);
    }

    public function create()
    {
        return view('Resturant.Banner.add_banner');
    }

    public function store(Request $request)
    {
        $resturant_id = Auth::user()->id ?? "1";

        $createBanner = Banner::create([
            "resturant_id" => $resturant_id,
            "banner_title" => $request->banner_title,
            "banner_image" => $request->banner_image,
            "banner_expiry_date" => $request->expire_date,
        ]);

        return redirect("resturant/banners");
    }

    public function edit($id)
    {
        $editBanner = banner::find($id);

        return view('Resturant.Banner.edit_banner',[
            "editBanner" => $editBanner,
        ]);
    }

    public function update(Request $request)
    {
        $updateBanner = Banner::where("id", $request->banner_id)->first();

        $updateBanner->banner_title = $request->banner_title;
        
        if(isset($request->banner_image)){
            $updateBanner->banner_image = $request->banner_image;
        }

        if(isset($request->expire_date)){
            $updateBanner->expire_date = $request->expire_date;
        }

        $updateBanner->update();

        Session::flash("message", "Banner Updated Successfully!");
        return redirect("resturant/banners");
    }

    public function destroy($id)
    {
        $deleteBanner = banner::find($id)->delete();

        Session::flash("message", "Banner Deleted Successfully!");
        return redirect()->back();
    }
}
