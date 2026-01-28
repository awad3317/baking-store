<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // نستخدم firstOrCreate لمنع تكرار الأدمن إذا تم تشغيل السيدر مرتين
        User::firstOrCreate(
            ['email' => 'admin@sweet.com'], // نبحث عنه بهذا الإيميل
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // يفضل استخدام Hash::make
                'role' => 'admin',
                'email_verified_at' => now(), // تفعيل الإيميل مباشرة
            ]
        );
    }
}