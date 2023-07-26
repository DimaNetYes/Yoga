<?php

namespace Database\Factories;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Subscription::class;
    public function definition()
    {
        $startTime = Carbon::createFromTime(0, 0, 0); // Устанавливаем время начала в 00:00
        $endTime = Carbon::instance($startTime)->addHour(); 

        return [
            'user_id' => $this->faker->numberBetween(1, 10), // Замените 10 на максимальный ID пользователя
            'course_id' => $this->faker->numberBetween(1, 5), // Замените 5 на максимальный ID курса
            'price_id' => $this->faker->numberBetween(1, 3), // Замените 3 на максимальный ID цены
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
