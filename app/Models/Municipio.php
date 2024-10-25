<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $primaryKey = 'Mpio_Id';
    protected $fillable = ['Mpio_Nombre', 'Depto_Id'];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'Depto_Id');
    }

    public function direcciones()
    {
        return $this->hasMany(Direccion::class, 'Mpio_Id');
    }
}

