<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaran_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ttl');
            $table->string('email');
            $table->string('nim');
            $table->string('whatsapp');
            $table->text('motivasi');
            $table->string('foto_ktm_url');
            $table->string('cv_url');
            $table->string('sertifikat_url');
            $table->string('status')->default('pending'); // pending, diterima, ditolak
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_submissions');
    }
};
