<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use App\Models\Repair;
use App\Models\Computer;
use App\Models\Repairer;
use App\Models\User;
use App\Models\Role;

class RepairFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repair::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $returnedAt = $this->faker->randomElement(null, Carbon::createFromTimestamp(($this->faker->dateTimeBetween('-1 months', '+ 2 months')->getTimestamp())));

        return [
            'computer_id' => $this->faker->randomElement(Computer::pluck('id')),
            'repairer_id' => $this->faker->randomElement(Repairer::pluck('id')),
            'client_id' => $this->faker->randomElement(User::where('role_id', Role::where('name', 'STUDENT')->pluck('id'))->pluck('id')),
            'diagnostic' => $this->faker->paragraph(),
            'is_repaired' => $returnedAt?true:false,
            'is_broken' => $returnedAt?false:true,
            'returned_at' => $returnedAt
        ];
    }
}
