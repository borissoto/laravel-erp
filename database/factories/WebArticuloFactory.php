<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WebArticulo;
use App\Models\WebCategoria;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WebArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WebArticulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $articulo = $this->faker->unique()->sentence();

        return [
            'nom_articulo' => $articulo,
            'slug' => Str::slug($articulo),
            'extracto' => $this->faker->text(250),
            'cuerpo' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2]),
            'web_categoria_id' => WebCategoria::all()->random()->id,
            'user_id' => User::all()->random()->id,
            
        ];
    }
}
