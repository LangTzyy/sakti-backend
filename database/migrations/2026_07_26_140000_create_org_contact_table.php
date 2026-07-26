<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('org_contact', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('email');
            $table->string('office_hours');
            $table->string('maps_query')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_contact');
    }
};
