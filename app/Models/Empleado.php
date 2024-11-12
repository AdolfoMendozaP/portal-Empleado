<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';

    protected $fillable = [
        'foto', 'nombre', 'apellido', 'genero', 'email', 'folio', 'alta', 'status', 'departamento_id'
    ];

    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'departamento_id', 'IDdepartamento');
    }
}
