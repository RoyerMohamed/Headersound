<?php

namespace Database\Seeders;

use App\Models\Campagne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampagneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campagne::create([
            'nom'=>'Campagne de mars',
            'reduction' => 20, 
            'date_debut'=> '2022-03-01', 
            'date_fin'=> '2022-03-31', 
        ]);
        Campagne::create([
            'nom'=>'Campagne de juillet',
            'reduction' => 90, 
            'date_debut'=> '2022-07-01', 
            'date_fin'=> '2022-07-31', 
        ]);
    }
}
