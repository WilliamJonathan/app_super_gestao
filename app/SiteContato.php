<?php

namespace App;

/*
*comando para criar um novo model e sua respectiva migration
*(retirar o "-m" so fim do comando para garar o model sem migration)
*php artisan make:model SiteContato -m
*o model fica solto na raiz da pasta App
*e o migration fica na pasta database
*/

/**
 * Usar php artisan tinker
 * para testar comunicação entre o contralador modelo e base de dados sem uma interface
 * este comandos a seguir "virtualizam" uma comunição entre model, controller e base de dados
 * atravez de um objeto enviado pela linha de comando
 * -----------------------------
 * 1º instacia obj com nameSpace do model
 * $contato = new \App\SiteContato();
 * 2º atribuir valores ao obj conforme nome dos campos na base de dados
 * $contato->nome = 'Valor do campo';
 * 3º executa metodo para verificar se os atributos foram setados
 * print_r($contato->getAttributes());
 * 4º executa metodo para persistir dados na base de dados
 * $contato->save();
 * 
 */

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //
}
