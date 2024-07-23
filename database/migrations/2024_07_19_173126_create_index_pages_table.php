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
        Schema::create('index_pages', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->longText('value');
            $table->enum('value_type',['1', '2', '3', '4'])->default('1')->comment('1 for text, 2 for image, 3 for boolean value, 4 for file or pdf');
            $table->enum('is_active',['0','1'])->default('1')->comment('1 for active, 0 for inactive, It means that portion will be get hidden from the user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index_pages');
    }
};
