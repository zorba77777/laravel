<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $faker = Factory::create('ru_RU');
        for ($i = 0; $i < 5; $i++) {
            $data[] = [
                'name' => $faker->sentence(rand(3, 10))
            ];
        }

        return $data;
    }
}
