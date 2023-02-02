<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $table = 'ykien';
    protected $primaryKey = 'idYKien'; 
    use HasFactory;
}
