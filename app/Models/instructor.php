<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instructor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_area',
        'num_doc',
        'lider',
        'cant_momentos',
        'finalizacion_contrato',
        'id_contrato'
    ];
}
