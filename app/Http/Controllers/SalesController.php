<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sales::all();
        return view('backend.SalesList', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.salescreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Sales $sales)
    {
        $validate = $request->validate([
            'Date' => 'Required',
            'CustomerName' => 'Required',

        ]);
        if ($validate) {
            $sales->create($request->all());
            return redirect()->route('sales.list')->with('msg', 'Successfuly inserted');
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
        $data['data'] = Sales::find($id);
        return view('backend.salesedit', $data);
        // return view('backend/salesedit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Sales::find($id);
        $validate = $request->validate([
            'Date' => 'Required',
            'CustomerName' => 'Required',

        ]);
        if ($validate) {
            $data->update($request->all());
            return redirect()->route('sales.list')->with('msg', 'Updated inserted');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $sale = Sales::find($id);
        $sale->delete();
        return redirect()->back()->with('msg', "successfully deleted");
    }
}
