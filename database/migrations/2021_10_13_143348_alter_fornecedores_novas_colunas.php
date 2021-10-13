<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
      * php artisan migrate
      * este métodp executa todos as functions up que ainda nao foram executadas
      */
    public function up()
    {
        //metodo para add dados em uma tabela já existente no banco
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->string('uf', 2);
            $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     /**
      * php artisan migrate:rollback
      * para executaro rollback das migrates executa o comando acima
      * caso queira voltar mais de um passo no rollback executar o conando abaixo
      * php artisan migrate:rollback --step=?
      */
    public function down()
    {
        //remover colunas
        Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn(['uf', 'email']);
        });
    }
}
