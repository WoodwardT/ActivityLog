<?php

namespace Database\Factories;

use App\Models\detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'distance' => $this->faker->numberBetween($min = 1, $max = 20),
            'latitude' => $this->faker->latitude($min = -44, $max = -45),
            'longitude' => $this->faker->longitude($min = 166, $max = 170),
            'created_at' => now(),
            'updated_at' => now(),
            'activity_id' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
