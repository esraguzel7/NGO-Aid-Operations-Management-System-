<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Operation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (\App\Models\Region::all() as $region) {

            $cash_operation = new \App\Models\Operation();
            $cash_operation->manager = \App\Models\User::where('id', 1)->first()->id; // admin user
            $cash_operation->region = $region->id;
            $cash_operation->operation_type = 'cash';
            $cash_operation->description = 'cash assistance for ' . $region->name;

            $requests = \App\Models\RequestForHelp::where('is_complated', false)
                ->where('type_of_support', 1)
                ->whereDoesntHave('operation')
                ->whereHas('get_family', function ($query) use ($region) {
                    $query->where('region', $region->id);
                })
                ->get();

            $totalDifference = 0.0;
            foreach ($requests as $request) {
                $monthlyExpense = $request->get_family->monthly_expense;
                $monthlyIncome = $request->get_family->monthly_income;

                if ($monthlyIncome >= $monthlyExpense)
                    continue;

                $difference = $monthlyExpense - $monthlyIncome;
                $totalDifference += $difference;
            }

            $cash_operation->balance_required = $totalDifference;
            $cash_operation->planned_date = date('Y-m-d', strtotime('+' . rand(1, 10) . ' days'));
            $cash_operation->save();
        }
    }
}
