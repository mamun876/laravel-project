<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transfer']=Transfer::all();
        return view('backend/TransferList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/TransferCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Transfer $transfer)
    {
        $validate=$request->validate([
            'from'=>'required',
        ]);
        if($validate){
            $transfer->create($request->all());
            return redirect()->route('transfer.list',)->with('msg', "successfully inserted");
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
       $transfer=Transfer::find($id);
       return view('backend/TransferEdit', compact('transfer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transfer=Transfer::find($id);
        $transfer->update($request->all());
        return redirect()->route('transfer.list')->with('msg', "updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $transfer=Transfer::find($id);
        $transfer->delete();
        return redirect()->back()->with('msg', "deleted successfully");

    }
}
