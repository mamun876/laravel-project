<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['products']=ProductModel::all();
        return view('backend.productList', $data);
    }
    
    public function delete($p_id)
   {
      $product = ProductModel::find($p_id);
      if ($product->delete()) {
         return redirect('backend.productList')->with('msg', 'Deleted Successfully');
      }

    
    }}