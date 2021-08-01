<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monto_envio' => rand(10,1000),
            'tasa_envio' => rand(1,100),
            'fecha_fin' => $this->faker->dateTimeBetween('now', '+1 months'),

            'user_id' => rand(1,10),
            'statu_id' => rand(1,3),
            'client_sender_id' => rand(1,30),
            'client_receiver_id' => rand(1,30),
        ];
    }
}
