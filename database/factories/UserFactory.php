<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'name' => fake()->name(),
//            'email' => fake()->unique()->safeEmail(),
//            'email_verified_at' => now(),
//            'password' => static::$password ??= Hash::make('password'),
//            'remember_token' => Str::random(10),
            'name'              => 'Md Thorat Islam',
            'email'             => 'mdthoratislam1993.oni@gmail.com',
            'phone'             => '01517123534',
            'email_verified_at' => currentDateTime(),
            'user_photo_path'   => 'public/assest/user_photo/images.png',
            'user_sign_path'    => 'public/assest/user_sign/sign_2.png',
            'created_by'        => 1,
            // created_at value set carbon use date time format and now() function use for current date time
            'created_at'        => currentDateTime(),
            'updated_by'        => null,
            'updated_at'        => null,
            'password'          => static::$password ??= Hash::make('password'),
            'remember_token'    => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
