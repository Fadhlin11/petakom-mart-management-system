<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //vendor seeder for 10 random data 
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $vendor = [
                'name' => $faker->company,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'address' => $faker->address,
                'items' => $faker->words(3, true),
                'price' => $faker->randomFloat(2, 10, 100),
                'others' => $faker->sentence,
            ];

            \DB::table('vendor')->insert($vendor);
        }
    }
}
