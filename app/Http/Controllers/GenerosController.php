<?php

namespace App\Http\Controllers;

use App\Generos;
use Illuminate\Http\Request;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $generos=Generos::all();
        //dd($generos);
        return view("generos.index",compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("generos.create");
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
        $genero=array(
            "descripcion"=>$request->descripcion,
            );
        Generos::create($genero);
        return redirect("generos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function show(Generos $generos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function edit(Generos $generos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generos $generos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generos  $generos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generos $genero)
    {
        //
        $genero->delete();
        return redirect("generos");

    }
}
