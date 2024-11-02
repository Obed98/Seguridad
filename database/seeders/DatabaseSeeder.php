<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rol;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $rol = new Rol;
        $rol->nombre = 'Administrador';
        $rol->save();

        $rol = new Rol;
        $rol->nombre = 'Usuario';
        $rol->save();

        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('secret123#');
        $user->rol_id = 1;
        $user->save();
    }
}
