<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // La asignación masiva en Laravel requiere que especifiques explícitamente 
    // qué campos pueden ser asignados masivamente por motivos de seguridad.
    protected $fillable = ['nombre', 'correo', 'telefono', 'direccion'];
}
