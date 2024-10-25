<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoImagen extends Model
{
    use HasFactory;

    protected $primaryKey = 'Imagen_Id';
    protected $fillable = ['Producto_Id', 'Imagen_Path'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_Id');
    }
}
