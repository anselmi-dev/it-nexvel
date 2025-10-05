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
        Schema::create('social_networks', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre de la red social (ej: Facebook, Instagram, LinkedIn)
            $table->string('url'); // URL de la red social
            $table->string('icon')->nullable(); // Ruta del icono (ej: icon-facebook.svg)
            $table->enum('icon_type', ['image', 'svg'])->default('svg');
            $table->text('icon_svg')->nullable();
            $table->string('alt_text')->nullable(); // Texto alternativo para accesibilidad
            $table->string('color')->nullable(); // Color de la red social (hex)
            $table->integer('sort_order')->default(0); // Orden de visualización
            $table->boolean('is_active')->default(true); // Si está activa o no
            $table->json('attributes_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_networks');
    }
};
