<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoProveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'ProductoProveedor_Id';
    protected $fillable = ['Producto_Id', 'Proveedor_Id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_Id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'Proveedor_Id');
    }
}
