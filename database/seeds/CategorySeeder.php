<?php
use Illuminate\Database\Seeder;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        for ($i = 1; $i <= $limit; $i++) {
            DB::table('category')->insert([
                'id' => $i,
                'name' => $faker->title,
            ]);
        }
    }
}
