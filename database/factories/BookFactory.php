<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number_available = random_int(1,15);



        return [
            'titulo' => fake()->title(),
            'descripcion' => Str::Random(30),
            'isbn' => Str::Random(13),
            'copias_totales' => $number_available,
            'copias_disponibles' => $number_available,
            'disponible' => true

            //
        ];
    }
}
