<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'fecha_na',
        'ci',
        'correo',
        'direccion',
        'telefono',
        'carrera',
        'semestre',
        'notas',
    ];
}
