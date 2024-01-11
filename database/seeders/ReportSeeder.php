<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //report seeder for 10 random data 
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $report = [
                'date' => $faker->date,
                'type' => $faker->randomElement(['Weekly', 'Monthly', 'Yearly']),
                'salesdetails' => $faker->paragraph,
                'sales' => $faker->randomFloat(2, 100, 1000),
            ];

            \DB::table('report')->insert($report);
        }
    }
}
