<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use http\Client;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function read()
    {
        //crud del catalogo de clientes
        $cliente=Cliente::all();

        return view('layouts.Cliente.ReadClient', compact('cliente'));
    }



    public function create()
    {
        //cliente register

        $cliente = Cliente::all();
        return view('layouts.Cliente.CreateCliente', compact('cliente'));
    }

    public function save(Request $request)
    {
        //Validation Date
        $data = $this->validate($request, [
            'id_cliente' => 'Required|string|max:12|unique:cliente',
            'nombre_persona' => 'Required|string|max:45',
            'telefono' => 'Required|string|max:15|',
            'pais' => 'Required|string|max:45',
            'edad' => 'Required|string|max:45',
            'foto' => 'nullable',

        ]);

        $create_cliente = Cliente::create([
            'id_cliente' => $data['id_cliente'],
            'nombre_persona' => $data['nombre_persona'],
            'telefono' => $data['telefono'],
            'pais' => $data['pais'],
            'edad' => $data['edad'],
            'foto'=> $data ['foto'],
        ]);

        return redirect()->route('Create')->with('status', 'Cliente registrado');



    }

    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
