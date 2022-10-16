<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {

        return view('Admin/Product/create');
        
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
        $imageName = time().'.'.$request->image->extension();  
       
        $request->image->move(public_path('images'), $imageName);

        $product = new Product;
        $product->product_name = $request->get('product_name'); 
        $product->product_code = $request->get('product_code');
        $product->price = $request->get('price');  
        $product->product_categorie = $request->get('product_categorie');
        $product->available_quantity = $request->get('available_quantity'); 
        $product->product_description = $request->get('product_description');
        $product->percentage_discount = $request->get('percentage_discountprice');  
        $product->image = $imageName;
        $product->save();

        return redirect('product/list');
    }

    public function list()
    {
        $products = Product::all();

        return view('Admin/Product/list',compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('Admin/Product/view',compact('product'));
    }

    public function delete($id)
    {
        $product = Product::find($id);

        return redirect('product/list');
    }

}
