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
        Schema::create('seo_metadata', function (Blueprint $table) {
            $table->id();
            $table->string('page')->unique(); // Identificador de la página (home, about, etc.)
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('author')->nullable();
            $table->string('robots')->default('index, follow');
            $table->string('language')->default('es');
            $table->string('geo_region')->nullable();
            $table->string('geo_placename')->nullable();

            // Open Graph
            $table->string('og_type')->default('website');
            $table->string('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_site_name')->nullable();
            $table->string('og_locale')->default('es_CL');

            // Twitter
            $table->string('twitter_card')->default('summary_large_image');
            $table->string('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->string('twitter_image')->nullable();
            $table->string('twitter_site')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_metadata');
    }
};
