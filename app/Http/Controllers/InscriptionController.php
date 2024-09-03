<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Student;
use App\Models\Course;

class InscriptionController extends Controller
{
    public function index(){
        $inscriptions=Inscription::with('student','course')->get();
        return view('inscriptions.index',compact('inscriptions'));
    }
    public function create(){
        $students=Student::all();
        $courses=Course::all();
        return view('inscriptions.create',compact('students','courses'));
    }
    public function store(request $request){
        Inscription::create($request->all());
        return redirect()->route('inscriptions.index');
    }
    public function show(Inscription $inscription){
        return view('inscriptions.show',compact('inscription'));
    }
    public function edit(Inscription $inscription){
        $students = Student::all(); 
        $courses = Course::all();   
        return view('inscriptions.edit', compact('inscription', 'students', 'courses'));
    }
    public function update(Request $request, Inscription $inscription){
        $inscription->update($request->all());
        return redirect()->route('inscriptions.index');
    }
    public function destroy(Inscription $inscription){
        $inscription->delete();
        return redirect()->route('inscriptions.index');
    }
}
