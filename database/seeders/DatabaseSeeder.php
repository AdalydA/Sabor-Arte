<?php

namespace Database\Seeders;

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

        $this->call(CatEstatusSeeder::class);
        $this->call(CatPerfilesSeeder::class);
        $this->call(OpcionesMenuSeeder::class);
        $this->call(PermisosPerfilesSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
