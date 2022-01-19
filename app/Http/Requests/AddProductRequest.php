<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
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
            //
            'code'=>'required|min:3|unique:product,code',
            'name'=>'required|min:3|unique:product,name',
            'price'=>'required|numeric',
            'img'=>'image'
        ];
    }

    public function messages()
    {
        return [
            'code.required'=>'Không được để trống',
            'code.min'=>'Không được nhỏ hơn 3',
            'code.unique'=>'Mã sản phẩm đã tồn tại',
            'name.required'=>'Không được để trống',
            'name.min'=>'Không được nhỏ hơn 3',
            'name.unique'=>'Tên sản phẩm đã tồn tại',
            'price.required'=>'Không được để trống',
            'price.numeric'=>'Phải là số',
            'img.image'=>'Phải là ảnh',
        ];
    }
}
