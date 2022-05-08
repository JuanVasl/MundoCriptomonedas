<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catalogo_cliente extends Model
{
    use HasFactory;
    protected $table = "catalogo_cliente";
    public $timestamps = false;
    protected $fillable = ["id_cliente","nombre_cliente","telefono_cliente","pais_cliente","edad_cliente","foto_cliente"];

    protected $primaryKey = "id_cliente";
}
