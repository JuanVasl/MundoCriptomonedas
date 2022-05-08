<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestCripto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo_cripto' => [
                'required|max:4',
            ],
            'nombre_cripto' => [
                'required',
            ],
            'descripcion_cripto' => [
                'required',
            ],
            'precio_crioto' => [
                'required',
            ],
        ];
    }
}
