<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaoHongModel extends Model
{
    use HasFactory;
    protected $table = "baohong";
    protected $fillable = ['maNguoiBaoHong','thietbi_id','ngayBaoHong','lyDo'];

    public function ThietBiHong(){
        return $this->belongsTo(ThietBiModel::class,'thietbi_id');
    }

}
