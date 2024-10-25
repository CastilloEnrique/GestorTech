<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $primaryKey = 'Inventario_Id';
    protected $fillable = ['Producto_Id', 'Bodega_Id', 'Inventario_CantidadDisponible'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_Id');
    }

    public function bodega()
    {
        return $this->belongsTo(Bodega::class, 'Bodega_Id');
    }
}
