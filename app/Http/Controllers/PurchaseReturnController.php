<?php

namespace App\Http\Controllers;

use App\Models\PurchaseReturnModel;
use Database\Seeders\PurchaseReturn;
use Illuminate\Http\Request;

class PurchaseReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $purchase_return= PurchaseReturnModel::all();
      return view('backend/PurchaseReturnList', compact('purchase_return'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/PurchaseReturnCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, PurchaseReturnModel $purchase_return)
    {
       $validate= $request->validate([
        'supplier'=>'required',
       ]);
       if($validate){
        $purchase_return->create($request->all());
       }
       return redirect()->route('purchase_return.list')->with('msg', 'inserted successfully');
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
       $purchase_return= PurchaseReturnModel::find($id);
       return view ('backend/PurchaseReturnEdit', compact('purchase_return'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $purchase_return= PurchaseReturnModel::find($id);
       $purchase_return->update($request->all());
       return redirect()->route('purchase_return.list')->with('msg', "updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $purchase_return= PurchaseReturnModel::find($id);
        $purchase_return->delete();
        return redirect()->route('purchase_return.list')->with('msg', 'deleted');
    }
}
