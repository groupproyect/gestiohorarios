<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_contrato extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'descripcion',
        'cant_momentos'
    ];
}
