<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products']=Product::all();
        return view('backend.productList', $data);
    }
    public function create()
    {
        return view('backend.productcreate');
    }

    public function store(Request $request,Product $product)
{
    // $product = Product::all();

    // // Validation rules
    //     $data = [
    //         'name' => $request->name,
    //         'sku' => $request->sku,
    //         'description' => $request->description,
    //         'price' => $request->price,
    //     ];

        // Assuming you have a Product model
        $validate = $request->validate([
            'product_name' => 'required|min:2',
            'sku' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
        ]);
    
        // If validation passes, proceed to store data
        if ($validate) {
        $product->create($request->all());

        return redirect()->route('product.list')->with('msg', 'Inserted Successfully');
        }
}
    
    public function delete($p_id)
   {
      $product = Product::find($p_id);
      $product->delete();
         return redirect()->back()->with('msg', 'Deleted Successfully!');
    }

    public function edit($id)
    {
        $data['products'] = Product::find($id);
        return view('backend.productedit',$data);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validate = $request->validate([
            'product_name' => 'required|min:2',
            'sku' => 'required',
            'price' => 'required|numeric',
        ]);
    
        // If validation passes, proceed to store data
        if ($validate) {
            $data = [
                'product_name' => $request->product_name,
                'sku' => $request->sku,
                'category' => $request->category,
                'brand' => $request->brand,
                'price' => $request->price,
                'unit' => $request->unit,
                'qty' => $request->qty,
                'created_by' => $request->created_by,
            ];
        $product->update($data);

        return redirect()->route('product.list')->with('msg', 'updated Successfully');
        }
        

    }

    
}