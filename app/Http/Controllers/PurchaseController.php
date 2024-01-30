<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['purchase']=Purchase::all();
        return view('backend.PurchaseList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/PurchaseCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Purchase $purchase)
    {
        $validate = $request->validate([
            'SupplierName'=> 'required'
        ]);
        if($validate){
            $purchase->create($request->all());
            return redirect()->route('purchase.list')->with('msg', 'inserted successfully');
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
        $data['purchase']=Purchase::find($id);
        return view('backend.PurchaseEdit',$data );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase = Purchase::find($id);
        // $validate = $request->validate([
        //     'SupplierName'=> 'required',
        // ]);
        // if($validate){
        //     $data=[
        //         'SupplierName'=>$request->SupplierName,
        //         'Reference'=>$request->Reference,

        //     ];
        // dd($request->all());
            $purchase->update($request->all());

            return redirect()->route('purchase.list')->with('msg', 'update successfully');
        // }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
       $purchase=Purchase::find($id);
       $purchase->delete();
       return redirect()->back()->with('msg', 'successfully deleted');

    }
}
