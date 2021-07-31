<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
use App\Models\Statu;
use App\Models\Country;
use App\Models\Client;
use App\Models\Transaction;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(RolSeeder::class);
        $this->call(StatuSeeder::class);
        $this->call(CountrySeeder::class);
        User::factory(10)->create();
        Client::factory(30)->create();
        Transaction::factory(50)->create();
    }
}
