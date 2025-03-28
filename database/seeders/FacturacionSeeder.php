<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturacionSeeder extends Seeder
{
    public function run()
    {
        // Sembrar datos en la tabla clientes
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan Pérez',
                'email' => 'juan.perez@example.com',
                'telefono' => '555-1234',
                'direccion' => 'Calle Falsa 123',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'María López',
                'email' => 'maria.lopez@example.com',
                'telefono' => '555-5678',
                'direccion' => 'Avenida Siempre Viva 742',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Carlos García',
                'email' => 'carlos.garcia@example.com',
                'telefono' => '555-8765',
                'direccion' => 'Boulevard de los Sueños 456',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

        // Sembrar datos en la tabla facturacion
        DB::table('facturacion')->insert([
            [
                'fecha' => Carbon::create(2023, 1, 15), // Enero 2023
                'numero' => 'F001',
                'monto' => 1500.00,
                'cliente_id' => 1, // Juan Pérez
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::create(2023, 1, 20), // Enero 2023
                'numero' => 'F002',
                'monto' => 2000.50,
                'cliente_id' => 2, // María López
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::create(2023, 2, 5), // Febrero 2023
                'numero' => 'F003',
                'monto' => 300.75,
                'cliente_id' => 3, // Carlos García
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::create(2023, 2, 15), // Febrero 2023
                'numero' => 'F004',
                'monto' => 450.25,
                'cliente_id' => 1, // Juan Pérez
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::create(2023, 3, 10), // Marzo 2023
                'numero' => 'F005',
                'monto' => 1200.00,
                'cliente_id' => 2, // María López
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}