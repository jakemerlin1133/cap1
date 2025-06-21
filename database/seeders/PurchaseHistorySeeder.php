<?php

namespace Database\Seeders;

use App\Models\PurchaseHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PurchaseHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PurchaseHistory::factory()
            ->count(30)
            ->create();
    }
}
