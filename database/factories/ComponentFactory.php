<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Component;
use App\Models\Brand;

class ComponentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Component::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['case', 'alimentation', 'storage', 'motherboard', 'gpu', 'cpu', 'ram', 'cooling']),
            'brand_id' => $this->faker->randomElement(Brand::pluck('id')),
            'name' => $this->faker->company(),
            'serial_number' => $this->faker->isbn13(),
            'comment' => $this->faker->text(240)
        ];
    }
}
