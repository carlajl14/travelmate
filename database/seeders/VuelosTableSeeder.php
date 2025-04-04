<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VuelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data to seed the vuelos table
        DB::table('vuelos')->insert([
            'origen' => 'Madrid',
            'destino' => 'París',
            'fecha_salida' => '2025-04-10',
            'fecha_llegada' => '2025-04-10',
            'precio' => 120.50,
            'aerolinea' => 'Air France',
            'duracion' => '01:30',
            'codigo_vuelo' => 'AF1234'
        ],
        [
            'origen' => 'Barcelona',
            'destino' => 'Londres',
            'fecha_salida' => '2025-05-15',
            'fecha_llegada' => '2025-05-15',
            'precio' => 150.00,
            'aerolinea' => 'British Airways',
            'duracion' => '02:00',
            'codigo_vuelo' => 'BA5678'
        ],
        [
            'origen' => 'Valencia',
            'destino' => 'Roma',
            'fecha_salida' => '2025-06-20',
            'fecha_llegada' => '2025-06-20',
            'precio' => 130.75,
            'aerolinea' => 'Iberia',
            'duracion' => '01:45',
            'codigo_vuelo' => 'IB9101'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Sevilla',
            'destino' => 'Lisboa',
            'fecha_salida' => '2025-07-25',
            'fecha_llegada' => '2025-07-25',
            'precio' => 110.00,
            'aerolinea' => 'TAP Air Portugal',
            'duracion' => '01:20',
            'codigo_vuelo' => 'TP2345'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Bilbao',
            'destino' => 'Bruselas',
            'fecha_salida' => '2025-08-30',
            'fecha_llegada' => '2025-08-30',
            'precio' => 140.00,
            'aerolinea' => 'Brussels Airlines',
            'duracion' => '02:15',
            'codigo_vuelo' => 'SN6789'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Málaga',
            'destino' => 'Milán',
            'fecha_salida' => '2025-09-05',
            'fecha_llegada' => '2025-09-05',
            'precio' => 125.00,
            'aerolinea' => 'Alitalia',
            'duracion' => '01:50',
            'codigo_vuelo' => 'AZ1234'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Alicante',
            'destino' => 'Ginebra',
            'fecha_salida' => '2025-10-10',
            'fecha_llegada' => '2025-10-10',
            'precio' => 135.00,
            'aerolinea' => 'easyJet',
            'duracion' => '02:30',
            'codigo_vuelo' => 'U25678'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Gran Canaria',
            'destino' => 'Tenerife',
            'fecha_salida' => '2025-11-15',
            'fecha_llegada' => '2025-11-15',
            'precio' => 90.00,
            'aerolinea' => 'Binter Canarias',
            'duracion' => '00:45',
            'codigo_vuelo' => 'NT5678'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Santiago de Compostela',
            'destino' => 'Oporto',
            'fecha_salida' => '2025-12-20',
            'fecha_llegada' => '2025-12-20',
            'precio' => 95.00,
            'aerolinea' => 'Ryanair',
            'duracion' => '01:10',
            'codigo_vuelo' => 'FR1234'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Palma de Mallorca',
            'destino' => 'Niza',
            'fecha_salida' => '2025-01-05',
            'fecha_llegada' => '2025-01-05',
            'precio' => 115.00,
            'aerolinea' => 'Vueling',
            'duracion' => '01:35',
            'codigo_vuelo' => 'VY5678'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Bilbao',
            'destino' => 'Londres',
            'fecha_salida' => '2025-02-10',
            'fecha_llegada' => '2025-02-10',
            'precio' => 160.00,
            'aerolinea' => 'British Airways',
            'duracion' => '01:50',
            'codigo_vuelo' => 'BA9101'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Valencia',
            'destino' => 'París',
            'fecha_salida' => '2025-03-15',
            'fecha_llegada' => '2025-03-15',
            'precio' => 140.00,
            'aerolinea' => 'Air France',
            'duracion' => '01:45',
            'codigo_vuelo' => 'AF2345'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Madrid',
            'destino' => 'Roma',
            'fecha_salida' => '2025-04-20',
            'fecha_llegada' => '2025-04-20',
            'precio' => 130.00,
            'aerolinea' => 'Iberia',
            'duracion' => '02:00',
            'codigo_vuelo' => 'IB6789'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Barcelona',
            'destino' => 'Bruselas',
            'fecha_salida' => '2025-05-25',
            'fecha_llegada' => '2025-05-25',
            'precio' => 145.00,
            'aerolinea' => 'Brussels Airlines',
            'duracion' => '01:55',
            'codigo_vuelo' => 'SN1234'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Sevilla',
            'destino' => 'Lisboa',
            'fecha_salida' => '2025-06-30',
            'fecha_llegada' => '2025-06-30',
            'precio' => 110.00,
            'aerolinea' => 'TAP Air Portugal',
            'duracion' => '01:20',
            'codigo_vuelo' => 'TP5678'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Málaga',
            'destino' => 'Milán',
            'fecha_salida' => '2025-07-05',
            'fecha_llegada' => '2025-07-05',
            'precio' => 125.00,
            'aerolinea' => 'Alitalia',
            'duracion' => '01:50',
            'codigo_vuelo' => 'AZ9101'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Gran Canaria',
            'destino' => 'Tenerife',
            'fecha_salida' => '2025-08-10',
            'fecha_llegada' => '2025-08-10',
            'precio' => 90.00,
            'aerolinea' => 'Binter Canarias',
            'duracion' => '00:45',
            'codigo_vuelo' => 'NT6789'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Santiago de Compostela',
            'destino' => 'Oporto',
            'fecha_salida' => '2025-09-15',
            'fecha_llegada' => '2025-09-15',
            'precio' => 95.00,
            'aerolinea' => 'Ryanair',
            'duracion' => '01:10',
            'codigo_vuelo' => 'FR5678'
        ]);
        DB::table('vuelos')->insert([
            'origen' => 'Palma de Mallorca',
            'destino' => 'Niza',
            'fecha_salida' => '2025-10-20',
            'fecha_llegada' => '2025-10-20',
            'precio' => 115.00,
            'aerolinea' => 'Vueling',
            'duracion' => '01:35',
            'codigo_vuelo' => 'VY9101'
        ]);
    }
}
