<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class UploadImageService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function uploadImage($request, $data)
    {
       try {
           if ($request->hasFile('img')) {
            //    throw new \RuntimeException('Dont have any file');
               $imageName = time().'.'.$request->img->getClientOriginalName(); 
               $request->img->move(public_path('img'), $imageName);
               $data['img'] = $imageName;
           }
            // $request->img->storeAs('images', $imageName); 

        } catch (\Exception $e) {
          Log::error($e);
          throw $e;
        }
        return $data;
    }
}