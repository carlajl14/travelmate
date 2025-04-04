<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservasHoteles extends Model
{
    use HasFactory;

    protected $table = 'reservas_hoteles';

    protected $fillable = [
        'id',
        'id_usuario',
        'id_hotel',
        'fecha_reserva',
        'fecha_checkin',
        'fecha_checkout',
        'precio_total',
        'num_personas',
        'estado'
    ];

    /**
     * Get the hotel associated with the reserva.
     */
    public function hotel()
    {
        return $this->belongsTo(Hoteles::class, 'id_hotel', 'id');
    }

    /**
     * Get the usuario associated with the reserva.
     */
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id');
    }
}
