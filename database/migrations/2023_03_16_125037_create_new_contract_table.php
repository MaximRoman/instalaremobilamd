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
        Schema::create('new_contract', function (Blueprint $table) {
            $table->id();
            $table->string('nume', 255);
            $table->string('telefon', 255);
            $table->string('adresa', 255);
            $table->text('mesaj')->default('Mesaj gol!');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new_contract');
    }
};
