<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seed_genero extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero=['Accion','Comedia','Drama','Terror','Suspenso','Romance','Fantasia','Ciencia Ficcion','Animacion','Musical','Documental','Infantil'];
        for ($i=0; $i <12 ; $i++) { 
          DB::table('genero')->insert([
            'genero'=>$genero[$i],
            'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
    }
}
