<?php

namespace App\Rules;

use App\Models\PeModulo;
use Illuminate\Contracts\Validation\Rule;

class Percentage implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

     public $residencia_id;
     public $per;
     public $flag;

    public function __construct( $residencia_id, $per, $flag)
    {
        //
        $this->residencia_id = $residencia_id;
        $this->per = $per;
        $this->flag = $flag;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //

        $porcentaje_suma = PeModulo::where('pe_residencia_id', $this->residencia_id )->sum('porcentaje');
        $porcentaje_suma = $porcentaje_suma - $this->flag;
        return $porcentaje_suma + $this->per <= 100;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'La suma de porcentajes no puede ser mayor a 100%.';
    }
}
