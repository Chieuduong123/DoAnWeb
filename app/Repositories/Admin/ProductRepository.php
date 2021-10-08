<?php

namespace App\Repositories\Admin;

use App\Models\Products;

class ProductRepository
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function create($param)
    {
        return Products::create($param);
    }
}