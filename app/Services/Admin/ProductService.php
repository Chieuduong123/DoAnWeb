<?php

namespace App\Services\Admin;

use App\Http\Requests\Admin\PostProductRequest;
use App\Repositories\Admin\ProductRepository;
use App\Services\UploadImageService;

class ProductService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function create($request)
    {
        
        $data = $request->all();
        $data = app(UploadImageService::class)->uploadImage($request, $data);
        app(ProductRepository::class)->create($data);
    }

    public function update($request, $product)
    {
   
        $data = $request->all();
        $data = app(UploadImageService::class)->uploadImage($request, $data);
        $product->update($data);
        
    
}
}