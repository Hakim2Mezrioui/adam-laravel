<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class addPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // DB::table("posts")->insert([
        //     "title"=>"title",
        //     "content"=>"content",
        // ]);

        // for($i = 0; $i<10; $i++) {
            
        //     DB::table("posts")->insert([
        //         "title"=>"title",
        //         "content"=>"content",
        //     ]);
        // }
        for($i = 0; $i<10; $i++) {
            
            DB::table("posts")->insert([
                "title"=>fake()->name(),
                "content"=>fake()->text(20),
            ]);
        }
    }
}
