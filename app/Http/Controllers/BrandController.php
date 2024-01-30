<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['brands']= Brand::all();
        return view('backend/brandList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('backend/brandcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Brand $brand)
    {
        $validate = $request->validate([
            'brand_name' => 'required'
        ]);
        if($validate){
            $brand->create($request->all());
            return redirect()->route('brand.list')->with('msg', "inserted successfully");
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
      $data['brands']=Brand::find($id);
      return view('backend.brandList', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brands= Brand::find($id);
        $validate = $request->validate([
            'brand_name' => 'required | min:4'
        ]);
        if($validate){
            $data=[
                'image'=>$request->image,
                'brand_name'=>$request->band_name,
                'brand_description'=>$request->brand_description,
            ];
            $brands->update($data);
            return redirect()->route('brand.list')->with('msg', 'updated successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->back()->with('msg', 'Deleted Successfully!');
    }
}
