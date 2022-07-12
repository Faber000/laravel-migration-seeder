<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            
            $newTrain->azienda = $faker->lexify();
            $newTrain->st_partenza = $faker->lexify();
            $newTrain->st_arrivo = $faker->lexify();
            $newTrain->h_partenza = $faker->time();
            $newTrain->h_arrivo = $faker->time();
            $newTrain->d_partenza = $faker->dateTime();
            $newTrain->num_carrozze = rand(1, 50);

            $newTrain->save();
        }
    }
}
