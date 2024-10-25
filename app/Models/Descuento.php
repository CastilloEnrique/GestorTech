<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Descuento extends Model
{
    use HasFactory;

    protected $primaryKey = 'Descuento_Id';
    protected $fillable = [
        'Producto_Id', 'Descuento_Tipo', 'Descuento_Descripcion',
        'Descuento_Valor', 'Descuento_FechaInicio', 'Descuento_FechaFin'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_Id');
    }
}
