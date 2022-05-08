<?php

namespace App\Http\Controllers;

use App\Models\Criptomoneda;
use Illuminate\Http\Request;
use App\Http\Requests\RequestCripto;
use App\Models\catalogo_criptomoneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ControllerCatalogoCriptomoneda extends Controller
{
    public function index()
    {
        //crud del catalogo de clientes
        $criptoCoin=catalogo_criptomoneda::all();

        return view('criptomoneda.ver_catalogo_cripto', compact('criptoCoin'));
    }


    public function register(){

        return view('criptomoneda.catalogo_cripto');
    }


    public function store(Request $request)
    {
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

    //Creamos funcion para eliminar los registros creados de criptomonedas
    public function delete($codigo_cripto){
        $customer= catalogo_criptomoneda::findOrfail($codigo_cripto);

        //Para eliminar las imagenes
        if(Storage::delete('public/'.$customer->imagen)){
            catalogo_criptomoneda::destroy($codigo_cripto);
        }
        return back()->with('criptomonedaEliminada','Criptomoneda Eliminada');
    }
}
