<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Crear roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'aliado']);
        Role::create(['name' => 'punto']);
        Role::create(['name' => 'user']);
        // Agrega más roles según sea necesario
    }
}

