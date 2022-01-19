<?php

namespace Database\Factories;

use App\Models\Ceg;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CegFactory extends Factory
{   
    protected $model = \App\Models\Ceg::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nev' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'logo' => $this->faker->name(),
            'website' => $this->faker->name(),
            'created_at' => now(),
            // 'email_verified_at' => now(),
        ];
    }
}
