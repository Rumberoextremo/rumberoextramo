<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('aliado');
            $table->string('categoria');
            $table->string('subcategoria');
            $table->integer('cantidad');
            $table->decimal('precio', 10, 2);
            $table->string('nombre_producto');
            $table->decimal('descuento', 5, 2);
            $table->foreignId('factura_id')->constrained()->onDelete('cascade');
            $table->timestamps();
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
