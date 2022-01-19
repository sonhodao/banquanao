<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'email' => 'email|required|unique',
            'password' => 'required|min:6',
            'full'=>'required',
            'address'=>'required',
            'phone' => 'required|numeric',
        ];
    }

    public function true()
    {
        return [
            //
            'email.email' => 'Phải là email',
            'email.required' => 'Không được để trống',
            'email.unique' => 'không được trùng',
            'password.required' => 'Không được để trống',
            'password.min' => 'Ít nhất 6 ký tự',
            'full.required' => 'không được để trống',
            'address.required' => 'không được để trống',
            'phone.required' => 'không được để trống',
            'phone.numeric' => 'Phải là dạng số'
        ];
    }
}
