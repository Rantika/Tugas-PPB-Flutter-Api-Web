<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class ProductApiController extends Controller
{
    public function index()
    {
        $product = products::all();
        return response()->json(['mesege'=>'Succces', 'data'=> $product]);
    }

    public function show($id)
    {
        $product = products::find($id);
        return response()->json(['mesege'=>'Success','data'=>$product]);
    }

    public function store(Request $request)
    {
       $product = products::create($request->all());
        return response()->json(['mesege'=>'Success','data'=>$product]);
    }

    public function update(Request $request, $id)
     {
         $product = products::find($id);
         $product->update($request->all());
         return response()->json(['mesege'=>'Success','data'=>$product]);
     }

     public function destroy($id)
     {
         $product = products::find($id);
         $product->delete();
         return response()->json(['mesege'=>'Success','data'=>null]);
     }

}
