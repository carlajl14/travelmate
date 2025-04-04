<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    use HasFactory;

    protected $table = 'actividades';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'precio',
        'ubicacion',
        'fecha_hora',
        'duracion',
        'disponibilidad',
        'categoria'
    ];

    /**
     * Get the reservas associated with the actividad.
     */
    public function reservas()
    {
        return $this->hasMany(ReservasActividades::class, 'id_actividad', 'id');
    }
}
