<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RequestCripto;
use App\Models\catalogo_criptomoneda;
use Illuminate\Support\Facades\DB;

class ControllerCatalogoCriptomoneda extends Controller
{
    public function index()
    {
        //crud del catalogo de clientes
        $criptoCoin=catalogo_criptomoneda::all();

        return view('ver_catalogo_cripto', compact('criptoCoin'));
    }

    public function register(){
       $criptoCoin=catalogo_criptomoneda::all();
        return view('criptomoneda.catalogo_cripto', compact('criptoCoin'));
    }

    public function editform($id){

        $editCripto=catalogo_criptomoneda::findOrFail($id);

        return view('edit_cripto', compact('editCripto'));
    }

    public function store(Request $request){
        $data = request()->validate([
            'codigo_cripto' => 'required|max:4',
            'nombre_cripto' => 'required|max:250',
            'descripcion_cripto' => 'required|max:300',
            'precio_cripto'=>'required',
        ],
        [
            'codigo_cripto.required' => 'El campo nombre no debe estar vacio.',
            'nombre_cripto.required' => 'El campo dirección no debe estar vacio.',
            'descripcion_cripto.required' => 'El campo teléfono no debe estar vacio.',

            'codigo_cripto.max' => 'El codigo no puede tener más 4 numeros.',
        ]);

        $create_cripto = catalogo_criptomoneda::create([
            'codigo_cripto' => $data['codigo_cripto'],
            'nombre_cripto' => $data['nombre_cripto'],
            'descripcion_cripto' => $data['descripcion_cripto'],
            'precio_cripto' => $data['precio_cripto'],
        ]);


        return redirect()->route('cripto.register')->with('status', 'Producto registrado');
    }


    public function editar(catalogo_criptomoneda $criptoCoin)
    {

        return view ('criptomoneda.UpdateCriptomoneda', compact('criptoCoin'));

    }


    //para editar usuario
    public function update(Request $request, catalogo_criptomoneda $criptoCoin)
    {
        $data = $this->validate($request, [
            'codigo_cripto' => 'required',
            'nombre_cripto' => 'required|max:250',
            'descripcion_cripto' => 'required|max:300',
            'precio_cripto'=>'required',

        ]);

       $criptoCoin->update( [
           'codigo_cripto' => $data['codigo_cripto'],
            'nombre_cripto' => $data['nombre_cripto'],
            'descripcion_cripto' => $data['descripcion_cripto'],
            'precio_cripto' => $data['precio_cripto'],

        ]
        );
               return redirect('/listar')->with('Editar', 'ok');
    }

    //para eliminar criptomoneda
    public function delete ($codigo_cripto)
    {
        catalogo_criptomoneda::destroy($codigo_cripto);

        return back()->with('criptomonedaDestroy', 'Criptomoneda Eliminada'); //Para las alertas
    }
}
