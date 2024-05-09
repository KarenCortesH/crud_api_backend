<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //llenar Model con todos los atributos de la tabla creada
    protected $fillable = ['nombre','apellido','fecha_nacimiento','edad'];
}
