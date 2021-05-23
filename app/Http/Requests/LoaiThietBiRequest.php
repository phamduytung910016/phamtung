<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoaiThietBiRequest extends FormRequest
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
            'maLoaiThietBi' => 'required|unique:loaithietbi,maLoaiThietBi',
             'tenLoaiThietBi' => 'required|unique:loaithietbi,tenLoaiThietBi',
             'maNhomThietBi' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'maLoaiThietBi.required' => 'Bạn chưa điền mã loại thiết bị',
            'maLoaiThietBi.unique' => 'Mã loại thiết bị đã tồn tại',
            'tenLoaiThietBi.required' => 'Bạn chưa nhập tên loại thiết bị',
            'tenLoaiThietBi.unique' => 'Tên loại thiết bị đã tồn tại',
            'maNhomThietBi.required' => 'Bạn chưa chọn mã nhóm thiết bị'
        ];
    }
}
