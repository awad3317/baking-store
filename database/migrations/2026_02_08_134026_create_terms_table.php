<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('terms', function (Blueprint $table) {
            $table->id();
            $table->string('title');        // العنوان (مثلاً: مقدمة)
            $table->longText('content');    // المحتوى (يقبل HTML)
            $table->string('icon');         // اسم الأيقونة (مثلاً: info)
            $table->integer('sort_order')->default(0); // للترتيب
            $table->boolean('is_active')->default(true); // للإخفاء والإظهار
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terms');
    }
};
