<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statu;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = array("En proceso","Procesada", "Cancelada");
         foreach ($status as $statute){
            Statu::create([
                'name' => $statute
              ]);
        }
    }
}
