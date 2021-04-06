<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThietBiHongRequest extends FormRequest
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
            'tenThietBi' => 'required|unique:bangthietbihong,tenThietBi',
            'serial' => 'required',
            'model' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'tenThietBi.required' => 'Bạn chưa nhập tên thiết bị',
            'tenThietBi.unique' => 'Tên thiết bị không được trùng',
            'serial.required' => 'Bạn chưa nhập số Serial',
            'model.required' =>'Bạn chưa nhập model'
        ];
    }
}
