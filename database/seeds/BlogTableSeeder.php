<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    		DB::table('blogs')->insert([
    				'title' => str_random(10),
    				'content' => str_random(50),	
    				'nomer' => rand(0,10)	


    			]);


    }
}
