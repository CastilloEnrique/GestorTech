<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;

    protected $primaryKey = 'TipoProducto_Id';
    protected $fillable = ['TipoProducto_Nombre'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'TipoProducto_Id');
    }
}
