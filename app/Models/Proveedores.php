<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    protected $table ="proveedores";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre',
        'rfc',
        'calle',
        'municipio',
        'estado',
        'numero',
        'telefono',
        'correo',
    ];
}
