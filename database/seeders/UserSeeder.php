<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
//        $faker = faker::create();
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
//        for($i=0; $i < 1 ; $i++){
//            DB::table('users')->insert([
//                'name' => $faker->name,
//                'email' => $faker->email,
//                'email_verified_at' => $faker->DateTime,
//                'password' => $faker->password,
//                'remember_token' => "eyJEfxjoYZgeFONFh7HgQ",
//                'created_at' => $faker->DateTime,
//                'updated_at' => $faker->DateTime,
//            ]);
//        }


    }
}
