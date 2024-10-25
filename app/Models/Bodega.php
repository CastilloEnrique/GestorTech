<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $primaryKey = 'Bodega_Id';
    protected $fillable = ['Bodega_Nombre', 'Direccion_Id'];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'Direccion_Id');
    }

    public function estantes()
    {
        return $this->hasMany(Estante::class, 'Bodega_Id');
    }
}
