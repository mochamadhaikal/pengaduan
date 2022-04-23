<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        \App\Models\Petugas::create([
            'nama_petugas' => 'Administrator',
            'username' => 'admin', 
            'password' => Hash::make('12345678'),
            'telp' => '081334455',
            'level' => 'admin'
        ]);
    }
}
