<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer=Customer::all();
        return view ('backend/CustomerList', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/CustomerCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Customer $customer)
    {
        $validate= $request->validate([
            'customer_name'=>'required',
        ]);
        if($validate){
            $customer->create($request->all());
        }
        return redirect()->route('customer.list')->with('msg', "inserted cuccessfully");
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
        $customer= Customer::find($id);
        return view ('backend/CustomerEdit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect()->route('customer.list')->with('msg', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $customer=Customer::find($id);
        $customer->delete();
        return redirect()->back()->with('msg', 'Deleted Successfully');
    }
}
