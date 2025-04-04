<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'email',
        'password',
        'fecha_regitro',
        'ultimo_acceso',
        'imagen_perfil',
    ];

    /**
     * Get the reservas associated with the usuario.
     */
    public function hoteles()
    {
        return $this->hasMany(ReservasHoteles::class, 'id_usuario', 'id');
    }
    /**
     * Get the vuelos associated with the usuario.
     */
    public function vuelos()
    {
        return $this->hasMany(ReservasVuelos::class, 'id_usuario', 'id');
    }
    /**
     * Get the actividades associated with the usuario.
     */
    public function actividades()
    {
        return $this->hasMany(ReservasActividades::class, 'id_usuario', 'id');
    }
}
