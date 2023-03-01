<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    public $fillable=[
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'viernes',
        'num_ficha'
    ];
}
