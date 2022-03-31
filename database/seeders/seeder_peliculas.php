<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class seeder_peliculas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $nombre=['La Abuela','EL DIA DE LA BANDERA','355','BELFAST'];
      $director=['Paco Plaza','Sean Penn','Simon Kinberg','Kenneth Branagh'];
      $año_estreno=['no tiene','5 DE ENERO DE 2022','22 DE ENERO DE 2022','28 DE ENERO DE 2022'];
      for ($i=0; $i <4 ; $i++) { 
        DB::table('peliculas')->insert([
          
          'Nombre'=>$nombre[$i],
          'Director'=>$director[$i],
          'Año_estreno'=>$año_estreno[$i],
          'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
      }
      
    }
}
