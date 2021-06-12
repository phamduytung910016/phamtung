<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NghiemThuModel extends Model
{
    use HasFactory;
    protected $table = "nghiemthu";
    protected $fillable = ['trangThai'];
    
}
