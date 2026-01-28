<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. YER (Yemeni Rial) - Default
        Currency::create([
            'name' => 'Yemeni Rial',
            'code' => 'YER',
            'symbol' => 'ر.ي',
            'exchange_rate' => 1.0000,
            'is_default' => true,
        ]);

        // 2. SAR (Saudi Riyal)
        Currency::create([
            'name' => 'Saudi Riyal',
            'code' => 'SAR',
            'symbol' => 'ر.س',
            'exchange_rate' => 0.0150,
            'is_default' => false,
        ]);

        // 3. USD (US Dollar)
        Currency::create([
            'name' => 'US Dollar',
            'code' => 'USD',
            'symbol' => '$',
            'exchange_rate' => 0.0040,
            'is_default' => false,
        ]);
    }
}
