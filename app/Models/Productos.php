<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table ="tb_productos";
    protected $primaryKey ="id";
    protected $fillable =[
        'id_tipo',
        'marca',
        'tamaño',
        'precio',
        'cantidad',
        'img'
    ];

    public function TiposBebidas()// un administrador tiene un usuario
    {
        return $this->hasOne(TiposBebidas::class, 'id', 'id_tipo');//campos de busqueda
    }
}
