<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('org_contact', function (Blueprint $table) {
            $table->string('instagram_url')->nullable()->after('maps_query');
            $table->string('linkedin_url')->nullable()->after('instagram_url');
            $table->string('github_url')->nullable()->after('linkedin_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('org_contact', function (Blueprint $table) {
            $table->dropColumn(['instagram_url', 'linkedin_url', 'github_url']);
        });
    }
};
