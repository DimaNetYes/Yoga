<?php

namespace Database\Factories;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Schedule::class; 

      /**
     * The name of the table.
     *
     * @var string
     */
    protected $table = 'schedule';
    public function definition()
    {
        $startTime = $this->faker->time('H:i:s'); // Устанавливаем время начала в 00:00
        $endTime = Carbon::instance($startTime)->addHour(); 

        return [
            'course_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 10), // Замените 10 на максимальный ID пользователя
            'start_time' => $this->faker->time('H:i:s'),
            'end_time' => $endTime,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
