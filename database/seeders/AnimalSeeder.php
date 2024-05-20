<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'species' => 'Gorila',
            'scientific_name' => 'Gorilla',
            'limit_age' => 50,
            'description' => 'El gorila, majestuoso habitante de las selvas tropicales de África central, se destaca por su imponente tamaño y su apacible comportamiento social. Con su pelaje denso que varía en tonalidades de gris a marrón y sus grandes cabezas adornadas con prominentes crestas óseas, los gorilas son fácilmente reconocibles en su hábitat natural. Estos primates, principalmente herbívoros, se alimentan de una variedad de frutas, hojas y brotes, adaptándose a los recursos estacionales de su entorno. Viven en grupos liderados por un macho dominante, el "silverback", que guía y protege a las hembras y crías.',
        ]);
    }
}
