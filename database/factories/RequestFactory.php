<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Computer;

class RequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Request::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::where('role_id', Role::where('name', 'STUDENT')->pluck('id'))->pluck('id')),
            'computer_id' => $this->faker->randomElement(Computer::pluck('id')),
            'is_accepted' => $this->faker->boolean(),
            'start_date' => $this->faker->dateTimeBetween('-1 months', '+ 2 months')
        ];
    }
}
