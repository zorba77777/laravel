<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData()
    {
        $data = [];
        $faker = Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'category_id' => $faker->numberBetween(1, 5),
                'source_id' => $faker->numberBetween(1, 10),
                'text' => $faker->realText(rand(100, 200))
            ];
        }

        return $data;
    }
}
