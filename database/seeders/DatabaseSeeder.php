<?php

namespace Database\Seeders;

use App\Models\Transaccion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            //UserSeeder::class,
            RolesTableSeeder::class,
            FacturaSeeder::class,
            TransaccionSeeder::class,
            FacturacionSeeder::class
        ]);
    }
}
