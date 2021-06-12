<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinhTrangModel extends Model
{
    use HasFactory;
    protected $table = "tinhtrang";
    protected $fillable = ['tinhTrang'];
}
