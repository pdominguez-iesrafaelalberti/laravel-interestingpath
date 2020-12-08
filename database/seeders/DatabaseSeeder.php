<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Interestingpath;


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
        $this->call(UsuariosSeeder::class);
        User::factory(10)->create();
        $this->call(InterestingpathsSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(LikesSeeder::class);
       
    }
}
