<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }
    public function create(){
        return view('suppliers.create');
    }
    public function store(Request $request){
        Supplier::create($request->all());
        return redirect()->route('suppliers.index');
    }

    public function edit(Supplier $supplier){
        return view('suppliers.edit', compact('supplier'));
    }
    public function update(Request $request, Supplier $supplier){
        $request->validate([
            'name' => 'required|string|max:25',
            'email' => 'required|string|max:25',
            'phone' => 'required|string|max:25',
            'address' => 'required',
        ]); 
        $supplier->update($request->all());
        return redirect()->route('suppliers.index')->with('success', 'El proveedor se edito');
    }

    public function destroy(Supplier $supplier){
        $supplier->delete();
        return redirect()->route('suppliers.index')->with('success', 'El producto fue eliminado correctamente');
    }

    public function show(Supplier $supplier){
        return view('suppliers.show', compact('supplier'));
    }
}
