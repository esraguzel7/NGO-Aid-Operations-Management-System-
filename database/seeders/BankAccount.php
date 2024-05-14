<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bankalar = [
            [
                'name' => 'German Bank',
                'iban' => 'DE12345678901234567890',
                'balance' => rand(0, 20) * 1000,
            ],
            [
                'name' => 'French Business Bank',
                'iban' => 'FR1234567890123456789012',
                'balance' => rand(0, 20) * 1000,
            ],
            [
                'name' => 'Italian UniCredit',
                'iban' => 'IT123456789012345678901234',
                'balance' => rand(0, 20) * 1000,
            ],
            [
                'name' => 'Spanish BBVA',
                'iban' => 'ES1234567890123456789012345',
                'balance' => rand(0, 20) * 1000,
            ],
            [
                'name' => 'Dutch ING Bank',
                'iban' => 'NL12345678901234567890',
                'balance' => rand(0, 20) * 1000,
            ],
            [
                'name' => 'Portuguese Millennium bcp',
                'iban' => 'PT1234567890123456789012345',
                'balance' => rand(0, 20) * 1000,
            ],
        ];

        foreach ($bankalar as $banka) {
            \App\Models\BankAccount::create([
                'name' => $banka['name'],
                'iban' => $banka['iban'],
                'balance' => $banka['balance'],
            ]);
        }
    }
}
