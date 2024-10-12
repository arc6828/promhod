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
        Schema::create('station_images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('url')->nullable();
            $table->string('owner')->nullable();
            $table->string('station_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('station_images');
    }
};
