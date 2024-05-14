<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestForHelp>
 */
class RequestForHelpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rand_family = \App\Models\IndigentPeoples::all()->random();
        $they_need_cash = false;

        if ($rand_family->monthly_income <= $rand_family->monthly_expense) {
            // First, they need financial help
            $_test = \App\Models\RequestForHelp::where('family', $rand_family->id)
                ->where('is_complated', false)
                ->whereHas('support_type', function ($query) {
                    $query->where('is_stockable', false);
                })
                ->get();
            if ($_test->count() == 0) {
                $they_need_cash = true;
            }
        }

        $type_of_support = \App\Models\SupportTypes::where('is_stockable', true)->get()->random();

        if ($they_need_cash && rand(0, 1)) {
            $type_of_support = \App\Models\SupportTypes::where('is_stockable', false)->get()->random();
        }

        return [
            'family' => $rand_family,
            'type_of_support' => $type_of_support,
            'is_complated' => false,
        ];
    }
}
