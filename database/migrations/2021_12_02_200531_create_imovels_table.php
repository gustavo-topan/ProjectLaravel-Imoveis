<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('bairroEndereco');
            $table->integer('numeroEndereco');
            $table->string('cidadeEndereco');
            $table->string('estadoEndereco');
            $table->float('preco');
            $table->integer('qtdQuartos');
            $table->enum('tipo', ['apartamento', 'casa', 'kitnet']);
            $table->enum('finalidade', ['venda', 'aluguel']);
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
        Schema::dropIfExists('imoveis');
    }
}
