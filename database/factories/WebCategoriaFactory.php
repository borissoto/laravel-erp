<?php

namespace Database\Factories;

use App\Models\WebCategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WebCategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WebCategoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom_categoria = $this->faker->unique()->word(20);

        return [
            'nom_categoria' => $nom_categoria,
            'slug' => Str::slug($nom_categoria)
        ];
    }
}
