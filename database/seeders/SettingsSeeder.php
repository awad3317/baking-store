<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // General
            ['key' => 'site_name', 'value' => 'Sweet Supplies', 'group' => 'general'],
            ['key' => 'site_description', 'value' => 'مستلزمات حلويات فاخرة للمبدعين، المحترفين، والحالمين.', 'group' => 'general'],
            ['key' => 'currency_symbol', 'value' => 'ر.ي', 'group' => 'general'],

            // Contact
            ['key' => 'site_phone', 'value' => '+967 77 123 4567', 'group' => 'contact'],
            ['key' => 'site_email', 'value' => 'info@sweetsupplies.com', 'group' => 'contact'],
            ['key' => 'site_address', 'value' => 'Aden, Khormaksar, Main St.', 'group' => 'contact'],
            ['key' => 'whatsapp_number', 'value' => '967730000000', 'group' => 'contact'],

            // Social Media
            ['key' => 'facebook_url', 'value' => 'https://facebook.com/sweetsupplies', 'group' => 'social'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com/sweetsupplies', 'group' => 'social'],
            ['key' => 'tiktok_url', 'value' => 'https://tiktok.com/@sweetsupplies', 'group' => 'social'],
        ];

        DB::table('settings')->insert($settings);
    }
}
