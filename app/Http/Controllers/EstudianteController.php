<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //Presentación de la vista para crud de estudiantes
        $estudiantes=Estudiante::latest()->paginate(10);
        return view('estudiante',['estudiantes'=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //Retorno de la vista de creación estudiante
        return view('estudiante_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Funcionalidad creación estudiante
        $request->validate([
            'name'=> 'required',
            'last_name'=> 'required',
            'cedula'=> 'required',
            'fecha_nacimiento'=> 'required',
            'ciudad'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'email'=> 'required',

        ]); //validación de datos

        Estudiante::create($request->all());
        return redirect()->route('estudiante.index')->with('success','Nuevo estudiante creado!');
        //llamamos al método index con un mensaje de éxito
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
    public function edit(Estudiante $estudiante):View
    {
        //Mostramos formulario
        return view('estudiante_edit', ['estudiante'=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estudiante $estudiante): RedirectResponse
    {
        //Validación de los datos
        $request->validate([
            'name'=> 'required',
            'last_name'=> 'required',
            'cedula'=> 'required',
            'fecha_nacimiento'=> 'required',
            'ciudad'=> 'required',
            'direccion'=> 'required',
            'telefono'=> 'required',
            'email'=> 'required',

        ]);
        $estudiante ->update(request()->all());
        return redirect()->route('estudiante.index')->with('success','Estudiante actualizado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estudiante $estudiante)
    {
        //No requiere vista
        $estudiante->delete();
        return redirect()->route('estudiante.index')->with('success','Estudiante eliminado exitosamente');
    }
}
