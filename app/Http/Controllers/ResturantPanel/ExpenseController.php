<?php

namespace App\Http\Controllers\resturantPanel;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ExpenseController extends Controller
{
    public function index()
    {
        $resturant_id = Auth::user()->id ?? "1";

        $expenses = Expense::where("resturant_id", $resturant_id)->get();

        return view('Resturant.Expense.view_expenses',[
            "expenses" => $expenses,
        ]);
    }

    public function store(Request $request)
    {
        $resturant_id = Auth::user()->id ?? "1";

        $insertExpense = Expense::create([
            "resturant_id" => $resturant_id,
            "expense_title" => $request->expense_title,
            "expense_date" => $request->expense_date,
            "description" => $request->description,
        ]);

        Session::flash("message", "Expense Created Successfully!");
        return redirect("resturant/expenses");
    }

    public function destroy($id)
    {
        $deleteExpense = Expense::find($id)->delete();

        Session::flash("message", "Expense Deleted Successfully");
        return redirect()->back();
    }
}
