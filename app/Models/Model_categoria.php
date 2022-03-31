<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo_peliculas;

class Model_categoria extends Model
{
    use HasFactory;
    
    public function categoria(){
        return $this->belongsTo(Model_peliculas::class);
        
    }
}
