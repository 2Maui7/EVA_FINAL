<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Supplier;

class InventoryController extends Controller
{
    public function index(){
        $inventories = Inventory::all();
        return view('inventories.index', compact('inventories'));
    }
    public function create(){
        $suppliers = Supplier::all();
        return view('inventories.create', compact('suppliers'));
    }
    public function store(Request $request){
        Inventory::create($request->all());
        return redirect()->route('inventories.index');
    }
    public function edit(string $id){
        $suppliers = Supplier::all();
        $inventory = Inventory::finOrFail($id);
    }
    public function update(Request $request, string $id){
        //encuentra el inventario por el id
        $inventory = Inventory::finOrFail($id);
        //actualiza el inventario con los datos del formulario
        $Inventory -> update($request->all());
        //redirecciona
        return redirect()->route('inventories.index')->with('success', 'Inventario Actualizado');
    }

    public function destroy(string $id){
        $inventory->delete();
        return redirect()->route('inventories.index');
    }

    public function show(string $id){
        return view('inventories.show', compact('inventory'));
    }
}
