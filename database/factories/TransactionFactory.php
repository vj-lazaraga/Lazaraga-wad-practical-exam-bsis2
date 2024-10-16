<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'transaction_title'=> fake()-> sentence(),
            'description' => fake()-> sentence(),
            'status' => fake() ->randomElement(['successful', 'declined']),
            'total_amount' => fake()-> numberBetween(),
            'transaction_number' => fake()-> numberBetween()

        ];
    }
}
