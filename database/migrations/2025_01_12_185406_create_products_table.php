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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nameProd', 100)->nullable()->default('Producto');
            $table->foreignId('cat_id');
            $table->string('descProd', 200)->nullable()->default('Descripcion');
            $table->integer('stock')->unsigned()->nullable()->default(12);
            $table->decimal('price', 6, 1)->nullable()->default(123.45);
            $table->string('imagen', 100)->nullable()->default('Imagen');
            $table->timestamps();

            $table->foreign(columns: 'cat_id')
                ->references(columns: 'id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
