<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Tin extends Model
{
    public $table = 'tin';
    public $primaryKey = 'idTin';   
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'TieuDe'
            ]
        ];
    }

}
