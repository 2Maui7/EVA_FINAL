<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }
    public function create(){
        return view('estudiantes.create');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:25',
            'apellido' => 'required|string|max:25',
            'fecha_na' => 'required|date',
            'ci' => 'required|integer',
            'correo' => 'required|string|max:50',
            'direccion' => 'required|string|max:50',
            'telefono' => 'required|string|max:12',
            'carrera' => 'required|string|max:25',
            'semestre' => 'required|string|max:25',
            'notas' => 'required',
        ]);
        Estudiante::create($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'El Estudianteo fue creado correctamente');
    }

    public function edit(Estudiante $estudiante){
        return view('estudiantes.edit', compact('estudiante'));
    }
    public function update(Request $request, Estudiante $estudiante){
        $request->validate([
            'nombre' => 'required|string|max:25',
            'apellido' => 'required|string|max:25',
            'fecha_na' => 'required|date',
            'ci' => 'required|integer',
            'correo' => 'required|string|max:50',
            'direccion' => 'required|string|max:50',
            'telefono' => 'required|string|max:12',
            'carrera' => 'required|string|max:25',
            'semestre' => 'required|string|max:25',
            'notas' => 'required',
        ]);
        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index')->with('success', 'El producto se modificado correctamente');
    }

    public function destroy(Estudiante $estudiante){
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'El producto fue eliminado correctamente');
    }

    public function show(Estudiante $estudiante){
        return view('estudiantes.show', compact('estudiante'));
    }
}
