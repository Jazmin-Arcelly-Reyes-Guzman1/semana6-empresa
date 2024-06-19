<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


//array para el ingreso de datos en la clase persona de la carpeta model
class Persona extends Model
{
    use HasFactory;
    protected $fillable = ['cPerApellido','cPerNombre','cPerDireccion','dPerFecNac','nPerEdad','cPerSexo','nPerSueldo','cPerRnd','nPerEstado'];
}