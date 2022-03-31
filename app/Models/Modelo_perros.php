<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Modelo_perros extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre', 'Genero', 'Raza'];
   
}
