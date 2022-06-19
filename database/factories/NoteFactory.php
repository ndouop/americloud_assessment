<?php

namespace Database\Factories;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $resource = $this->resource();

        return [
            'content' => $this->faker->sentence,
            'resource_id' => $resource::factory(),
            'resource_type' => $resource,
        ];
    }

    public function resource()
    {
        return $this->faker->randomElement([
            User::class,
        ]);
    }
}
