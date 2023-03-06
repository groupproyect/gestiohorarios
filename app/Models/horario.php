<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable=[
        'id_trimestre',
        'id_ambiente',
        'id_sem_com',
        'id_instructor',
        'num_ficha',
        'estado',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'viernes'
        
    ];
}
