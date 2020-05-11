<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {

            DB::table('masyarakats')->insert([
                'nik' => $faker->nik(16),
                'nama' => $faker->unique()->name(35),
                'username' => $faker->username(25),
                'password' => $faker->password(8),
                'telpon' => $faker->phoneNumber,
            ]);
        }
    }
}
