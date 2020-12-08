<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Like;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Like::create(['user_id'=>1,'intpath_id' => 1]);
        Like::create(['user_id'=>1,'intpath_id' => 2]);
        Like::create(['user_id'=>2,'intpath_id' => 1]);
        Like::create(['user_id'=>2,'intpath_id' => 2]);
        Like::create(['user_id'=>3,'intpath_id' => 1]);
        Like::create(['user_id'=>4,'intpath_id' => 1]);

    }
}
