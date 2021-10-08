<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    
        return [
            'name' =>'required',
            'price' => 'required',
            'img' => 'image|mimes:jpeg,png,JPG,gif,svg|max:2048',
            'description' => 'required',
            'count' => 'integer'
        ];
    }

    

    /**
     * Determine message.
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
	// 		'name.required' => 'Hãy nhập tên sản phẩm',
    //         'price.required' => 'Hãy nhập giá sản phẩm',
    //         'count.integer' => 'Phải nhập kiểu số',
    //         'image.required' => 'Hãy upload anh',
    //         'description.required' => 'Hãynhập mô tả',	
    //     ];
    // }
}