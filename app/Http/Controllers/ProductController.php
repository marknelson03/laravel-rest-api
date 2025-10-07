<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();


    if($product->isEmpty()) {
    return response()->json([
        'status' => 'error',
        'message' => 'No products found.'
    ], 404);
}

        return response()->json([
            'status' => 'success',
            'message' => 'Products retrieved successfully.',
            'data' => $product
        ], 200);

    }
     
    public function show($id){
        $product = Product::where('id', $id)->first();

        if(!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found.'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Product retrieved successfully.',
            'data' => $product
        ], 200);
        
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|decimal:2',
            'image_url' => 'nullable',
            'stock' => 'required|integer',
        ]);

        if($validatedData){
            $product = Product::create([
                'name' => $validatedData['name'],
                'description' => $validatedData['description'],
                'price' => $validatedData['price'],
                'image_url' => $validatedData['image_url'],
                'stock' => $validatedData['stock'],
            ]);

            if(!$product){
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred when creating the product.',
                ]);
            } 
            
            return response()->json([
                'status' => 'success',
                'message' => 'Product created successfully.',
                'data' => $product
            ]);

            }
        }
        

    public function update(Request $request, $id){
       $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|decimal:2',
            'image_url' => 'nullable',
            'stock' => 'required|integer',
        ]);

        $product = Product::where('id', $id)->first();
        if(!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found.'
            ]);
        }

        $updatedProduct = $product->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'image_url' => $validatedData['image_url'],
            'stock' => $validatedData['stock'],
        ]);

        if($updatedProduct) {
            return response()->json([
                'status' => 'success',
                'message' => 'Product updated successfully.',
                'data' => $product
            ]);
        }

    }

    public function destroy($id){

        $product = Product::where('id', $id)->first();
        if(!$product) {
            return response()->json([
                'status' => 'error',
                'message' => 'Product not found.'
            ]);
        }
        $product->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Product deleted successfully.'
        ]);

    }

    public function toggleProductStatus(){

    }
    
}
