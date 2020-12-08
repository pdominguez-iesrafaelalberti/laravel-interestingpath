<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name' =>'Administrador',
        'email' =>'admin@rrss.es',
        'email_verified_at' => now(),
        'password' => Hash::make('1234'), // password
        'remember_token' => Str::random(10),
        'role' => 'admin',
        ]);
        User::create([
            'name' =>'Cliente',
            'email' =>'client@rrss.es',
            'email_verified_at' => now(),
            'password' => Hash::make('1234'), // password
            'remember_token' => Str::random(10),
            'role' =>'client',
            ]);
            User::create([
                'name' =>'Manager',
                'email' =>'manager@rrss.es',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // password
                'remember_token' => Str::random(10),
                'role' =>'manager',
                ]);
    

    
    }
}
