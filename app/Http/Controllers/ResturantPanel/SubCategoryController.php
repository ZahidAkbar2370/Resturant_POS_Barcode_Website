<?php

namespace App\Http\Controllers\ResturantPanel;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubCategoryController extends Controller
{
    public function create()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $menu_categories = MenuCategory::where("resturant_id", $resturant_id)->get();

        return view('Resturant.SubCategory.add_sub_category',[
            "menu_categories" => $menu_categories,
        ]);
    }

    public function index()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $menu_sub_categories = MenuSubCategory::where("resturant_id", $resturant_id)->with("menu_category")->get();

        return view('Resturant.SubCategory.view_sub_categories',[
            "menu_sub_categories" => $menu_sub_categories,
        ]);
    }

    public function store(Request $request)
    {
        $resturant_id = Auth::user()->id ?? "1";

        if(isset($request->sub_category_name)){
            foreach ($request->sub_category_name as $key => $sub_category) {
                $key++;
                $checkSubCategory = MenuSubCategory::where("resturant_menu_category_id",$request->category_name)->where("sub_category_name", $sub_category)->get();

                if(count($checkSubCategory) == 0){
                    MenuSubCategory::create([
                        "resturant_id" => $resturant_id,
                        "resturant_menu_category_id" => $request->category_name,
                        "sub_category_name" => $sub_category,
                    ]);
                }
            }

            Session::flash("message", "($key) Sub-Categories Created Successfully!");
            return redirect("resturant/sub-categories");
        }
    }

    public function edit($id)
    {
        $menu_sub_category = MenuSubCategory::find($id);

        return view('Resturant.SubCategory.edit_sub_category',[
            "menu_sub_category" => $menu_sub_category,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->sub_category_id;

        $updateMenuSubCategory = MenuSubCategory::find($id);

        if($updateMenuSubCategory->sub_category_name != $request->sub_category_name){
            $updateMenuSubCategory->sub_category_name = $request->sub_category_name;
            $updateMenuSubCategory->update();

            Session::flash("message", "Sub-Category ID: $id Updated Successfully!");
        }else{
            Session::flash("message", "Sub-Category ID: $id Already Exist With Same Name");
        }

        return redirect("resturant/sub-categories");
    }

    public function destory($id)
    {
        $deleteSubCategory = MenuSubCategory::find($id);
        $deleteSubCategory->delete();

        Session::flash("message", "Sub-Category ID: $id Deleted Successfully");
        return redirect()->back();
    }
}
