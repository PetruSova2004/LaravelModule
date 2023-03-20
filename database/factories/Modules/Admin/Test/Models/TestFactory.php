<?php

namespace Database\Factories\Modules\Admin\Test\Models;

use App\Modules\Admin\Test\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Test::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'number' => $this->faker->numberBetween([1,7]),
        ];
    }
}
