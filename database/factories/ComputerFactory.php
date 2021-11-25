<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Computer;
use App\Models\Brand;

class ComputerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Computer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => $this->faker->randomElement(null, $this->faker->randomElement(Brand::pluck('id'))),
            'name' => $this->faker->word(),
            'comment' => $this->faker->text(240),
            'is_available' => $this->faker->boolean(),
            'image' => $this->faker->imageUrl()
        ];
    }
}
