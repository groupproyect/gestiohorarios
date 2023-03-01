<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambiente_formacion extends Model
{
    use HasFactory;
    protected $primarykey = 'id_ambiente';
    public $timestamps = false;
    protected $fillable = [
        'id_ambiente',
        'id_area',
        'aforo',
        'id_sede'
    ];
}
