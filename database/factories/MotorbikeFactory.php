<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motorbike>
 */
class MotorbikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'engine' => 'Yamaha',
            'suspension' => 'WFH',
            'transmition' => '2 Tak',
        ];
    }
}
