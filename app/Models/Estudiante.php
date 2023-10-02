<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name','cedula','fecha_nacimiento','ciudad','direccion','telefono','email'];
    

    //Relación de muchos a muchos
    public function matriculas(){
        return $this->belongsToMany('App\Models\Materia');
    }
}
