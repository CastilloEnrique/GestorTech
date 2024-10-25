<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'Proveedor_Id';
    protected $fillable = ['Proveedor_Nombre', 'Proveedor_Nit', 'Direccion_Id'];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'Direccion_Id');
    }

    public function productos()
    {
        return $this->hasMany(Producto::class, 'Proveedor_Id');
    }
}
