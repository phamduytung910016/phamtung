<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViBaoTriModel extends Model
{
    use HasFactory;
    protected $table = "donvibaotri";
    protected $fillable = ['nhaCungCap_id', 'diaChi', 'nguoiDaiDien', 'soDienThoai', 'email', 'maSoThue', 'ghiChu','tenDonViBaoTri'];

    public function nhaCungCap()
    {
        return $this->belongsTo(NhaCungCapModel::class, 'nhaCungCap_id');
    }
}
