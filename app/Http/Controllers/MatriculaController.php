<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;
use App\Models\Matricula;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $matriculas=Matricula::latest()->paginate(10);
        return view('matricula',['matriculas'=>$matriculas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('martricula_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validación de los datos
        $request->validate([
            'codigo'=> 'required',
            'descripcion'=> 'required',
            'id_estudiante'=> 'required',
            'id_materias'=> 'required',
        ]);
        Materia::create($request->all());
        return redirect()->route('materia.index')->with('success','Nueva matricula realizada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Matricula $matricula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        //mostramos la vista
        return view('matricula_edit', ['matricula'=>$matricula]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Matricula $matricula)
    {
        //Validación de los datos
        $request->validate([
            'codigo'=> 'required',
            'descripcion'=> 'required',
            'id_estudiante'=> 'required',
            'id_materias'=> 'required',
        ]);

        $matricula ->update(request()->all());
        return redirect()->route('matricula.index')->with('success','Matricula actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        //No requiere una vista
        $matricula ->delete();
        return redirect()->route('matricula.index')->with('success','Matricula eliminada exitosamente');
    }
}
