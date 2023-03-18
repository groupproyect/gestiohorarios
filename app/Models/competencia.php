<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competencia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'descripcion',
        'codigo_prog'
    ];
}
