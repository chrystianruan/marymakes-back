<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('imagens');
            $table->text('nome');
            $table->text('descricao');
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->foreignId('marca_id')->constrained('marcas');
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->decimal('preco');
            $table->decimal('desconto');
            $table->integer('estoque');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
