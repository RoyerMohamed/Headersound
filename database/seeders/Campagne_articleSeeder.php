<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Campagne_articleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campagne_articles')->insert([
            'campagne_id'=> 1, 
            'article_id'=> 1,  
        ]);
        DB::table('campagne_articles')->insert([
            'campagne_id'=> 2, 
            'article_id'=> 2,  
        ]);
    }
}
