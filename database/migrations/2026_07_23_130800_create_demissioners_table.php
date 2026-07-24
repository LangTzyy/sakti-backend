<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('demissioners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role'); // "Ketua 2021", dst
            $table->string('period')->nullable(); // "2021-2022"
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demissioners');
    }
};
