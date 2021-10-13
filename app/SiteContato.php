<?php

namespace App;

/*
*comando para criar um novo model e sua respectiva migration
*(retirar o "-m" so fim do comando para garar o model sem migration)
*php artisan make:model SiteContato -m
*o model fica solto na raiz da pasta App
*e o migration fica na pasta database
*/

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //
}
