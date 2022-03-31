<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Model_categoria;
use App\Models\Model_genero;
use database\seeders\seeder_peliculas;

class Modelo_peliculas extends Model
{
    use HasFactory;
    


    public function Peliculas_Genero (){
        return $this->hasOne(Model_Genero::class);
    }
    public function Peliculas_categoria(){
        return $this->hasOne(Model_categoria::class);
    }
}
