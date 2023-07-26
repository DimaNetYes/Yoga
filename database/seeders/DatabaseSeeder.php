<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\Task;

use Database\Factories\TaskModelFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            SchedulesTableSeeder::class,
        ]);


        // \App\Models\User::factory(10)->create();

        /*DB::table('tasks')->insert([
                'title' => 'Task 1',
                'description' => 'description',
                'name' => 'task1',          
            ]);*/

        /*DB::table('tasks')->insert([
            'title' => Str::random(10),
            'name' => Str::random(10),
            'description' => Hash::make('12345'),
            
            ]);  */

            
        
    }
}
