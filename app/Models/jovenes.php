<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jovenes extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_joven';
    public $timestamps = false;
    protected $fillable = [
        'foto',
        'nombre',
        'apellidos',
        'fecha_nacimiento',
        'direccion',
        'ultima_asistencia',
        'genero',
        'telefono'
    ];
}
