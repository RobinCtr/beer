<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Authenticatable
{
    use HasFactory;
    protected $table ="usuarios";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombreCompleto',
        'telefono',
        'correo',
        'password',
        'estatus',
        'id_tipo',
        'img',
        'aviso'

    ];
}
