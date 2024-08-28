<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    public function index(){
        $positions = Position::all();
        return view('positions.index', compact('positions'));
    }
    public function create(){
        return view('positions.create');
    }
    public function store(Request $request){
        Position::create($request->all());
        return redirect()->route('positions.index');
    }

    public function edit(Position $position){
        return view('positions.edit', compact('position'));
    }
    public function update(Request $request, Position $position){ 
        $position->update($request->all());
        return redirect()->route('positions.index')->with('success', 'El departamento se edito coorectamente');
    }

    public function destroy(Position $position){
        $position->delete();
        return redirect()->route('positions.index')->with('success', 'El departamento fue eliminado correctamente');
    }

    public function show(Position $position){
        return view('positions.show', compact('position'));
    }
}
