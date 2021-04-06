<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhaCungCapRequest extends FormRequest
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
            'tenNhaCungCap' => 'required|unique:nhacungcap,tenNhaCungCap',
            'nguoiDaiDien' => 'required|unique:nhacungcap,nguoiDaiDien',
            'soDienThoai' => 'required',
            'diaChi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenNhaCungCap.required' => 'Bạn chưa điền tên nhà cung cấp',
            'tenNhaCungCap.unique' => 'Tên nhà cung cấp không được trùng',
            'soDienThoai.required' => 'Bạn chưa điền số điện thoại',
            'soDienThoai.min:9' => 'Số điện thoại không hợp lệ',
            'diaChi.required' => 'Bạn chưa điền địa chỉ'
        ];
    }
}
