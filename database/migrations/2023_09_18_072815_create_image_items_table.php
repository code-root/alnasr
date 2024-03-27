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
        Schema::create('image_items', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('original_name');
            $table->enum('language', ['ar', 'en']);
            $table->string('table_name');
            $table->string('token');
            $table->unsignedBigInteger('table_id')->nullable();
            $table->string('image_size');
            $table->enum('status', ['slider', 'logo', 'all']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_items');
    }
};
