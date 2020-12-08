<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Interestingpath;

class InterestingpathsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $path1=Interestingpath::create(['user_id'=>1,'path' => 'https://freemusicarchive.org/about', 'description'=>'music open source']);
        $path2=Interestingpath::create(['user_id'=>1,'path' => 'https://swapi.dev/', 'description'=>'api starwars']);
        $path3=Interestingpath::create(['user_id'=>2,'path' => 'https://pixabay.com/es/', 'description'=>'image open source']);
        $path4=Interestingpath::create(['user_id'=>2,'path' => 'https://www.youtube.com/watch?v=kGWPmMmZaXQ','description'=>'video python']);
        $path5=Interestingpath::create(['user_id'=>1,'path' => 'https://icons.getbootstrap.com/icons/bookmark-star/','description'=>'iconos bootstrap']);

     }
}
