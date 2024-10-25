<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrecioHistorico extends Model
{
    use HasFactory;

    protected $primaryKey = 'PrecioHistorico_Id';
    protected $fillable = [
        'Producto_Id', 'PrecioHistorico_PrecioAnterior',
        'PrecioHistorico_PrecioNuevo', 'PrecioHistorico_FechaCambio'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_Id');
    }
}
