<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposBebidas extends Model
{
    use HasFactory;
    protected $table ="tipoBebidas";
    protected $primaryKey ="id";
    protected $fillable =[
        'nombre'
    ];
}
