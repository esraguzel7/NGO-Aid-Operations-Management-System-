<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BankAccount::class,
            Region::class,
            User::class,
            IndigentPeoples::class,
            SupportTypes::class,
            Warehouse::class,
            RequestForHelp::class,
        ]);
    }
}
