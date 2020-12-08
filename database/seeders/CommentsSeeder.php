<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create(['user_id'=>1,'intpath_id' =>1, 'content'=>'esto es un comentario']);
        Comment::create(['user_id'=>2,'intpath_id' =>1, 'content'=>'increible, que envidia!']);
        $c3=Comment::create(['user_id'=>2,'intpath_id' =>3, 'content'=>'que bueno!']);
    }
}
