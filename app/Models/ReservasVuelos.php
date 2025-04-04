<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasVuelos extends Model
{
    use HasFactory;

    protected $table = 'reservas_vuelos';

    protected $fillable = [
        'id',
        'id_usuario',
        'id_vuelo',
        'fecha_reserva',
        'precio_total',
        'num_personas',
        'num_asientos',
        'estado'
    ];

    /**
     * Get the vuelo associated with the reserva.
     */
    public function vuelo()
    {
        return $this->belongsTo(Vuelos::class, 'id_vuelo', 'id');
    }
    /**
     * Get the usuario associated with the reserva.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id');
    }
}
