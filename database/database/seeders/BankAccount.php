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
                'balance' => 10000.00,
            ],
            [
                'name' => 'French Business Bank',
                'iban' => 'FR1234567890123456789012',
                'balance' => 50000.00,
            ],
            [
                'name' => 'Italian UniCredit',
                'iban' => 'IT123456789012345678901234',
                'balance' => 100000.00,
            ],
            [
                'name' => 'Spanish BBVA',
                'iban' => 'ES1234567890123456789012345',
                'balance' => 20000.00,
            ],
            [
                'name' => 'Dutch ING Bank',
                'iban' => 'NL12345678901234567890',
                'balance' => 5000.00,
            ],
            [
                'name' => 'Portuguese Millennium bcp',
                'iban' => 'PT1234567890123456789012345',
                'balance' => 1000.00,
            ],
        ];

        foreach ($bankalar as $banka) {
            DB::table('bank_accounts')->insert([
                'name' => $banka['name'],
                'iban' => $banka['iban'],
                'balance' => $banka['balance'],
            ]);
        }
    }
}
