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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable()->default('Nombre');
            $table->string('last_name', 50)->nullable()->default('Primer Apellido');
            $table->string('second_last_name', 50)->nullable()->default('Segundo Apellido');
            $table->string('email', 100)->nullable()->default('Correo Electrónico');
            $table->bigInteger('phone')->nullable()->default(7848888888);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
