<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coustomer;
use Faker\Factory as Faker;

class Coustomerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i <= 100; $i++) {
            $coustomer = new coustomer;
            $coustomer->name = $faker->name;
            $coustomer->email = $faker->email;
            $coustomer->country = $faker->country;
            $coustomer->state = $faker->state;
            $coustomer->address = $faker->address;
            $coustomer->Gender = "M";
            $coustomer->dob = $faker->date;
            $coustomer->password = $faker->password;
            $coustomer->save();
        }
    }
}
