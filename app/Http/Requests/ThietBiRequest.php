<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThietBiRequest extends FormRequest
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
            'tenThietBi' => 'required',
            'serial' => 'required|unique:thietbi,serial',
            'model' => 'required|unique:thietbi,model',
            'maLoaiThietBi' => 'required',
            'maNhomThietBi' => 'required',
            'donViTinh' => 'required',
            'soLuong' => 'required',
            'canBoVatTuPhuTrach' => 'required',
            'hangSanXuat' => 'required',
            'xuatXu' => 'required',
            'namSanXuat' => 'required',
            'kiemDinhDinhKy' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'tenThietBi.required' => 'Bạn chưa nhập tên thiết bị',
            'serial.required' => 'Bạn chưa nhập serial',
            'serial.unique' => 'Mã serial đã tồn tại',
            'model.required' => 'Bạn chưa điền model',
            'model.unique' => 'Mã model đã tồn tại',
            'maLoaiThietBi.required' => 'Bạn chưa chọn loại thiết bị',
            'maNhomThietBi.required' => 'Bạn chưa chọn nhóm thiết bị',
            'donViTinh.required' => 'Bạn chưa chọn đơn vị tính',
            'soLuong.required' => 'Bạn chưa chọn số lượng',
            'canBoVatTuPhuTrach.required' => 'Bạn chưa điền thông tin người phụ trách',
            'hangSanXuat.required' => 'Bạn chưa điền hãng sản xuất',
            'xuatXu.required' => 'Bạn chưa điền xuất xứ',
            'namSanXuat.required' => 'Bạn chưa điền năm sản xuất',
            'kiemDinhDinhKy.required' => 'Bạn chưa chọn thời gian kiểm định'
        ];
    }
}
