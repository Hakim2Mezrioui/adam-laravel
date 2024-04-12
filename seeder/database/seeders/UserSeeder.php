<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     "name"=>'adam',
        //     'email'=>'adam@gmail.com',
        //     'password'=>md5(123456),
        // ]);
        
        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                "name"=>fake()->name(),
                'email'=>fake()->email(),
                'password'=>md5(fake()->password()),
            ]);            
        }
    }
}
