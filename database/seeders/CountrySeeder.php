<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $countries = array("México","Colombia", "Venezuela", "Chile", "Peru", "Estados Unidos", "Argentina", "Bolivia", "Argentina", "Cuba", "Ecuador", "Costa Rica");
         foreach ($countries as $country){
            Country::create([
                'name' => $country
              ]);
        }
    }
}
