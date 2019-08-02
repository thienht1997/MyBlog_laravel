<?php

use Illuminate\Database\Seeder;

class Postseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('post')->insert([
                'name' => $faker->title,
                'content' => $faker->paragraph,
            ]);
        }
    }
}
