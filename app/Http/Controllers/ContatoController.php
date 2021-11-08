<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request) {
        //validar os dados recebidos pelo formulario
        $request->validate(
            [
                'nome' => 'required|min:3|max:40',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],
            [
                'required' => 'O campo precisa ser requerido',
                'nome.required' => 'O campo nome precisa ser requerido',
                'nome.min' => 'O campo nome precisa ter no minimo 3 caracteres',
                'nome.max' => 'O campo nome pode ter no maximo 40 caracteres',
                'telefone.required' => 'O campo telefone precisa ser requerido',
                'email' => 'E-mail informado invalido'
            ]
        );
        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }

}
