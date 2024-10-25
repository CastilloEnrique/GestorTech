<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $primaryKey = 'Depto_Id';
    protected $fillable = ['Depto_Nombre'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'Depto_Id');
    }
}
