<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = "loaitin";
    protected $primaryKey = 'idLT';
    use HasFactory;
}
