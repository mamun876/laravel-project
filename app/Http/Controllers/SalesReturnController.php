<?php

namespace App\Http\Controllers;

use App\Models\SalesReturnModel;
use Illuminate\Http\Request;


class SalesReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales_return = SalesReturnModel::all();
        return view('backend.SalesReturnList', compact('sales_return'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.SalesReturnCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SalesReturnModel $salesReturn)
    {
        $validate = $request->validate([
            'product_name' => 'required',
        ]);

        if ($validate) {
            $salesReturn->create($request->all());
            return redirect()->route('sales_return.list')->with('msg', 'Inserted successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Your show logic here
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salesReturn = SalesReturnModel::find($id);
        return view('backend.SalesReturnEdit', compact('salesReturn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salesReturn = SalesReturnModel::find($id);
        $salesReturn->update($request->all());
        return redirect()->route('sales_return.list')->with('msg', "updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $salesReturn = SalesReturnModel::find($id);
        $salesReturn->delete();
        return redirect()->back()->with('msg', 'Successfully Deleted');
    }
}
