<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rap_semaforo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id_rap',
        'id_semaforo'
    ];
}
