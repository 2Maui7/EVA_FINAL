<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'course_id',
        'fecha_ins',
        'descripcion',
    ];
    public function student(){
        return $this->belongsto(student::class);
    }
    public function course(){
        return $this->belongsto(course::class);
    }
}
