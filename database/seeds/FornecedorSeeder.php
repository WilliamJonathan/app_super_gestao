<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * comando para criar um seeder
     * php artisan make:seeder NomeSeeder
     * comando para processar todos os seeders
     * php artisan db:seed
     * comando para precessar um seeder especifico
     * php artisan db:seed --class=NomeClass
     */

    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'PR';
        $fornecedor->email = 'contato@forncedor100.com.br';
        $fornecedor->save();
    }
}
