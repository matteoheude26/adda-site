<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Atelier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $pass = \Illuminate\Support\Facades\Hash::make('P@ssw0rd');

         \App\Models\User::factory()->create([
             'name' => 'lmct65',
             'email' => 'lmct65@local.fr',
             'password'=>$pass,
             'role'=>0,
         ]);

        \App\Models\User::factory()->create([
            'name' => 'administrator',
            'email' => 'admin@local.fr',
            'password'=>$pass,
            'role'=>1,
        ]);

        Atelier::factory(5)->create();
    }
}
