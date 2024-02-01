<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = cliente::all();
        return view("clientes.index", compact('clientes'));
        // return "Estas en la página de inicio";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();
        // return view("clientes.insert");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Este método busca un registro en la base de datos usando la clave primaria.
        // variable = nombreDelModelo::metodo(parametro)
        $cliente = Cliente::findOrFail($id);

        //retorna la vista show y el metodo compact(es una función que se utiliza para crear un array asociativo a partir de variables específicas.)
        return view("clientes.show", compact("cliente"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Se supone que dentro de esta variable se encuentar el cliente que queremos modificar
        $cliente = Cliente::findOrFail($id);
        return view("clientes.edit", compact("cliente"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->only(['nombre']));
        return redirect("/clientes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect("/clientes");

    }
}
