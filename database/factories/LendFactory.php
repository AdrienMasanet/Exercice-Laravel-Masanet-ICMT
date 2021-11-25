<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use App\Models\Lend;
use App\Models\Request;

class LendFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lend::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $isReturned = $this->faker->boolean();
        $endingAt = Carbon::createFromTimestamp(($this->faker->dateTimeBetween('-1 months', '+ 2 months')->getTimestamp()));

        return [
            'user_id' => $this->faker->randomElement(Request::pluck('user_id')),
            'is_returned' => $isReturned,
            'comment' => $this->faker->text(240),
            'begin_at' => Carbon::createFromFormat('Y-m-d H:i:s', $endingAt)->subDays( $this->faker->numberBetween( 1, 60 ) ),
            'returned_at' => $isReturned?$endingAt:null,
            'ending_at' => $endingAt
        ];
    }
}
