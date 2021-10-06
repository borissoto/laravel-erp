<?php

namespace Database\Factories;

use App\Models\WebImage;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class WebImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WebImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $image = $this->faker->unique()->word(20);

        return [
             'url' => 'articulos/' . $this->faker->image('public/articulos', 640, 480, null, false)
        ];
    }
}
