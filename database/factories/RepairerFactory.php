<?php

namespace Database\Factories;

use App\Models\Repairer;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepairerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repairer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->e164PhoneNumber(),
            'siret' => $this->faker->siret(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'postal_code' => intval($this->faker->postcode()),
            'country' => 'France',
            'is_internal' => $this->faker->boolean()
        ];
    }
}
