<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Nullable;

class ClienteController extends Controller
{

    //para visualizar tabla
    public function read()
    {
        //crud del catalogo de clientes
        $cliente=Cliente::all();

        return view('layouts.Cliente.ReadClient', compact('cliente'));
    }


    //Visualizar formulario
    public function create()
    {
        //cliente register

        $cliente = Cliente::all();
        return view('layouts.Cliente.CreateCliente', compact('cliente'));
    }

    //Para guardar usuario
    public function save(Request $request)
    {
        //Validation Date
        $data = $this->validate($request, [
            'id_cliente' => 'Required|string|max:12|unique:cliente',
            'nombre_persona' => 'Required|string|max:45',
            'telefono' => 'Required|string|max:15|',
            'pais' => 'Required|string|max:45',
            'edad' => 'Required|string|max:45',
            'foto'=>'nullable',


        ]);

        $create_cliente = Cliente::create([
            'id_cliente' => $data['id_cliente'],
            'nombre_persona' => $data['nombre_persona'],
            'telefono' => $data['telefono'],
            'pais' => $data['pais'],
            'edad' => $data['edad'],
            'foto'=>'nullable',

        ]);

        return redirect('/read/Vista')->with('Guardado', "Datos del cliente guardado");



    }

    //para formulario editar
    public function edit(Cliente $cliente)
    {

        return view ('layouts.Cliente.UpdateClient', compact('cliente'));

    }



    //para editar usuario
    public function update(Request $request, Cliente $cliente)
    {
        $validation = $this->validate($request, [
            'nombre_persona' => 'Required|string|max:45',
            'telefono' => 'Required|string|max:15|',
            'pais' => 'Required|string|max:45',
            'edad' => 'Required|string|max:45',
            'foto'=>'nullable',

        ]);
       $cliente->update( [
            'nombre_persona'=>$validation['nombre_persona'],
            'telefono'=> $validation['telefono'],
            'pais'=>$validation['pais'],
            'edad'=>$validation['edad'],
                'foto'=>'nullable',


        ]
        );
               return redirect('/home')->with('Editar', 'ok');
    }



   //para eliminar usuario
   public function delete($id_cliente)
   {
       Cliente::destroy($id_cliente);

       return back()->with('clienteDestroy', 'Cliente Eliminado'); //Para las alerts
   }

    //para visualizar las reglas de oro
    public function reglas()
    {
        return view('reglas');
    }
}
