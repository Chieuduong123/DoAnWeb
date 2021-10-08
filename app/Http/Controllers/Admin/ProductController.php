<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Products;
use App\Services\Admin\ProductService;


class ProductController extends Controller
{
    public function index() {
         $products = Products::latest()->paginate(5);
    
        return view('admin.products.index',compact('products'));

    }
    public function create() {
        return view('admin/products/create');
    }
    public function store(PostProductRequest $request) {
        
        app(ProductService::class)->create($request);
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {

        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Products $product)
    {
        app(ProductService::class)->update($request, $product) ; 
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
  
       
    
}