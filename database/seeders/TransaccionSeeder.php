<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaccionSeeder extends Seeder
{
    public function run()
    {
        // Sembrar datos en la tabla transacciones
        DB::table('transacciones')->insert([
            [
                'nombre' => 'Pago de factura F001',
                'fecha' => Carbon::now()->subDays(10),
                'monto' => 1500.00,
                'tipo' => 'recibido',
                'monto_dolares' => 150.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pago de factura F002',
                'fecha' => Carbon::now()->subDays(5),
                'monto' => 2500.50,
                'tipo' => 'recibido',
                'monto_dolares' => 250.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nombre' => 'Pago de factura F003',
                'fecha' => Carbon::now()->subDays(1),
                'monto' => 300.75,
                'tipo' => 'enviado',
                'monto_dolares' => 30.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
