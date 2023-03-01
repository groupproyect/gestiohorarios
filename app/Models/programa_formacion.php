<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa_formacion extends Model
{
    use HasFactory;
    public $timestamps = false; 

    protected $fillable =[ 
        'direccion',
        'nombre_sede' 
    ];
}
