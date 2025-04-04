<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Data for the table actividades
        DB::table('actividades')->insert([
            [
                'nombre' => 'Tour Torre Eiffel',
                'descripcion' => 'Subida guiada con historia y vistas panorámicas.',
                'precio' => 35.00,
                'ubicacion' => 'París',
                'fecha_hora' => '2025-04-11 10:00:00',
                'duracion' => '02:00',
                'categoria' => 'cultural'
            ],
            [
                'nombre' => 'Crucero por el Sena',
                'descripcion' => 'Paseo en barco por el río con copa de vino.',
                'precio' => 25.00,
                'ubicacion' => 'París',
                'fecha_hora' => '2025-04-11 18:00:00',
                'duracion' => '01:30',
                'categoria' => 'romántica'
            ],
            [
                'nombre' => 'Taller de pastelería francesa',
                'descripcion' => 'Aprende a hacer croissants y macarons.',
                'precio' => 50.00,
                'ubicacion' => 'París',
                'fecha_hora' => '2025-04-12 15:00:00',
                'duracion' => '02:30',
                'categoria' => 'gastronómica'
            ]
        ]);
        DB::table('actividades')->insert([
            [
                'nombre' => 'Cambio de Guardia en Buckingham',
                'descripcion' => 'Visita guiada con historia de la monarquía británica.',
                'precio' => 20.00,
                'ubicacion' => 'Londres',
                'fecha_hora' => '2025-05-16 11:00:00',
                'duracion' => '01:30',
                'categoria' => 'cultural'
            ],
            [
                'nombre' => 'Harry Potter Studio Tour',
                'descripcion' => 'Explora los estudios de la saga mágica.',
                'precio' => 80.00,
                'ubicacion' => 'Londres',
                'fecha_hora' => '2025-05-17 10:00:00',
                'duracion' => '04:00',
                'categoria' => 'entretenimiento'
            ],
            [
                'nombre' => 'Paseo nocturno por el Támesis',
                'descripcion' => 'Tour en barco con luces de la ciudad.',
                'precio' => 30.00,
                'ubicacion' => 'Londres',
                'fecha_hora' => '2025-05-16 20:00:00',
                'duracion' => '01:00',
                'categoria' => 'romántica'
            ]
        ]);
        DB::table('actividades')->insert([
            [
                'nombre' => 'Tour del Coliseo y Foro Romano',
                'descripcion' => 'Explora las ruinas más famosas de Roma.',
                'precio' => 40.00,
                'ubicacion' => 'Roma',
                'fecha_hora' => '2025-06-21 09:30:00',
                'duracion' => '03:00',
                'categoria' => 'histórica'
            ],
            [
                'nombre' => 'Clase de cocina italiana',
                'descripcion' => 'Aprende a preparar pasta desde cero.',
                'precio' => 55.00,
                'ubicacion' => 'Roma',
                'fecha_hora' => '2025-06-21 17:00:00',
                'duracion' => '02:30',
                'categoria' => 'gastronómica'
            ],
            [
                'nombre' => 'Paseo en Vespa por Roma',
                'descripcion' => 'Recorrido por los barrios históricos.',
                'precio' => 70.00,
                'ubicacion' => 'Roma',
                'fecha_hora' => '2025-06-22 10:00:00',
                'duracion' => '02:00',
                'categoria' => 'aventura'
            ]
        ]);
        DB::table('actividades')->insert([
            [
                'nombre' => 'Tranvía 28 histórico',
                'descripcion' => 'Paseo en tranvía clásico por Alfama y Barrio Alto.',
                'precio' => 10.00,
                'ubicacion' => 'Lisboa',
                'fecha_hora' => '2025-07-26 12:00:00',
                'duracion' => '01:00',
                'categoria' => 'cultural'
            ],
            [
                'nombre' => 'Cata de vinos de Oporto',
                'descripcion' => 'Degustación de vinos portugueses y tapas.',
                'precio' => 30.00,
                'ubicacion' => 'Lisboa',
                'fecha_hora' => '2025-07-26 18:00:00',
                'duracion' => '01:30',
                'categoria' => 'gastronómica'
            ],
            [
                'nombre' => 'Paseo por Belém',
                'descripcion' => 'Recorrido por monumentos como la Torre de Belém.',
                'precio' => 25.00,
                'ubicacion' => 'Lisboa',
                'fecha_hora' => '2025-07-27 10:00:00',
                'duracion' => '02:00',
                'categoria' => 'histórica'
            ]
        ]);
    }
}
