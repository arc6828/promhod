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
        Schema::create('line_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('userId')->nullable();
            $table->string('displayName')->nullable();
            $table->string('pictureUrl')->nullable();
            $table->string('statusMessage')->nullable();
            $table->string('language')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('line_users');
    }
};
