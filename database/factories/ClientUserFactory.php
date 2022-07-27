<?php

namespace Database\Factories;

use App\Enums\UserStatus;
use App\Models\ClientUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClientUser>
 */
class ClientUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'email' => fake()->email,
            'password' => bcrypt('password'),
            'phone_number' => fake()->e164PhoneNumber,
            'status' => UserStatus::ACTIVE,
        ];
    }
}
