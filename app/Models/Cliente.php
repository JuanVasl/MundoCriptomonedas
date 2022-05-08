<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $table='cliente';
    public $timestamps=false;
    protected $fillable=[
        'id_cliente', 'nombre_persona','telefono','pais','edad', 'foto',
    ];
    protected $primaryKey = 'id_cliente';
}
