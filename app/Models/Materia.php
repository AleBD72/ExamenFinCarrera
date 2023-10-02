<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    //Relación de muchos a muchos
    public function matriculas(){
        return $this->belongsToMany('App\Models\Estudiante');
    }
}
