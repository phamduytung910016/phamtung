<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KiemDinhModel extends Model
{
    use HasFactory;
    protected $table = "kiemdinh";
    protected $fillable = ['thoiGian'];
}
