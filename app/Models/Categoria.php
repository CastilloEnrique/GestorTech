<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'Categoria_Id';
    protected $fillable = ['Categoria_Nombre', 'Categoria_Descripcion'];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'Categoria_Id');
    }
}
