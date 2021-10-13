<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        //adicionar relacionamento com a tabela produtos
        //relacionamento 1 para N
        Schema::table('produtos', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');//cria coluna que vai ser FK na tabela produtos
            $table->foreign('unidade_id')->references('id')->on('unidades');//cria FK na tabela produtos
        });

        //adicionar relacionamento com a tabela produto_detalhes
        //relacionamento 1 para N
        Schema::table('produto_detalhes', function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');//cria coluna que vai ser FK na tabela produto_detalhes
            $table->foreign('unidade_id')->references('id')->on('unidades');//cria FK na tabela proproduto_detalhesdutos
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento com a tabela produto_detalhes
        Schema::table('produto_detalhes', function(Blueprint $table){
            //remover a fk
            $table->dropForeign('produto_detalhes_unidade_id_foreign');//[tabela_coluna_instrução]
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });
        //remover relacionamento com a tabela produtos
        Schema::table('produtos', function(Blueprint $table){
            //remover a fk
            $table->dropForeign('produtos_unidade_id_foreign');//[tabela_coluna_instrução]
            //remover a coluna unidade_id
            $table->dropColumn('unidade_id');
        });
        Schema::dropIfExists('unidades');
    }
}
