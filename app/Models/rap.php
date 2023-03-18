<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rap extends Model
{
    use HasFactory;
    public $timestamps = false; 
    public $fillable = [
       'cod_competencia',
       'descripcion'
       ];
}
