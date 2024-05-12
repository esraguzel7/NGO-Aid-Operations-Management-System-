<?php

namespace Database\Factories;

use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    private static $gender = ['male', 'female'];
    private static $aviable_time_periods = [
        [8, 12],
        [13, 17],
        [17, 20]
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake();
        $def = [
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'gender' => self::$gender[rand(0, 1)],
            'phone' => fake()->unique()->phoneNumber(),
            'annual_income' => rand(80, 200) * 1000,
            'transportation' => rand(0, 1),
            'available_times' => [
                'mon' => self::$aviable_time_periods[rand(0, 2)],
                'tue' => self::$aviable_time_periods[rand(0, 2)],
                'wed' => self::$aviable_time_periods[rand(0, 2)],
                'thu' => self::$aviable_time_periods[rand(0, 2)],
                'fri' => self::$aviable_time_periods[rand(0, 2)],
                'sat' => self::$aviable_time_periods[rand(0, 2)],
                'sun' => self::$aviable_time_periods[rand(0, 2)],
            ],
            'account_status' => rand(0, 1),
            'region_tb_support' => Region::all()->random()->id
        ];
        return $def;
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
