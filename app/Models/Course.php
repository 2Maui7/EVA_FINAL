<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'nivel',
        'cantidad',
        'descripcion',
    ];
    public function inscription(){
        return this->belongsto(Inscription::class);
    }
}
