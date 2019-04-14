<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    public function listar()
    {
        $clients = Client::all();
        return view('admin.cliente.list', compact('clients'));
    }

    public function formCadastrar()
    {
        return view('admin.cliente.create');
    }

    public function cadastrar(Request $request)
    {
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return redirect()->to('/admin/client');
    }

    public function formEditar($id)
    {
        $client = Client::find($id);
        if(!$client){
            abort(404);
        }
        return view('admin.cliente.edit', compact('client'));
    }

    public function editar(Request $request, $id)
    {
        $client = Client::find($id);
        if(!$client){
            abort(404);
        }
        $client->name = $request->name;
        $client->email = $request->email;
        $client->save();
        return redirect()->to('/admin/client');
    }

/*
    public function cadastrar(){
        $nome = 'João Paulo';
        $dia = '03/04/2019';
        /*return view('cadastrar', [
            'nome' => $nome,
            'dia' => $dia
        ]);*/
        //return view('cadastrar',compact('nome', 'dia'));
       /* return view('admin.cliente.cadastrar')
            ->with('nome',$nome)
            ->with('dia',$dia);
    }
*/
    public function excluir(){

    }

}
