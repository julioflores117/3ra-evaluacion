<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seed_categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria=['AA','A','B','B15','C','D'];
        for ($i=0; $i <6 ; $i++) { 
          DB::table('categoria')->insert([
            'categoria'=>$categoria[$i],
            'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s')
          ]);
        }
    }
}
