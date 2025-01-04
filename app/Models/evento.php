<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $primarykey = 'id_evento';
    public $timestamps = false;
    protected $fillable = [
        'tipo_evento',
        'fecha',
        'hora'
    ];

    public function detalles()
    {
        return $this->hasOne(detalle_evento::class, 'id_evento', 'id_evento');
    }
}
