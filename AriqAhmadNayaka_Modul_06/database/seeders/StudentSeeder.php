<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(
            'id_ID' // Locale for Indonesian names and addresses
        );

        for ($i = 0; $i < 50; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'vocation' => $faker->randomElement(['Engineering', 'Medicine', 'Law', 'Arts', 'Science']),
                'age' => $faker->numberBetween(18, 30),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
