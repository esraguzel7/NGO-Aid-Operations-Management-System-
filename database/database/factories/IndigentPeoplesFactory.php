<?php

namespace Database\Factories;

use App\Models\IndigentPeoples;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class IndigentPeoplesFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = IndigentPeoples::class;
    protected static ?string $password;

    private static $gender = ['male', 'female'];

    private static function educational_status()
    {
        $age = rand(4, 24);

        if (rand(0, 1)) {

            $status = 'unknown';
            $level = null;
            if ($age < 6)
                $level = rand(0, 1) ? null : 'Preschool';
            elseif ($age < 17) {
                $class = $age - 6;
                if ($class <= 6) {
                    $level = rand(0, 1) ? null : 'Primary School';

                } elseif ($class <= 9) {
                    $level = rand(0, 1) ? null : 'Middle School';

                    if (is_null($level))
                        switch (rand(0, 1)) {
                            case 1:
                                $status = 'Preschool (Discontinued)';
                                break;
                        }

                } else {
                    $level = rand(0, 1) ? null : 'High School';

                    if (is_null($level))
                        switch (rand(0, 2)) {
                            case 1:
                                $status = 'Preschool (Discontinued)';
                                break;
                            case 2:
                                $status = 'Middle School (Discontinued)';
                                break;
                        }
                }
            } else {
                $level = rand(0, 1) ? null : 'University';
                if (is_null($level))
                    switch (rand(0, 3)) {
                        case 1:
                            $status = 'Preschool (Discontinued)';
                            break;
                        case 2:
                            $status = 'Middle School (Discontinued)';
                            break;
                        case 3:
                            $status = 'High School (Discontinued)';
                            break;
                    }
            }

            if(!is_null($level) && !is_null($status)){
                $status = 'Continues';
            }

            return [
                'age' => $age,
                'status' => $status,
                'level' => $level,
            ];
        } else {
            return [
                'age' => $age,
                'status' => 'uneducated',
                'level' => null,
            ];
        }
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake();

        $number_of_people = rand(2, 8);
        $number_of_children = rand(0, $number_of_people - 2);
        $childrens_educational_status = [];
        $employment_status = [];

        for ($i = 0; $i < $number_of_children; $i++) {
            $childrens_educational_status[] = self::educational_status();
        }

        for ($i = 0; $i < $number_of_people - $number_of_children; $i++) {
            $employment_status[] = (rand(0, 100) > 75) ? 'Working' : 'Unemployed';
        }

        $def = [
            'family_name' => $faker->lastName,
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'phone' => fake()->unique()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'monthly_income' => rand(0, 15) * 125,
            'number_of_people' => $number_of_people,
            'number_of_children' => $number_of_children,
            'childrens_educational_status' => $childrens_educational_status,
            'employment_status' => $employment_status,
            'monthly_expense' => rand(10, 25) * 125,
            'address' => $faker->address,
            'region' => Region::all()->random()->id
        ];
        return $def;
    }

}
