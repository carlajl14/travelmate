<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasActividades extends Model
{
    use HasFactory;

    protected $table = 'reservas_actividades';
    protected $fillable = [
        'id',
        'id_usuario',
        'id_actividad',
        'fecha_reserva',
        'cantidad_personas',
        'precio_total',
        'estado'
    ];
    /**
     * Get the actividad associated with the reserva.
     */
    public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'id_actividad', 'id');
    }
    /**
     * Get the usuario associated with the reserva.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id');
    }
}
