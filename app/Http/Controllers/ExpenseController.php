<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data['expense']=Expense::all();
       return view('backend/ExpenseList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/ExpenseCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Expense $expense)
    {
       $validate = $request->validate([
        'CategoryName' =>'required',
       ]);
       if($validate){
        $expense->create($request->all());
        return redirect()->route('expense.list')->with('msg', "inserted successfully");
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $expense = Expense::find($id);
        return view('backend/ExpenseEdit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $expense = Expense::find($id);
       $expense->update($request->all());
       return redirect()->route('expense.list')->with('msg', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
       $expense = Expense::find($id);
       $expense->delete();
       return redirect()->back()->with('msg', 'Deleted Successfully');
    }
}
