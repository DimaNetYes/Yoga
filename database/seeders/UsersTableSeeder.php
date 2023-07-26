<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Задайте количество пользователей, которое вы хотите создать
         $count = 10;

        User::factory()->count($count)->create();
    }
}
