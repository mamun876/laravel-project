<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['categories']= Category:: all();
        return view('/backend/categoryList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categorycreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Category $category)
    {
        $validate = $request->validate([
            'name' => 'required|min:2',
           
        ]);
        if ($validate) {
            $category->create($request->all());
            return redirect()->route('category.list')->with('msg', 'Inserted Successfully');
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
        $data['category']=Category::find($id);
        return view ('backend.categoryedit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string  $id) 
    {
        $category= Category::find($id);
        $validate = $request->validate([
            'name' => 'required',
        ]);
        if ($validate) {
            $data=[
                'name' => $request->name,
            ];
            $category->update($data);
            return redirect()->route('category.list')->with('msg', 'Updated Successfully');
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
       $category = Category::find($id);
       $category->delete();
       return redirect()->back()->with('msg', 'Deleted Successfully');
    }
}
