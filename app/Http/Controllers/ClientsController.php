<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function cadastrar(){
        $nome = 'João Paulo';
        $dia = '03/04/2019';
        /*return view('cadastrar', [
            'nome' => $nome,
            'dia' => $dia
        ]);*/
        //return view('cadastrar',compact('nome', 'dia'));
        return view('admin.cliente.cadastrar')
            ->with('nome',$nome)
            ->with('dia',$dia);
    }

    public function excluir(){

    }

    public function editar(){

    }
}
