<?php

namespace Database\Seeders;
use App\Models\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();

        for($i=0; $i < 20 ; $i++){
            DB::table('Person')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'created_at' => $faker->DateTime,
                'updated_at' => $faker->DateTime,
            ]);
        }


    }
}
