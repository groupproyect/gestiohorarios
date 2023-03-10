<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programa_formacion extends Model
{
    use HasFactory;
    protected $primarykey = 'codigo_prog';
    public $timestamps = false; 
    protected $fillable =[ 
        'nombre',
        'version',
        'duracion',
        'id_niv_formacion',
        'estado',
        'id_area' 
    ];
}
