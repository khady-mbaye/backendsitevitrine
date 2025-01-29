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
        Schema::dropIfExists('nom_de_la_table');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('nom_de_la_table', function (Blueprint $table) {
            $table->id();
            // Ajoutez les colonnes nécessaires ici
            $table->timestamps();
        });
    }
};
