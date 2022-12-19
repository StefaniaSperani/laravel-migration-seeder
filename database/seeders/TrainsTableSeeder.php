<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->name();
            $newTrain->stazione_arrivo = $faker->company();
            $newTrain->orario_partenza = $faker->dateTimeInInterval('-1 week', '+1 days');
            $newTrain->orario_arrivo = $faker->dateTimeInInterval('-1 week', '+3 days');
            $newTrain->codice_treno = $faker->randomNumber(5, true);
            $newTrain->numero_carrozze = $faker->randomDigitNot(0);

            $newTrain->save();
        }
        ;
    }
}