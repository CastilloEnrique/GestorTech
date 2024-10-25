<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'Producto_Id';
    protected $fillable = [
        'Producto_Nombre', 'Producto_Descripcion', 'Producto_SKU', 'Producto_CostoUnitario',
        'Producto_PrecioDeVenta', 'Producto_UnidadMedida', 'Categoria_Id', 'Proveedor_Id', 'TipoProducto_Id'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'Categoria_Id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'Proveedor_Id');
    }

    public function tipoProducto()
    {
        return $this->belongsTo(TipoProducto::class, 'TipoProducto_Id');
    }
}
