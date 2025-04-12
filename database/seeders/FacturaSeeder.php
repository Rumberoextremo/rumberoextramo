<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FacturaSeeder extends Seeder
{
    public function run()
    {
        // Sembrar datos en la tabla facturas
        DB::table('facturas')->insert([
            [
                'fecha' => Carbon::now()->subDays(10),
                'numero' => 'F001',
                'monto' => 1500.00,
                'cliente_id' => 1, // Asegúrate de que este cliente exista
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::now()->subDays(5),
                'numero' => 'F002',
                'monto' => 2500.50,
                'cliente_id' => 2, // Asegúrate de que este cliente exista
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'fecha' => Carbon::now()->subDays(1),
                'numero' => 'F003',
                'monto' => 300.75,
                'cliente_id' => 3, // Asegúrate de que este cliente exista
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
