<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Beer;
class BeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 15; $i++ ){
            $beer = new Beer();
            $beer->nome = $faker->word();
            $beer->birrificio = $faker->lastName();
            $beer->nazione = $faker->state();
            $beer->stile = $faker->word();
            $beer->colore = $faker->colorName();
            $beer->gradazione = $faker->numberBetween(6,15);
            $beer->bicchiere_consigliato = $faker->word();
            $beer->formato = $faker->randomFloat(2, 0,3);
            $beer->confezione = $faker->word();
            $beer->prezzo = $faker->randomNumber(3);
            $beer->sconto = $faker->boolean();
            $beer->descrizione = $faker->text();
            $beer->voto = $faker->randomFloat(2, 1, 10);
            $beer->save();
        }
        
    }
}
