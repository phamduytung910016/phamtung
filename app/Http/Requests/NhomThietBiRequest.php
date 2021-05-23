<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhomThietBiRequest extends FormRequest
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
            'tenNhomThietBi' => 'unique:nhomthietbi,tenNhomThietBi|required',
            'maNhomThietBi' => 'unique:nhomthietbi,maNhomThietBi|required'
        ];
    }

    public function messages()
    {
        return[
            'tenNhomThietBi.unique' => 'Tên nhóm thiết bị đã tồn tại',
            'tenNhomThietBi.required' => 'Bạn chưa điền tên nhóm thiết bị',
            'maNhomThietBi.unique' => 'Mã nhóm thiết bị đã tồn tại',
            'maNhomThietBi.required' => 'Bạn chưa điền mã nhóm thiết bị',
        ];
    }
}
