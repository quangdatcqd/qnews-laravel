<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheLoaiModel extends Model
{
    protected $table = 'theloai';
    protected $primaryKey = 'idTL';
    
    use HasFactory;
}
