<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('org_contact', function (Blueprint $table) {
            $table->dropColumn('linkedin_url');
            $table->string('youtube_url')->nullable()->after('instagram_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('org_contact', function (Blueprint $table) {
            $table->dropColumn('youtube_url');
            $table->string('linkedin_url')->nullable()->after('instagram_url');
        });
    }
};
