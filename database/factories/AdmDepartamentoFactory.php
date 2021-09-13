<?php

namespace Database\Factories;

use App\Models\AdmDepartamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdmDepartamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AdmDepartamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'departamento' => 'Beni',
            'extension' => 'Bn',            
        ];
    }
}
