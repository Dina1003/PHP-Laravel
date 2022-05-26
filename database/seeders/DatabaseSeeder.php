<?php

namespace Database\Seeders;

use App\Models\alamat_cafe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pengguna;

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

        pengguna::create([
            'username'=> 'Dina_12',
            'email'=> 'dina@gmail.com',
            'pass'=> '12345',
            'pass1'=>'12345',
            'id_admin'=>'123',
            'id_head_kitchen'=> '131415',
            'id_waiter'=>'456',
            'id_chef'=>'789',
            'id_staff_warehouse'=>'101112'
        ]);

        alamat_cafe::create([
            'alamat'=> 'Jl padang baru',
            'kota' => 'Padang'
        ]);
    }
}
