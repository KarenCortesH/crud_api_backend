<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importamos el cliente Model

use App\Models\Cliente;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Retornar todos los valores de la tabla cliente
        return Client::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Creamos todos los valores
        return Cliente::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Va tomar el objeto del cliente qe corresponda al ID
        $client = Cliente::findOrFail($id);
        $client->nombre = $request->nombre;
        $client->apellido = $request->apellido;
        $client->fecha_nacimiento = $request->fecha_nacimiento;
        $client->edad = $request->edad;
        $client->update();
        return $client;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Buscar por id al cliente
        $client = Cliente::findOrFail($id);
        $client->delete();
    }
}
