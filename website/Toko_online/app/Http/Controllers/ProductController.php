<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\products;

class ProductController extends Controller
{
    public function index () {
       $products = products::all();
        return view('products.index',compact(['products']));
     }

     public function create () {
         return view('products.create');
      }

     public function store( Request $request )
     {
        products::create($request->all());
        return redirect('/products');
     }

     public function edit($id)
     {
         $product = products::find($id);
        return view('products.edit',compact(['product']));
     }

     public function update(Request $request, $id)
     {
         $product = products::find($id);
         $product->update($request->all());
         return redirect('/products');
     }

    public function destroy($id)
     {
         $product = products::find($id);
         $product->delete();
         return redirect('/products');
     }
}
