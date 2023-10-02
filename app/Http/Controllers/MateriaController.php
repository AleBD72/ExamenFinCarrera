<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Presenta vista crud de materias
        $materias=Materia::latest()->paginate(10);
        return view('materia',['materias'=>$materias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return view('materia_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Funcionalidad creación estudiante
        $request->validate([
            'nombre'=> 'required',
            'codigo'=> 'required',
            'descripcion'=> 'required',
            'creditos'=> 'required',

        ]); //validación de datos

        Materia::create($request->all());
        return redirect()->route('materia.index')->with('success','Nueva materia creada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materia $materia): View
    {
        //
        //Mostramos formulario
        return view('materia_edit', ['materia'=>$materia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        //Validado de datos
        $request->validate([
            'nombre'=> 'required',
            'codigo'=> 'required',
            'descripcion'=> 'required',
            'creditos'=> 'required',

        ]); 
        $materia ->update(request()->all());
        return redirect()->route('materia.index')->with('success','Materia actualizada exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //No requiere vista
        $materia->delete();
        return redirect()->route('materia.index')->with('success','Estudiante eliminado exitosamente!');
    }
}
