<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\S1DogReport>
 */
class S1DogReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pic' => $this->faker->imageUrl(),
            'nrc_name' => $this->faker->name,
            'nick_name' => $this->faker->name,
            'age' => $this->faker->numberBetween(1, 20),
            'height_feet' => $this->faker->numberBetween(1, 10),
            'height_inches' => $this->faker->numberBetween(1, 12),
            'address' => $this->faker->address,
            'country_code' => $this->faker->numberBetween(1, 999),
            'phone_number' => $this->faker->phoneNumber(),
            'about_report' => $this->faker->text,
            'consent_to_responsibility' => $this->faker->boolean,
            'report_state' => $this->faker->word,
            'last_updated' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'moderated_by' => $this->faker->name,
            'report_division' => $this->faker->word,
            'reported_by' => $this->faker->name,
            'skin_color' => $this->faker->word,
            'physical_appearance' => $this->faker->text,
            'facebook_username' => $this->faker->name,
            'telegram_username' => $this->faker->name,
        ];
    }
}
