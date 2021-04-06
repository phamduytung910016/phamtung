<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoaPhong extends Model
{
    use HasFactory;
    protected $table = "khoaphong";
    protected $fillable = ['ten', 'diaChi'];
}
