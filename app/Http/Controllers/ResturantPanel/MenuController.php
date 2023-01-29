<?php

namespace App\Http\Controllers\ResturantPanel;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuCategory;
use App\Models\MenuExtraField;
use App\Models\MenuSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function index()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $menus = Menu::where("resturant_id", $resturant_id)->get();

        return view("Resturant.Menu.view_menus",[
            "menus" => $menus,
        ]);
    }

    public function create()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $categories = MenuCategory::where("resturant_id", $resturant_id)->get();
        $sub_categories = MenuSubCategory::where("resturant_id", $resturant_id)->get();

        return view('Resturant.Menu.add_menu',[
            "categories" => $categories,
            "sub_categories" => $sub_categories,
        ]);
    }

    public function store(Request $request)
    {
        $resturant_id = Auth::user()->id ?? "1";

        $insertMenu = Menu::create([
            "resturant_id" => $resturant_id,
            "menu_category_id" => $request->menu_category,
            "menu_sub_category_id" => $request->menu_sub_category,
            "menu_name" => $request->menu_name,
            "menu_image1" => $request->menu_image_1,
            "menu_image2" => $request->menu_image_2,
            "menu_price" => $request->menu_price,
            "menu_discount_price" => $request->menu_discount_price,
            "description" => $request->short_description,
            "publication_status" => "$request->publication_status",
        ]);

        if(!empty($request->menu_extra_field_name)){
            foreach($request->menu_extra_field_name as $key => $menu_extra_field){
                MenuExtraField::create([
                    "menu_id" => $insertMenu->id,
                    "field_name" => $request->menu_extra_field_name[$key],
                    "value" => $request->menu_extra_field_value[$key],
                ]);
            }
        }

        Session::flash("message", "Menu & Extra Fields Created Successfully!");
        return redirect("resturant/menus");
    }

    public function destroy($id)
    {
        $deleteMenu = Menu::find($id)->delete();

        Session::flash("message", "Menu Deleted Successfully!");
        return redirect()->back();
    }
}
