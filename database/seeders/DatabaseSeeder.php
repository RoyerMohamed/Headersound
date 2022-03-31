<?php

namespace Database\Seeders;

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
        $this->call([
            GammeSeeder::class, 
            ArticleSeeder::class,
            CampagneSeeder::class,
            Campagne_articleSeeder::class, 
            RoleSeeder::class 
        ]) ;
    }
}
