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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('key_name');
            $table->string('value');
            $table->enum('value_type',['1', '2', '3'])->default('1')->comment('1 for text, 2 for image, 3 for file');
            $table->enum('is_active',['0','1'])->default('1')->comment('1 for active, 0 for inactive, It means that portion will be get hidden from the user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_settings');
    }
};
