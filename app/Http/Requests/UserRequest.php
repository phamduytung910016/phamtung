<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'hoVaTen' => 'required|unique:user,hoVaTen',
            'email' => 'required|unique:user,email|',
            'password' => 'required',
            'phanQuyen' => 'required',
            'khoaPhong_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'hoVaTen.required' => 'Bạn chưa nhập họ và tên',
            'hoVaTen.unique' => 'Tên bạn đã có trong cơ sở dữ liệu',
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'phanQuyen.required' => 'Bạn chưa chọn phân quyền',
            'khoaPhong_id.required' => 'Bạn chưa chọn khoa phòng'
        ];
    }
}
