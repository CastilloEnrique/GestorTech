<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;

    protected $primaryKey = 'Direccion_Id';
    protected $fillable = ['Direccion_Nombre', 'Direccion_CodigoPostal', 'Mpio_Id', 'Depto_Id'];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'Mpio_Id');
    }

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'Depto_Id');
    }
}
