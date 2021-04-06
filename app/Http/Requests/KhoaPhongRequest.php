<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaPhongRequest extends FormRequest
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
            'ten' => 'required|unique:khoaphong,ten',
            'diaChi' => 'required|unique:khoaphong,diaChi'
        ];
    }

    public function messages()
    {
        return [
            'ten.required' => 'Tên không được để trống',
            'ten.unique' => 'Tên không được trùng',
            'diaChi.required' => 'Địa chỉ không được để trống',
            'diaChi.runique' => 'Địa chỉ không được trùng',
        ];
    }
}
