<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ci',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'birth_date',
        'gender',
    ];
    public function edad()
    {
        return Carbon::parse($this->birth_date)->age;
    }
    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}
