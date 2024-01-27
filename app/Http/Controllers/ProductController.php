<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = ['name'=>'index','payload' => Product::all()];
        return $result;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $fields = $request->validate([
            "pd_name"=> "required|string",
            "pd_type"=> "required|integer",
            "price"=> "required|double",

        ]);

        Product::create([
            "product_name" => $request->pd_name,
            "product_type" => $request->pd_type,
            "price"=>$request->pd_price,
        ]);
        return "Inserted Successful";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $payload = Product::find('$id');
        return ['name' => 'show','payload' => $payload];
        
        //$payload = Product::where('id',1);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->product_name = $request->pd_name;

        $product->save();
    
        return "Updated Successful";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $product = Product::find($id);
        // $product->delete();
        // return "Delete Successful";

    }
}
