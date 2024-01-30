<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['quotation']=Quotation::all();
        return view('backend/QuotationList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('backend/QuotationCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Quotation $quotation)
    {
        $validate= $request->validate([
            'product_name' =>'required'
        ]);
        if($validate){
            $quotation->create($request->all());
            return redirect()->route('quotation.list')->with('msg', 'Inserted Successfully');
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
        $quotation= Quotation::find($id);
        return view('backend/QuotationEdit', compact('quotation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $quotation = Quotation::find($id);
        $quotation->update($request->all());
        return redirect()->route('quotation.list')->with('msg', "updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $quotation=Quotation::find($id);
        $quotation->delete();
        return redirect()->back()->with('msg', "deleted successfully");
    }
}
