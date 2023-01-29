<?php

namespace App\Http\Controllers\ResturantPanel;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function create()
    {
        return view('Resturant.Category.add_category');
    }

    public function index()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $menu_categories = MenuCategory::where("resturant_id", $resturant_id)->get();

        return view('Resturant.Category.view_categories',[
            "menu_categories" => $menu_categories,
        ]);
    }

    public function save(Request $request)
    {
        $resturant_id = Auth::user()->id ?? "1";

        if(isset($request->category_name)){
            foreach ($request->category_name as $key => $category) {
                $key++;
                $checkCategory = MenuCategory::where("menu_category_name", $category)->get();

                if(count($checkCategory) == 0){
                    MenuCategory::create([
                        "resturant_id" => $resturant_id,
                        "menu_category_name" => $category,
                    ]);
                }
            }

            Session::flash("message", "($key) Categories Created Successfully!");
            return redirect("resturant/categories");
        }
    }

    public function edit($id)
    {
        $menu_category = MenuCategory::find($id);

        return view('Resturant.Category.edit_category',[
            "menu_category" => $menu_category,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->category_id;

        $updateMenuCategory = MenuCategory::find($id);

        if($updateMenuCategory->menu_category_name != $request->menu_category_name){
            $updateMenuCategory->menu_category_name = $request->menu_category_name;
            $updateMenuCategory->update();

            Session::flash("message", "Category ID: $id Updated Successfully!");
        }else{
            Session::flash("message", "Category ID: $id Already Exist With Same Name");
        }

        return redirect("resturant/categories");
    }

    public function delete($id)
    {
        $deleteMenyCategory = MenuCategory::find($id);
        $deleteMenyCategory->delete();

        Session::flash("message", "Category ID: $id Deleted Successfully");
        return redirect()->back();
    }
}
