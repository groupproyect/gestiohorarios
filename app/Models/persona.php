<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $primarykey = 'num_doc';
    public $timestamps = false;
    protected $fillable = [
        'nombres',
        'apellidos',
        'correo'
    ];
}
