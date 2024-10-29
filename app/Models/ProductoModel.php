<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    //
    protected $table="productos";
    protected $primaryKey="id";
    protected $fillable=[
        "nombre",
        "precio",
        "descripcion"
    ];
}
