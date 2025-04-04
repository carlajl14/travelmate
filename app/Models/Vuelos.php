<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;

    protected $table = 'vuelos';

    protected $fillable = [
        'id',
        'origen',
        'destino',
        'fecha_salida',
        'fecha_llegada',
        'precio',
        'aerolinea',
        'duracion',
        'codigo_vuelo'
    ];
    
    /**
     * Get the reservas associated with the vuelo.
     */
    public function reservas()
    {
        return $this->hasMany(ReservasVuelos::class, 'id_vuelo', 'id');
    }
}
