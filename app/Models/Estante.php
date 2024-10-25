<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estante extends Model
{
    use HasFactory;

    protected $primaryKey = 'Estante_Id';
    protected $fillable = ['Estante_Nombre', 'Estante_Seccion', 'Estante_Descripcion', 'Bodega_Id'];

    public function bodega()
    {
        return $this->belongsTo(Bodega::class, 'Bodega_Id');
    }
}
