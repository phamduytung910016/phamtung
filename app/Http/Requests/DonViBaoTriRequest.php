<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonViBaoTriRequest extends FormRequest
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
            'tenDonViBaoTri' =>'required',
            'nguoiDaiDien' => 'required',
            'soDienThoai' => 'required',
            'diaChi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenDonViBaoTri.required' => 'Bạn chưa nhập tên đơn vị bảo trì',
            'nguoiDaiDien.required' => 'Bạn chưa điền tên người đại diện',
            'soDienThoai.required' => 'Bạn chưa nhập số điện thoại',
            'diaChi.required' => 'Bạn chưa nhập địa chỉ'
        ];
    }
}
