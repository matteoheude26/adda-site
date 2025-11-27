<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Atelier>
 */
class AtelierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre'=>'Atelier '.$this->faker->word(),
            'description'=>$this->faker->sentence(12,true),
            'details'=>$this->faker->paragraphs(3,true),
            'picto'=>$this->faker->image(),
            'jour'=>$this->faker->dayOfWeek,
            'horaire'=>$this->faker->time('H:i'),
            'duree'=>$this->faker->numberBetween(1,3),
        ];
    }
}
