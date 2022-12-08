<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cgy>
 */
class CgyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(15),
            'pic' => $this->faker->imageUrl(640, 480, 'zoo'),
            'enabled' => $this->faker->randomElement([true, false]),
            //效果跟直接用php的rand()函式一樣
            'sort' => $this->faker->numberBetween(0, 20),
            'content' => $this->faker->sentence,
            'article_id' => rand(1, 10),
            'enabled_at' => Carbon::createFromFormat('Y-m-d', $this->faker->date)->now()->addDays(rand(0, 20)),
        ];
    }
}