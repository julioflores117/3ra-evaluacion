<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo_peliculas;
use DB;

class Controlador_peliculas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Peliculas=DB::table('peliculas')->where('id','=',1)->get();
        
        return view('la_abuela', array('Peliculas'=>$Peliculas));
        
    }
    public function index2()
    {
        $Peliculas=DB::table('peliculas')->where('id','=',2)->get();
        
        return view('dia_de_la_bandera', array('Peliculas'=>$Peliculas));
        
    }
    public function index3()
    {
        $Peliculas=DB::table('peliculas')->where('id','=',3)->get();
        
        return view('355', array('Peliculas'=>$Peliculas));
        
        
    }
    public function index4()
    {
        $Peliculas=DB::table('peliculas')->where('id','=',4)->get();
        
        return view('Spider-Man', array('Peliculas'=>$Peliculas));
        
        
    }
    public function Belfast()
    {
        $Peliculas=DB::table('peliculas')->where('id','=',5)->get();
        
        return view('Belfast', array('Peliculas'=>$Peliculas));
        
        
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
