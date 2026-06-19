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
        Schema::create('youtubeurs', function (Blueprint $table) {
          public function up(): void
{
    Schema::create('youtubeurs', function (Blueprint $table) {
        $table->id();
        $table->string('nom');          // Nom du membre des Jacksons
        $table->string('role');         // Son rôle
        $table->text('description');    // Sa description
        $table->string('image')->nullable(); // Lien de l'image
        $table->timestamps();
    });
}
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Youtubeurs');
    }
};
