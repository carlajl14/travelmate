<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data to seed the hoteles table
        DB::table('hoteles')->insert([
            [
                'nombre' => 'Hotel Lumière',
                'direccion' => '123 Rue de Paris, París, Francia',
                'descripcion' => 'Hotel elegante en el centro de París, cerca de la Torre Eiffel.',
                'precio_noche' => 150.00,
                'categoria' => 4,
                'ubicacion' => 'París',
                'imagen' => 'paris_lumiere.jpg'
            ],
            [
                'nombre' => 'The London Royal',
                'direccion' => '221B Baker Street, Londres, Reino Unido',
                'descripcion' => 'Hotel clásico con estilo británico y desayunos continentales.',
                'precio_noche' => 180.00,
                'categoria' => 5,
                'ubicacion' => 'Londres',
                'imagen' => 'london_royal.jpg'
            ],
            [
                'nombre' => 'Roma Bella Vita',
                'direccion' => 'Via Roma 45, Roma, Italia',
                'descripcion' => 'Alojamiento céntrico con vistas al Coliseo.',
                'precio_noche' => 130.50,
                'categoria' => 4,
                'ubicacion' => 'Roma',
                'imagen' => 'roma_bella_vita.jpg'
            ],
            [
                'nombre' => 'Lisboa Dreams',
                'direccion' => 'Avenida da Liberdade 90, Lisboa, Portugal',
                'descripcion' => 'Hotel moderno con terraza y desayuno buffet.',
                'precio_noche' => 110.00,
                'categoria' => 3,
                'ubicacion' => 'Lisboa',
                'imagen' => 'lisboa_dreams.jpg'
            ],
            [
                'nombre' => 'Brussels Garden Inn',
                'direccion' => 'Rue des Fleurs 10, Bruselas, Bélgica',
                'descripcion' => 'Hotel cómodo ideal para viajes de negocios y turismo.',
                'precio_noche' => 125.75,
                'categoria' => 4,
                'ubicacion' => 'Bruselas',
                'imagen' => 'brussels_garden_inn.jpg'
            ],
            [
                'nombre' => 'Milano Centro Hotel',
                'direccion' => 'Corso Buenos Aires 50, Milán, Italia',
                'descripcion' => 'Ubicación perfecta para ir de compras y explorar la ciudad.',
                'precio_noche' => 140.00,
                'categoria' => 4,
                'ubicacion' => 'Milán',
                'imagen' => 'milano_centro.jpg'
            ],
            [
                'nombre' => 'Geneva View',
                'direccion' => 'Quai du Mont-Blanc 20, Ginebra, Suiza',
                'descripcion' => 'Vistas al lago y spa incluido.',
                'precio_noche' => 200.00,
                'categoria' => 5,
                'ubicacion' => 'Ginebra',
                'imagen' => 'geneva_view.jpg'
            ],
            [
                'nombre' => 'Tenerife Coast Resort',
                'direccion' => 'Playa del Duque, Tenerife, España',
                'descripcion' => 'Resort playero con piscina y actividades acuáticas.',
                'precio_noche' => 160.00,
                'categoria' => 5,
                'ubicacion' => 'Tenerife',
                'imagen' => 'tenerife_coast.jpg'
            ],
            [
                'nombre' => 'Oporto River Hotel',
                'direccion' => 'Rua das Flores 120, Oporto, Portugal',
                'descripcion' => 'Hotel romántico con vistas al río Duero.',
                'precio_noche' => 115.00,
                'categoria' => 3,
                'ubicacion' => 'Oporto',
                'imagen' => 'oporto_river.jpg'
            ],
            [
                'nombre' => 'Nice Azure Stay',
                'direccion' => 'Promenade des Anglais 150, Niza, Francia',
                'descripcion' => 'Alojamiento frente al mar Mediterráneo.',
                'precio_noche' => 145.00,
                'categoria' => 4,
                'ubicacion' => 'Niza',
                'imagen' => 'nice_azure.jpg'
            ]
        ]);
        DB::table('hoteles')->insert([
            [
                'nombre' => 'Eiffel Boutique Hotel',
                'direccion' => '18 Rue Cler, París, Francia',
                'descripcion' => 'Boutique con decoración artística y desayuno francés.',
                'precio_noche' => 145.00,
                'categoria' => 4,
                'ubicacion' => 'París',
                'imagen' => 'eiffel_boutique.jpg'
            ],
            [
                'nombre' => 'Hostal Montmartre',
                'direccion' => 'Rue Lepic 30, París, Francia',
                'descripcion' => 'Económico, ideal para mochileros y jóvenes.',
                'precio_noche' => 75.00,
                'categoria' => 2,
                'ubicacion' => 'París',
                'imagen' => 'montmartre_hostal.jpg'
            ],
            [
                'nombre' => 'Champs Élysées Palace',
                'direccion' => 'Avenue des Champs-Élysées 100, París, Francia',
                'descripcion' => 'Hotel lujoso en la avenida más icónica de París.',
                'precio_noche' => 250.00,
                'categoria' => 5,
                'ubicacion' => 'París',
                'imagen' => 'champs_palace.jpg'
            ]
        ]);
        DB::table('hoteles')->insert([
            [
                'nombre' => 'Camden Lodge Hotel',
                'direccion' => 'Camden High St 45, Londres, Reino Unido',
                'descripcion' => 'Hotel alternativo cerca de mercados y música en vivo.',
                'precio_noche' => 120.00,
                'categoria' => 3,
                'ubicacion' => 'Londres',
                'imagen' => 'camden_lodge.jpg'
            ],
            [
                'nombre' => 'Westminster Suites',
                'direccion' => '10 Downing St, Londres, Reino Unido',
                'descripcion' => 'Ideal para negocios, cerca del Parlamento.',
                'precio_noche' => 190.00,
                'categoria' => 4,
                'ubicacion' => 'Londres',
                'imagen' => 'westminster_suites.jpg'
            ],
            [
                'nombre' => 'Thames River Resort',
                'direccion' => 'Tower Bridge Rd, Londres, Reino Unido',
                'descripcion' => 'Vistas al río Támesis y excelente restaurante.',
                'precio_noche' => 230.00,
                'categoria' => 5,
                'ubicacion' => 'Londres',
                'imagen' => 'thames_resort.jpg'
            ]
        ]);
        DB::table('hoteles')->insert([
            [
                'nombre' => 'Trastevere Inn',
                'direccion' => 'Via della Scala 25, Roma, Italia',
                'descripcion' => 'Encanto local en el barrio bohemio de Roma.',
                'precio_noche' => 95.00,
                'categoria' => 3,
                'ubicacion' => 'Roma',
                'imagen' => 'trastevere_inn.jpg'
            ],
            [
                'nombre' => 'Hotel Fontana di Trevi',
                'direccion' => 'Via del Lavatore 52, Roma, Italia',
                'descripcion' => 'A pasos de la fuente más famosa de Roma.',
                'precio_noche' => 160.00,
                'categoria' => 4,
                'ubicacion' => 'Roma',
                'imagen' => 'trevi_hotel.jpg'
            ],
            [
                'nombre' => 'Imperial Palace Roma',
                'direccion' => 'Via Nazionale 130, Roma, Italia',
                'descripcion' => 'Estilo imperial con spa y vistas al Coliseo.',
                'precio_noche' => 240.00,
                'categoria' => 5,
                'ubicacion' => 'Roma',
                'imagen' => 'imperial_palace.jpg'
            ]
        ]);
        DB::table('hoteles')->insert([
            [
                'nombre' => 'Alfama Hostel',
                'direccion' => 'Rua dos Remédios 45, Lisboa, Portugal',
                'descripcion' => 'Ambiente juvenil y ubicación céntrica.',
                'precio_noche' => 60.00,
                'categoria' => 2,
                'ubicacion' => 'Lisboa',
                'imagen' => 'alfama_hostel.jpg'
            ],
            [
                'nombre' => 'Lisboa Royal Hotel',
                'direccion' => 'Praça do Comércio 12, Lisboa, Portugal',
                'descripcion' => 'Hotel elegante frente al río Tajo.',
                'precio_noche' => 140.00,
                'categoria' => 4,
                'ubicacion' => 'Lisboa',
                'imagen' => 'lisboa_royal.jpg'
            ],
            [
                'nombre' => 'Belém Luxury Suites',
                'direccion' => 'Avenida Brasília 100, Lisboa, Portugal',
                'descripcion' => 'Suites de lujo junto al Monasterio de los Jerónimos.',
                'precio_noche' => 210.00,
                'categoria' => 5,
                'ubicacion' => 'Lisboa',
                'imagen' => 'belem_suites.jpg'
            ]
        ]);                         
    }
}
