<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_evento extends Model
{
    use HasFactory;
    protected $primarykey = 'id_detalle';
    public $timestamps = false;
    protected $fillable = [
        'id_evento',
        'lugar',
        'direccion',
        'dinamicas',
        'mensaje',
        'alabanza',
        'visitante',
        'producto',
        'precio_producto',
        'cantidad_total_venta',
        'liga_invitada'
    ];

    public function evento()
    {
        return $this->belongsTo(evento::class, 'id_evento', 'id_evento');
    }

    public function direccionJoven()
    {
        return $this->belongsTo(jovenes::class, 'direccion', 'id_joven');
    }

    public function dinamicasJoven()
    {
        return $this->belongsTo(jovenes::class, 'dinamicas', 'id_joven');
    }

    public function mensajeJoven()
    {
        return $this->belongsTo(jovenes::class, 'mensaje', 'id_joven');
    }
}
