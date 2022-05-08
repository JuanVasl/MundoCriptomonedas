<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo_criptomoneda extends Model
{
    use HasFactory;

    protected $table = 'catalogo_cripto';
    protected $fillable = ['codigo_cripto', 'nombre_cripto','descripcion_cripto','precio_cripto'];

    protected $primaryKey = 'codigo_cripto';
}
