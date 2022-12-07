<?php

namespace Database\Factories;

use App\Models\product_model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class product_factoryFactory extends Factory
{

    protected $model = product_model::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Baju Santai Erigo Full Size',
            'categories' => 'baju',
            'price' => 599.5
        ];
    }
}
