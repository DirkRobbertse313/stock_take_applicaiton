<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\StockOnHand;
use Stringable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();

        return view('products.index', 
            [
                'products' => $product
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $sanitized = $request->validated();
        
        Product::create($sanitized);

        return redirect()->route('product.index')->with('success','Product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', 
            [ 
                'product' => $product
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('products.edit', 
            [
                'product' => $product
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
       $sanitized = $request->validated();

        if ($product->update($sanitized)) {
            return redirect()
                ->route('product.index')
                ->with('success','Product updated successfully');
        }else {
            return "Something Went Wrong";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->delete()) {
            return redirect()
                ->route('product.index')
                ->with('message', 'Product deleted');
        }else {
            return "Something Went Wrong";
        }
    }
}
