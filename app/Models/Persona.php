<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $primaryKey = 'Persona_Id';
    protected $fillable = [
        'Persona_Nombre1', 'Persona_Nombre2', 'Persona_Apellido1', 'Persona_Apellido2',
        'Persona_DPI', 'Persona_Nit', 'Persona_CorreoElectronico', 'Persona_Telefono',
        'Direccion_Id', 'Rol_Id'
    ];

    public function direccion()
    {
        return $this->belongsTo(Direccion::class, 'Direccion_Id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'Rol_Id');
    }
}
