<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ficha extends Model
{
    use HasFactory;
    protected $primarykey = 'num_ficha';
    public $timestamps = false;
    protected $fillable = [
        'num_ficha',
        'cant_aprend',
        'cadena_foramacion',
        'trimestre',
        'inicio_formacion',
        'fin_formacion',
        'estado',
        'id_jornada',
        'codigo_prog'
    ];
}
